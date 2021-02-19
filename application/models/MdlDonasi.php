<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MdlDonasi extends CI_Model {
    
     public function getDonasi($table) {
        
     //   return $this->db->get($table);
$this->db->select('*');
$this->db->from($table);
$this->db->limit(6, 'ASC');


    $this->db->order_by('tgl_donasi', 'ASC');
    $query = $this->db->get();
    return $query;

    }
     public function getDana($table) {
        
  return $this->db->get($table);
    }

    public function detailDonasi($table, $where){

        return $this->db->get_where($table, $where);
    }

    public function update($id, $data) {

        $query = $this->db->where("id_donasi", $id)->update("data_donasi", $data);
        return $query;
    }

    public function masaAktif($data, $table, $where){
     
        $this->db->where('id_donasi', $where);
        $this->db->update($table, $data);
       
    }
    public function get_keyword($keyword){
      $this->db->select('*');
      $this->db->from('data_donasi');
      $this->db->like('nama_donasi', $keyword);
       $this->db->or_like('kategori_donasi', $keyword);
      $this->db->or_like('target_donasi', $keyword);
      $this->db->or_like('perolehan_donasi', $keyword);
      $this->db->or_like('deskripsi_donasi', $keyword);
       $this->db->or_like('tgl_donasi', $keyword);
       $this->db->or_like('masa_aktif', $keyword);
     return $this->db->get()->result();
  }
}

?>