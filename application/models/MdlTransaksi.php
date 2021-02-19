<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MdlTransaksi extends CI_Model {

    public function getTransaksi ($table)
    {
        //return $this->db->get_where($table);
$this->db->select('*');
$this->db->from($table);
$this->db->limit(3, 'DESC');

    $this->db->order_by('tgl_transaksi', 'desc');
    $query = $this->db->get();
    return $query;

    }
     public function getTrn($table) {
        
   return $this->db->get_where($table);

    }
    
    public function detailTransaksi($table, $where){

        return $this->db->get_where($table, $where);

    }
}
?>