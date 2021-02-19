<?php
class Kategori extends CI_Controller{
    function __construct(){
        parent::__construct();
       
        $this->load->model('admin/MdlAdminkategori');
        $this->load->library('upload');
    }


    function index(){
        $x['data']=$this->MdlAdminkategori->get_all_kategori();
        $this->load->view('admin/Kategori/tampil_kategori',$x);
    }

    function simpan_kategori(){
        $id_kategori=strip_tags($this->input->post('xidkategori'));
        $kategori=strip_tags($this->input->post('xkategori'));
        $this->MdlAdminkategori->simpan_kategori($id_kategori, $kategori);
        echo $this->session->set_flashdata('msg','success');
        redirect('Kategori');
    }

    function update_kategori(){
        $kode=strip_tags($this->input->post('kode'));
        $kategori=strip_tags($this->input->post('xkategori'));
        $this->MdlAdminkategori->update_kategori($kode,$kategori);
        echo $this->session->set_flashdata('msg','info');
        redirect('Kategori');
    }
    function hapus_kategori(){
        $kode=strip_tags($this->input->post('kode'));
        $this->MdlAdminkategori->hapus_kategori($kode);
        echo $this->session->set_flashdata('msg','success-hapus');
        redirect('Kategori');
    }

}
