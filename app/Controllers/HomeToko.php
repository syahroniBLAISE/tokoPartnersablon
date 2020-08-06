<?php

namespace App\Controllers;
use CodeIgniter\Controller;

// class HomeToko extends Controller {
	class HomeToko extends BaseController {
	public $home_model,$db,$session,$uri, $data;
	Public function __construct() {
        $this->db = \Config\Database::connect('homeToko');
		$this->home_model = new \App\Models\homeModel();
		$this->cart = new \App\Models\cart();
		$this->session = \Config\Services::session();
		$this->uri = new \CodeIgniter\HTTP\URI();
		helper('cookie');
		helper('form');
		helper('sn');

		$this->data = [
			'logo' 			=> $this->home_model->GetLogo()->getRowArray(),
			'kontak' 		=> $this->home_model->GetKontak()->getRowArray(),
			'sosial_media' 	=> $this->home_model->GetSosialMedia()->getRowArray(),
			'seo' 			=> $this->home_model->GetSeo()->getRowArray(), 
			'bank' 			=> $this->home_model->GetBank()->getRowArray(), 
			'brand' 		=> $this->home_model->GetBrand()->getResultArray(), 
			'kategori' 		=> $this->home_model->GetKategori()->getResultArray(),
			'jasapengiriman'=> $this->home_model->GetJasaPengiriman()->getResultArray()
		];
	}
	public function index() {
		$data = [
		'judulhalaman' 	=> 'HOME' ,
		'slider'		=> $this->home_model->GetSlider()->getResultArray(),
		'produk'		=> $this->home_model->GetProduk()->getResultArray(),
		'random'		=> $this->home_model->GetRandomProduk()->getRowArray(),
		'random_active'	=> $this->home_model->GetRandomActiveProduk()->getRowArray(),
		'terakhir'      => $this->home_model->maxIdSlider()->getRowArray()];
		$data = array_merge($this->data, $data);

		template1('toko/home/index',$data);
	}

	public function tentang_kami () {
		
		$data = [
		'judulhalaman' 	=> 'Tentang Kami',
		'tentangkami' 	=> $this->home_model->GetTentangKami()->getRowArray(),
		'produk'		=> $this->home_model->GetProduk()->getResultArray()];
		$data = array_merge($this->data, $data);

		template2('toko/home/tentang_kami',$data);
	}

	public function cara_belanja() {
		$data = [ 
		'judulhalaman' 	=> 'Cara Belanja',
		'carabelanja' 	=> $this->home_model->GetCaraBelanja()->getRowArray()];
		$data = array_merge($this->data, $data);
	
		template2('/toko/home/cara_belanja',$data);
	}

	public function order_sablon() {
		$data['judulhalaman'] 	= 'ORDER' ;

		$data['owner']			= $this->home_model->GetOwner()->getResultArray();
		$data['kode_produk'] 	= $this->home_model->GetMaxKodeProduk();
		$data['data_brand'] 	= $this->home_model->GetBrand()->getRowArray();
		$data['data_kategori'] 	= $this->home_model->GetKategori()->getRowArray();
		$data['warna']		= $this->home_model->GetWarna()->getResultArray();
		$data['size']		= $this->home_model->GetSize()->getResultArray();
		$data['lengan']		= $this->home_model->GetLengan()->getResultArray();
		$data['ketebalan']		= $this->home_model->GetKetebalan()->getResultArray();
		$data['brandkaos']		= $this->home_model->GetBrandkaos()->getResultArray();
		$data = array_merge($this->data, $data);
	

		template3('/toko/home/order_sablon',$data);
	}

	public function hubungi_kami () {
		$data['judulhalaman'] 	= 'Hubungi Kami' ;
		$data['owner']			= $this->home_model->GetOwner()->getRowArray();
		$data = array_merge($this->data, $data);

		template3('/toko/home/hubungi_kami',$data);
	}

	public function hubungi_kami_kirim() {
		$tanggal 	= date('Y-m-d');
		$nama 		=  $this->request->getVar('nama');
		$email 		=  $this->request->getVar('email');
		$hp 		=  $this->request->getVar('hp');
		$alamat 	=  $this->request->getVar('alamat');
		$pesan 		=  $this->request->getVar('pesan');

		$this->home_model->InsertHubungiKami($nama,$email,$hp,$alamat,$pesan,$tanggal);

		session()->setflashdata('sukses','Data Berhasil Dikirim');
		return redirect()->to("hubungi_kami");
	}

	public function kategori()
	{
		$pager = \Config\Services::pager();
        $model = new \App\Models\pag();
		
        $data = [
			'users' => $model->paginate(2),
            'pager' => $model->pager
		];
			$id_kategori= $this->request->uri->getSegment(3);
			$data['judulhalaman'] 	= 'KATEGORI' ;
			$data['nama_kategori']  = $this->home_model->GetNamaKategoriId($id_kategori)->getRowArray();
			$data = array_merge($this->data, $data);
			$page=$this->request->uri->getSegment(4);
			$limit=12;
			if(!$page){ 
				$offset = 0;
				}else{$offset = $page;}
			$data['tot'] = $offset;
			$data['produk_kategori'] = $this->home_model->getProdukKategori2($id_kategori, $offset, $limit)->getResultArray();
 
			$data = array_merge($this->data, $data);

		template2('/toko/home/kategori',$data);

	}

	public function brand() {
		$id_brand= $this->request->uri->getSegment(3);
		$data['judulhalaman'] 	= 'BRAND' ;
		$data['nama_brand']  = $this->home_model->GetNamaBrandId($id_brand)->getRowArray();

			$page=$this->request->uri->getSegment(4);
			$limit=12;
			if(!$page):
			$offset = 0;
			else:
			$offset = $page;
			endif;
			
			$data['tot'] = $offset;
			$tot_hal = $this->home_model->GetProdukBrand($id_brand)->getResultArray();


			$page = \Config\Services::pager();
			$model = new \App\Models\pag();

			$data2 =
			[
				'users' => $model->paginate(2),
				'pager' => $model->page
			];
			
			$data = array_merge($this->data, $data);
			$data = array_merge($data, $data2);
			// $this->pagination->initialize($config);
			// $data["paginator"] =$this->pagination->create_links();
			
			$data['produk_brand'] = $this->db->query("select a.*,b.* from tbl_produk a join tbl_brand b on a.brand_id=b.id_brand where a.brand_id='$id_brand' order by a.id_produk desc 
			LIMIT ".$offset.",".$limit."")->getResultArray();

		template2('/toko/home/brand',$data);

	}

	public function cari () {
		$cari =$_POST['cari'];
		if ($cari!=="") {
			$data['judulhalaman'] 	= 'CARI' ;			
			$data['jasapengiriman']	= $this->home_model->GetJasaPengiriman()->getResultArray();
			$data['produk_cari']	= $this->home_model->GetProdukCari($cari)->getResultArray();
			$data = array_merge($this->data, $data);
			template3('/toko/home/cari',$data);
		}
		else {
			echo 'key belum di isi';
		}
	}

	public function produk () {
		$id_produk = $this->request->uri->getSegment(3);
		$data['judulhalaman'] 	= 'PRODUK' ;
		$data['jasapengiriman']	= $this->home_model->GetJasaPengiriman()->getRowArray();
		$data['random']			= $this->home_model->GetRandomProduk()->getRowArray();
		$data['random_active']	= $this->home_model->GetRandomActiveProduk()->getRowArray();
		$data['data_produk']= $this->home_model->GetProdukId($id_produk)->getRowArray();
		$data = array_merge($this->data, $data);
		template3('/toko/home/produk',$data);
	}

	public function keranjang() {
		$data['judulhalaman'] 	= 'Keranjang Belanja' ;
		$data = array_merge($this->data, $data);
		$id_produk = $this->request->uri->getSegment(3);

		if ($id_produk!="") {
			// jika produk sudah ada di keranjang maka tambahkan 1
			if(isset($_SESSION['keranjang'][$id_produk])){
				$_SESSION['keranjang'][$id_produk] += 1;		
			}else{
				// jika belum ada makan isi dengan 1
				$_SESSION['keranjang'][$id_produk] = 1;
			}
			// untuk menghapus session -> session_unset();
			$data['keranjang'] = $this->cart->getCart();
			template3('/toko/home/keranjang',$data);
			}else {
				if(isset($_SESSION['keranjang'])){
					$data['keranjang'] = $this->cart->getCart();
				}

			template3('/toko/home/keranjang',$data);
		}
	}

	public function keranjang_hapus($kode) {
		// echo $kode;
		// die;
		unset($_SESSION['keranjang']);
		if(isset($kode)){
			unset($_SESSION['keranjang'][$kode]);
			return redirect()->to('/homeToko/keranjang');
		}else{
			echo " varible Kode tidak ada";
		}

	}

	public function keranjang_update() {

		if(isset($_SESSION['keranjang'])){
			if(isset($_POST)){
			foreach($_SESSION['keranjang'] as $key => $val){
					foreach($_POST as $keyP => $valP){
						$keyP = (integer)$keyP;
						$valP = (integer)$valP;
						$key = (integer)$key;
						$val = (integer)$val;	
						if($key == $keyP){
							$_SESSION['keranjang'][$key] = $valP;
							var_dump($key);
							var_dump($val);
							var_dump($keyP);
							var_dump($valP);
						}
					}
				}
			}
		return redirect()->to('index');
		}else{
			return redirect()->to('keranjang');
		}

	}

	public function checkout () {
		session();
		$data['judulhalaman'] 	= 'Keranjang Check Out' ;
		$data['validation'] = \Config\Services::validation();
		$data['jasapengiriman']	= $this->home_model->GetJasaPengiriman()->getResultArray();
		$data['keranjang'] = $this->cart->getCart();
		$data['bank'] 		= $this->home_model->GetBank()->getResultArray();
		$data = array_merge($this->data, $data);
		// var_dump($data['jasapengiriman']);
		// die;


		// echo view('/toko/templates/headerbody',$data );
		// echo view('/toko/templates/headertop',$data );
		// echo view('/toko/templates/headermidle',$data );
		// echo view('/toko/templates/headerbottom',$data );
		// echo view('/toko/home/checkout',$data);
		// $data['bank'] 			= $this->home_model->GetBank()->getRowArray(); 
		// echo view('/toko/templates/footer',$data );

		template3('/toko/home/checkout',$data);

	}

	public function checkout_hapus($kode) {

		$data = array(
			'rowid' => $kode,
			'qty'   => 0);
			$this->cart->update($data);
		redirect('home/checkout');

	}

	public function checkout_update() {
		$total = $this->cart->total_items();
		$item = $this->input->post('rowid');
		$qty = $this->input->post('qty');
		for($i=0;$i < $total;$i++)
		{
			$data = array(
			'rowid' => $item[$i],
			'qty'   => $qty[$i]);
			$this->cart->update($data);
		}
		redirect('home/checkout');
	}

	public function checkout_invoice () {
		if(!$this->validate([
			'penerima' => 'required',
			// 'email' => 'required',
			// 'alamat' => 'required',
			// 'no_telepon' => 'required',
			// 'propinsi' => 'required',
			// 'kota' => 'required',
			// 'kode_pos' => 'required',
			// 'bank_id' => 'required',
			// 'jasapengiriman_id'	=> 'required'
			])){
				$data['jasapengiriman']	= $this->home_model->GetJasaPengiriman()->getRowArray();
				$validation = \Config\Services::validation();
				$data = array_merge($this->data, $data);
				return redirect()->to('/homeToko/checkout')->withInput()->with('validation', $validation);	
			}else {       
			$tgl_skr = date('Ymd');
			$cek_kode = $this->home_model->cek_kode($tgl_skr)->getResultArray();
			$kode_trans = "";
			foreach($cek_kode as $ck)
			{ 
				if($ck['kd']==NULL)
				{
					$kode_trans = $tgl_skr.'001';
				}
				else
				{
					$kd_lama = $ck['kd'];
					$kode_trans = $kd_lama+1;
				}
			}

			$penerima 			= $_POST["penerima"] ;
			$email2 			= $_POST["email"] ;
			$alamat 			= $_POST["alamat"] ;
			$no_telepon 		= $_POST["no_telepon"] ;
			$propinsi 			= $_POST["propinsi"] ;
			$kota 				= $_POST["kota"] ;
			$kode_pos 			= $_POST["kode_pos"] ;
			$bank_id 			= $_POST["bank_id"] ;
			$jasapengiriman_id 	= $_POST["jasapengiriman_id"] ;
		
			$isi_psn ='<table style="border:1px solid #000;" border="1" cellpadding=0>';
			$isi_psn ='<tr><td>Kode Produk</td><td>Nama Produk</td><td>Harga</td><td>Jumlah</td><td>Subtotal</td></tr>';
			// foreach($this->cart->contents() as $items)
			// {
				// 	$isi_psn = '<tr><td>'.$items["id"].'</td><td>'.$items["name"].'</td><td>Rp.'.$this->cart->format_number($items["price"]).'</td><td>'.$items["qty"].'</td><td>Rp.'.$this->cart->format_number($items["subtotal"]).'</td></tr>
				// 	';
				// }
				// $isi_psn = '<tr><td>Total Belanja (belum biaya kirim): </td><td colspan=4>Rp.'.$this->cart->format_number($this->cart->total()).'</td></tr>';
				$isi_psn ='</table><br>';
				$isi_psn ='Harga di atas belum termasuk biaya kirim. Kami akan mengirimkan total yang harus anda bayar ke email anda dalam jangka waktu 1x24 jam.<br>';
				$isi_psn ='Salam, Adriano MX Online Shop';
				

				$email = \Config\Services::email();
				
				$email->setFrom('syahronibagus@yahoo.co.id', 'partnersablon');
				$email->setTo($email2);
			
			// $email->setCC('another@another-example.com');
			// $email->setBCC('them@their-example.com');

			$email->setSubject('Email Test');
			$email->setMessage('Testing the email class.');

			$email->send();
			
			$this->home_model->InsertTransaksiHeader($kode_trans,$penerima,$email2,$alamat,$no_telepon,$propinsi,$kota,$kode_pos,$bank_id,$jasapengiriman_id);
			// foreach($this->cart->contents() as $items)
			// 			{
			// 				$this->home_model->simpan_pesanan("insert into tbl_transaksi_detail (kode_transaksi,kode_produk,nama_produk,harga,jumlah) values('".$kode_trans."','".$items['id']."','".$items['name']."','".$items['price']."','".$items['qty']."')");
			// 				// $this->home_model->update_dibeli(->getRowArray()$items['id'],$items['qty']);
			// 			}
						// $this->cart->destroy();
						?>
						<script type="text/javascript">
						alert("Pesanan anda telah terkirim, kami akan segera memprosesnya dalam waktu 1x24 jam. Silahkan cek email anda beberapa saat lagi untuk melihat rincian detail pembayaran.\n Terima Kasih");			
						</script>
						<?php
						// echo "<meta http-equiv='refresh' content='0; url=".base_url()."home/'>";

		}
	}
	}