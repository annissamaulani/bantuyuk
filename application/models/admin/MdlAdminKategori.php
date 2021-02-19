<?php
class MdlAdminKategori extends CI_Model{

    function get_all_kategori(){
        $hsl=$this->db->query("select * from data_kategori");
        return $hsl;
    }
    function simpan_kategori($id_kategori, $kategori){
        $hsl=$this->db->query("insert into data_kategori(id_kategori,kategori_nama) values('$id_kategori', '$kategori')");
        return $hsl;
    }
    function update_kategori($kode,$kategori){
        $hsl=$this->db->query("update data_kategori set kategori_nama='$kategori' where id_kategori='$kode'");
        return $hsl;
    }
    function hapus_kategori($kode){
        $hsl=$this->db->query("delete from data_kategori where id_kategori='$kode'");
        return $hsl;
    }
    
    function get_kategori_byid($id_kategori){
        $hsl=$this->db->query("select * from data_kategori where id_kategori='$id_kategori'");
        return $hsl;
    }

}