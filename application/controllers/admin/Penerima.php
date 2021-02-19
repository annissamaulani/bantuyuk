<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penerima extends CI_Controller{

    public function __construct(){

        parent::__construct();
        $this->load->model('admin/MdlAdminPenerima');
        $this->load->library('upload');
    }

    public function index(){

        $getDataPenerima = $this->MdlAdminPenerima->getPenerima('data_penerima')->result();
        $data['data_penerima'] = $getDataPenerima;

        $this->load->view('admin/Penerima/data_penerima', $data);
    }

    public function add(){

        $this->load->view('admin/Penerima/tambah_penerima');
    }

    public function create(){
        $nik_penerima       = $this->input->post('nik_penerima');
        $nama_penerima      = $this->input->post('nama_penerima');
        $jk_penerima        = $this->input->post('jk_penerima');
        $alamat_penerima    = $this->input->post('alamat_penerima');

            $data =  array(
                'id_penerima'         	=> '',
                'nik_penerima'       	=> $nik_penerima,
                'nama_penerima'  		=> $nama_penerima,
                'jk_penerima'        	=> $jk_penerima,
                'alamat_penerima'     	=> $alamat_penerima
            );
            $this->MdlAdminPenerima->insertPenerima('data_penerima', $data);
            $this->session->set_flashdata('message', 'Success Tambah Penerima');

            redirect(base_url('admin/Penerima'));
        
    }


    public function edit($id_penerima){

        $where = array('id_penerima' => $id_penerima);

        $data['tmpPenerima'] = $this->MdlAdminPenerima->editPenerima('data_penerima', $where)->result();
        $this->load->view('Penerima/edit_penerima', $data);
    }

    public function update(){
         $id_penerima = $this->input->post('id_penerima');
        $nik_penerima = $this->input->post('nik_penerima');
        $nama_penerima = $this->input->post('nama_penerima');
        $jk_penerima = $this->input->post('jk_penerima');
        $alamat_penerima = $this->input->post('alamat_penerima');

         $data=array(
                'nik_penerima' => $nik_penerima,
                'nama_penerima' => $nama_penerima,
                'jk_penerima' => $jk_penerima,
                'alamat_penerima' => $alamat_penerima
            );

            $this->MdlAdminPenerima->updatePenerima($data,$id);
            $this->session->set_flashdata('message', 'Success Update Penerima');

            redirect(base_url('admin/Penerima'));
        
    }


    public function delete($id_penerima){
        
        if( $id_penerima > 0 ) {
            
            $where = array('id_penerima' => $id_penerima);

            $this->MdlAdminPenerima->deletePenerima('data_penerima', $where);
            $this->session->set_flashdata('message', 'Success Delete Penerima');

            redirect(base_url('admin/Penerima'));
        }
        else{
            
            redirect(base_url('admin/Penerima'));
            exit;

        }
    }
}
?>