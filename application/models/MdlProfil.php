<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MdlProfil extends CI_Model {

    public function getProfil ($table)
    {
        return $this->db->get_where($table);

    }
   
    
    public function detailProfil($table, $where){

        return $this->db->get_where($table, $where);

    }
}
?>