<?php 
namespace App\Controllers;

class adminHome extends BaseController {
    public $data,  $admin_model, $db;
	public function __construct() {
        $this->db = \Config\Database::connect('homeToko');
        $this->db2 = \Config\Database::connect('home');
        $this->admin_model = new \App\Models\admin_model();
        $this->data['logo'] = $this->admin_model->GetLogo()->getRowArray();
        $this->data['status'] = $this->db->query("select count(status) as stts from tbl_hubungikami where status='0'")->getRowArray();
        
        helper('form');
        $this->data['status_transaksi'] = $this->db->query("select count(status) as stts from tbl_transaksi_header where status='0'")->getRowArray();   
        helper('form');
    }
    public function services(){
        $data['data_services']= $this->admin_model->getServices()->getResultArray();
        $data['judul_bar'] = 'Services';
        $data['id_tentangkami']='2';
        $data['judul']='services';
        $data['deskripsi']='blalbaldgasdlfkj';
        $data = $data + $this->data; 
        
        echo view('adminweb/template/header', $data);
        echo view('adminHome/services/index',$data);
        echo view('adminweb/template/footer', $data);
    }
    public function halamanTambahServices(){
            $data['id']             = '';
            $data['nama_services']  = '';
            $data['keterangan']     = '';
            $data['gambar'] = '';
        $data['judul_bar'] = 'Services';
        $data['judul']='services';
        $data = $data + $this->data; 
        $data['url_services'] = '/adminHome/tambahServices';
        $data['tombol_services'] = 'tambah';
        echo view('adminweb/template/header', $data);
        echo view('adminHome/services/add',$data);
        echo view('adminweb/template/footer', $data);
    }
    public function halamanEditServices($id){
        $data['data_services']= $this->admin_model->getServicesId($id)->getResultArray();
        foreach ($data['data_services'] as $tampil) {
            $data['id']             = $tampil['id'];
            $data['nama_services']  = $tampil['nama_services'];
            $data['keterangan']     = $tampil['keterangan'];
            $data['gambar']     = $tampil['gambar'];
        }
        $data['judul_bar'] = 'Edit Services';
        $data['judul']='Edit services';
        $data = $data + $this->data; 
        $data['url_services'] = '/adminHome/editServices';
        $data['tombol_services'] = 'update';
        echo view('adminweb/template/header', $data);
        echo view('adminHome/services/add',$data);
        echo view('adminweb/template/footer', $data);
    }
    public function tambahServices(){

        if(!$this->validate([
            'nama_services' => 'required',
            'fileGambar'      => 'uploaded[userfile]'
            ])){
                return redirect()->to('/adminHome/services');
            }else{
                $files = $this->request->getFile('userfile');
                $files->move('images/home/gambarServices');
                $nama_services = $this->request->getVar('nama_services');
                $nama_gambar = $files->getName();
                $keterangan = $this->request->getVar('keterangan');
                $tgl_upload ='';
                $query = $this->db2->query("INSERT INTO services VALUES ('','$nama_services','$nama_gambar', '$keterangan', '$tgl_upload')");
                return redirect()->to('/adminHome/services');
            }
    }
        
    public function editServices(){

            if(!$this->validate([
                'nama_services' => 'required',
                ])){
                    $id = $this->request->getVar('id');
                    return redirect()->to("/adminHome/halamanEditServices/$id");
                }else{
                    $files = $this->request->getFile('userfile');
                    $nama_gambar = $files->getName();
                    if( $nama_gambar != null ){
                        $files->move('images/home/gambarServices');
                        $nama_gambar = $files->getName();
                        // mengambil nama gambar sebelumnya
                        $nama_gambar_sebelumnya = $this->request->getVar('nama_gambar_sebelumnya');
                        $files2   = glob('images/home/gambarServices/'.  $nama_gambar_sebelumnya );
                        // menghapus nama gambar sebelumnya
                        foreach ($files2 as $file) {
                            if (is_file($file))
                            unlink($file); // hapus file
                        }
                    }
                    $nama_services = $this->request->getVar('nama_services');
                    $id = $this->request->getVar('id');
                    $keterangan = $this->request->getVar('keterangan');
                    $tgl_upload ='';
                    $query = $this->db2->query("UPDATE services SET nama_services='$nama_services', gambar='$nama_gambar', keterangan='$keterangan', tgl_upload='$tgl_upload' WHERE id='$id' ");
                    return redirect()->to('/adminHome/services');
            }
    }
    public function deleteServices($id= null){
        if($id == ''){
            echo 'tidak bisa di proses';
        }else{
            $query = $this->db2->query("DELETE FROM services WHERE id='$id'");
            return redirect()->to('/adminHome/services/');
        }
    }

    public function produkGalery(){
        $data['galery'] = $this->admin_model->getProdukGalery()->getResultArray();
        $data['judul_bar'] = 'Produk Galery';
        $data['judul']='Galery';
        $data = $data + $this->data; 

        echo view('adminweb/template/header', $data);
        echo view('adminHome/produkGalery/index',$data);
        echo view('adminweb/template/footer', $data);
    }
    public function halamanEditGalery($id){
        $data['data_gambar']= $this->admin_model->getProdukGaleryId($id)->getResultArray();
        dd($data['data_gambar']);
        foreach ($data['data_gambar'] as $tampil) {
            $data['id']             = $tampil['id'];
            $data['nama_gambar']  = $tampil['nama_gambar'];
            $data['filter']     = $tampil['filter'];
        }
        $data['judul_bar'] = 'Edit Services';
        $data['judul']='Edit gambar';
        $data['url_gambar'] = '/adminHome/editServices';
        $data['tombol_gambar'] = 'update';
        $data = $data + $this->data; 
        echo view('adminweb/template/header', $data);
        echo view('adminHome/produkGalery/add',$data);
        echo view('adminweb/template/footer', $data);
    }
    public function halamanTambahGalery(){
        $data['id']             = '';
        $data['nama_gambar']  = '';
        $data['filter']     = '';
        $data['judul_bar'] = 'Produk Galery';
        $data['judul']='Galery';
        $data['tombol']='tambah';
        $data['id']='';
        $data['url_gambar'] = '/adminHome/tambahGalery';
        $data = $data + $this->data; 

        echo view('adminweb/template/header', $data);
        echo view('adminHome/produkGalery/add',$data);
        echo view('adminweb/template/footer', $data);
    }
   
    public function tambahGalery(){
        if(!$this->validate([
            'nama_gambar' => 'required',
            'fileGambar'      => 'uploaded[fileGambar]'
            ])){
                return redirect()->to('/adminHome/produkGalery/');
            }else{
                $files = $this->request->getFile('fileGambar');
                $files->move('images/home/gambarGalery');
                $nama = $this->request->getVar('nama_gambar');
                $nama_gambar = $files->getName();
                $tgl_upload ='';
                $query = $this->db2->query("INSERT INTO img_galery VALUES ('','$nama','', '$nama_gambar', '','$tgl_upload')");
                echo 'galery berhasil di tambahkan';
                return redirect()->to('/adminHome/produkGalery/');

            }
    }
    public function updateGalery(){
        if(!$this->validate([
            'nama_gambar' => 'required',
            'fileGambar'      => 'uploaded[fileGambar]'
            ])){
                echo 'nama dan gambar harus di isi';
                return 0;
            }else{
                    $files = $this->request->getFile('fileGambar');
                    $files->move('images/home/produkGalery');
                    $nama_gambar = $this->request->getVar('nama_gambar');
                    $id = $this->request->getVar('id');
                    $nama_gambar = $files->getName();
                    $keterangan = $this->request->getVar('keterangan');
                    $tgl_upload ='';
                    $query = $this->db2->query("UPDATE img_galery SET nama_gambar='$nama_gambar', tgl_upload='$tgl_upload' WHERE id='$id' ");
                // return redirect()->to('/adminToko/home');
                echo 'nama dan gambar berhasil di update';

                return 1;
            }
    }
    public function deleteGalery($id = null){
        if($id == ''){
            echo 'tidak bisa di proses';
        }else{
            $query = $this->db2->query("DELETE FROM img_galery WHERE id='$id'");
            return redirect()->to('/adminHome/produkGalery/');
        }
    }

    public function tanyaJawab(){
        $data['tanyaJawab'] = $this->admin_model->getTanyaJawab()->getResultArray();
        // dd($data['tanyaJawab']);
        $data['judul_bar'] = 'Tanya Jawab';
        $data['judul']='Tanya Jawab';
        $data = $data + $this->data; 

        echo view('adminweb/template/header', $data);
        echo view('adminHome/tanyaJawab/index',$data);
        echo view('adminweb/template/footer', $data);
    }
    public function halamanTambahTanya(){
        $data['id']             = '';
        $data['pertanyaan']  = '';
        $data['jawaban']  = '';
        $data['filter']     = '';
        $data['judul_bar'] = 'Tanya Jawab';
        $data['judul']='Tanya Jawab';
        $data['tombol']='tambah';
        $data['id']='';
        $data['url'] = '/adminHome/tambahTanyaJawab';
        $data = $data + $this->data; 

        echo view('adminweb/template/header', $data);
        echo view('adminHome/tanyaJawab/add',$data);
        echo view('adminweb/template/footer', $data);
    }
    public function tambahTanyaJawab(){
        if(!$this->validate([
            'pertanyaan' => 'required',
            'jawaban' => 'required'
            ])){
                return redirect()->to('/adminHome/halamanTambahTanya/');
            }else{
                $pertanyaan  = $this->request->getVar('pertanyaan') ;
                $jawaban  = $this->request->getVar('jawaban') ;
                $tgl_upload ='';
                $query = $this->db2->query("INSERT INTO tanyajawab VALUES ('','$pertanyaan','$jawaban','$tgl_upload')");
                return redirect()->to('/adminHome/tanyaJawab/');

            }
    }
    public function deleteTanya($id = null){
        if($id == ''){
            echo 'tidak bisa di proses';
        }else{
            $query = $this->db2->query("DELETE FROM tanyajawab WHERE id='$id'");
            return redirect()->to('/adminHome/tanyaJawab/');
        }
    }
    public function halamanEditTanya($id){
        $data['data_tanya_jawab']= $this->admin_model->getTanyaJawabId($id)->getResultArray();
        // dd($data['data_tanya_jawab']);
        foreach ($data['data_tanya_jawab'] as $tampil) {
            $data['id']             = $tampil['id'];
            $data['pertanyaan']  = $tampil['pertanyaan'];
            $data['jawaban']     = $tampil['jawaban'];
        }
        $data['judul_bar'] = 'Edit Tanya Jawab';
        $data['judul']='Edit Tanya Jawab';
        $data['url'] = '/adminHome/updateTanya';
        $data['tombol'] = 'update';
        $data = $data + $this->data; 
        echo view('adminweb/template/header', $data);
        echo view('adminHome/tanyaJawab/add',$data);
        echo view('adminweb/template/footer', $data);
    }
    public function updateTanya(){
        if(!$this->validate([
            'pertanyaan' => 'required',
            'jawaban' => 'required'
            ])){
                return redirect()->to('/adminHome/halamanEditTanya/');
            }else{
                    $pertanyaan = $this->request->getVar('pertanyaan');
                    $jawaban = $this->request->getVar('jawaban');
                    $id = $this->request->getVar('id');
                    $tgl_upload ='';
                    $query = $this->db2->query("UPDATE tanyajawab SET pertanyaan='$pertanyaan',jawaban='$jawaban', tgl_upload='$tgl_upload' WHERE id='$id' ");
                // return redirect()->to('/adminToko/home');
                return redirect()->to('/adminHome/tanyaJawab/');

            }
    }
}
