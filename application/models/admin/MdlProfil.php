<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MdlProfil extends CI_Model {

    public function getProfil($table) {
        
        return $this->db->get($table);
    }

    public function detailprofil($table, $where){

        return $this->db->get_where($table, $where);

    }

    public function update($id, $data) {

        $query = $this->db->where("id_profil", $id)->update("data_profil",$data);
        return $query;
    }

    public function insertProfil($table, $data) {

        $this->db->insert($table, $data);
    }

    public function editProfil($table, $where){

        return $this->db->get_where($table, $where);
    }

    public function updateProfil($data,$id){
        $this->db->where('id_profil', $_POST['id_profil']);
        $this->db->update('data_profil',$data);
        $this->session->set_flashdata('sukses',"Data Berhasil Diedit");
        return TRUE;
  }

    public function deleteProfil($table, $where){

        $this->db->delete($table, $where);
    }

  
}

?>