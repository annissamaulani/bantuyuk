<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MdlAdminDonasi extends CI_Model {

    public function getDonasi($table) {
        
        return $this->db->get($table);
    }
    public function getkategori()
        {
            return $query = $this->db->get('data_kategori');
        }

    public function detailDonasi($table, $where){

        return $this->db->get_where($table, $where);

    }

    public function update($id, $data) {

        $query = $this->db->where("id_donasi", $id)->update("data_donasi",$data);
        return $query;
    }

    public function insertDonasi($table, $data) {

        $this->db->insert($table, $data);
    }

    public function editDonasi($table, $where){

        return $this->db->get_where($table, $where);
    }

    public function updateDonasi($data,$id){
        $this->db->where('id_donasi', $_POST['id_donasi']);
        $this->db->update('data_donasi',$data);
        $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
        return TRUE;
  }

    public function deleteDonasi($table, $where){

        $this->db->delete($table, $where);
    }

  
}

?>