<?php namespace App\Models;

use CodeIgniter\Model;
class cart extends Model {
    public $db;
    public function __construct(){
        $this->db = \Config\Database::connect('homeToko');
		$this->home_model = new \App\Models\homeModel();


    }
    // public function update($data){
    //     $query = $this->db->query();
    // }
    public function getCart(){
        $keranjang = [] ;
        $data['keranjang'] = [];
        foreach ($_SESSION['keranjang'] as $key => $value) {
            $keranjang = $this->home_model->GetProdukId($key)->getRowArray();
            $keranjang  = [
                'id_produk' => $keranjang['id_produk'],
                'nama_produk' => $keranjang['nama_produk'],
                'harga' => $keranjang['harga'],
                'jumlah' => $value,
                'sub_total' => $value * $keranjang['harga'],
            ];
            array_push($data['keranjang'],$keranjang);	
        }
        return $data['keranjang'];
    }
}