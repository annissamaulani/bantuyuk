<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MdlRecomend extends CI_Model {
    
     public function getRecom($table) {
        
     //   return $this->db->get($table);
$this->db->select('*');
$this->db->from($table);
$this->db->limit(3, 'DESC');


    $this->db->order_by('tgl_donasi', 'DESC');
    $query = $this->db->get();
    return $query;

    }

    public function detailDonasi($table, $where){

        return $this->db->get_where($table, $where);
    }

}
?>

