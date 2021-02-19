<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MdlSorting extends CI_Model {

    public function ascen($table) {

        $this->db->order_by('nama_donasi', 'ASC');
        $query = $this->db->get($table);

        return $query;
    }

    public function descen($table) {
        
        $this->db->order_by('nama_donasi', 'DESC');
        $query = $this->db->get($table);

        return $query;
    }
    public function data_pendidikan($table){

         //$this->db->order_by('kategori_donasi', 'DESC');
        //$query = $this->db->get($table);

    return $this->db->get_where("data_donasi",array('kategori_donasi' => 'pendidikan'));
        //$query = $this->db->get($where);
       //return $query;
    }
    
    public function data_bencana($table){
    return $this->db->get_where("data_donasi",array('kategori_donasi' => 'Bencana Alam'));
    }
    public function data_sosial($table){
    return $this->db->get_where("data_donasi",array('kategori_donasi' => 'Sosial'));
    }
    public function data_difabel($table){
    return $this->db->get_where("data_donasi",array('kategori_donasi' => 'Difabel'));
    }
    public function data_lingkungan($table){
    return $this->db->get_where("data_donasi",array('kategori_donasi' => 'Lingkungan'));
    }
    public function data_masjid($table){
    return $this->db->get_where("data_donasi",array('kategori_donasi' => 'Rumah Ibadah'));
    }
    public function data_produk($table){
    return $this->db->get_where("data_donasi",array('kategori_donasi' => 'Produk & Inovasi'));
    }
    public function data_panti($table){
    return $this->db->get_where("data_donasi",array('kategori_donasi' => 'Panti Asuhan'));
    }
   
}

?>