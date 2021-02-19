<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MdlAdminPenerima extends CI_Model {

    public function getPenerima($table) {
        
        return $this->db->get($table);
    }
   
   
    public function detailPenerima($table, $where){

        return $this->db->get_where($table, $where);

    }

    public function update($id, $data) {

        $query = $this->db->where("id_penerima", $id)->update("data_penerima",$data);
        return $query;
    }

    public function insertPenerima($table, $data) {

        $this->db->insert($table, $data);
    }

    public function editPenerima($table, $where){

        return $this->db->get_where($table, $where);
    }

    public function updatePenerima($data,$id){
        $this->db->where('id_penerima', $_POST['id_penerima']);
        $this->db->update('data_penerima',$data);
        $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
        return TRUE;
  }

    public function deletePenerima($table, $where){

        $this->db->delete($table, $where);
    }

  
}

?>