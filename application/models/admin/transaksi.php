<?php
class transaksi extends CI_Model{
 
    function get_data_perolehan_donasi(){
        $query = $this->db->query("SELECT nama_donasi,SUM(perolehan_donasi) AS perolehan_donasi FROM data_donasi GROUP BY nama_donasi");
          
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
 }