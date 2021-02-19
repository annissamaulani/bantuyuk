<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller{

    public function __construct(){

        parent::__construct();
        $this->load->model('MdlProfil');
    }

    public function index(){

        $getDataProfil = $this->MdlProfil->getProfil('data_profil')->result();
        $data['data_profil'] = $getDataProfil;

        $this->load->view('admin/Profil/data_profil', $data);
    }

    public function add(){
        $this->load->view('admin/Profil/tambah_Profil');
    }

    public function create(){

        $nama_profil = $this->input->post('nama_profil');
        $deskripsi_profil = $this->input->post('deskripsi_profil');
        $tlp_profil = $this->input->post('tlp_profil');
        $alamat_profil = $this->input->post('alamat_profil');
        $image = $this->input->post('image');
        $ig_profil = $this->input->post('ig_profil');
        $wa_profil = $this->input->post('wa_profil');
        $fb_profil = $this->input->post('fb_profil');

        if ($image=''){} else{
            $config['upload_path']='./assets/images/profil/';
            $config['allowed_types']='jpg|gif|png|jpeg';
            $config['encrypt_name'] = TRUE;


            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('image')){
                echo "Menambahkan Donasi Gagal"; die();
            }
            else{
                $image=$this->upload->data('file_name');
                 //  $config['source_image']='./assets/img/berita'.$image['file_name'];
                 //  $config['new_image']= './assets/img/berita'.$image['file_name']; 
                    // $config['create_thumb']= FALSE;
                    // $config['maintain_ratio']= FALSE;
                    // $config['quality']= '60%';
                    // $config['width']= 710;
                    // $config['height']= 460;
            }

            $data =  array(
                'id_profil' => '',
                'nama_profil' => $nama_profil,
                'deskripsi_profil' => $deskripsi_profil,
                'tlp_profil' => $tlp_profil,
                'alamat_profil' => $alamat_profil,
                'image' => $image,
                'ig_profil' => $ig_profil,
                'wa_profil' => $wa_profil,
                'fb_profil' => $fb_profil
            );
            $this->MdlProfil->insertProfil('data_profil', $data);
            $this->session->set_flashdata('message', 'Success Tambah Profil');

            redirect(base_url('admin/Profil'));
        }
        
    }


    public function edit($id_profil){

        $where = array('id_profil' => $id_profil);

        $data['data_profil'] = $this->MdlProfil->editProfil('data_profil', $where)->result();
        $this->load->view('admin/Profil/edit_profil', $data);
    }

    public function update(){

        $this->form_validation->set_rules('id_profil', 'id_profil', 'required');
        $this->form_validation->set_rules('nama_profil', 'nama_profil', 'required');

        $nama_profil = $this->input->post('nama_profil');
        $deskripsi_profil = $this->input->post('deskripsi_profil');
        $tlp_profil = $this->input->post('tlp_profil');
        $alamat_profil = $this->input->post('alamat_profil');
        $image = $this->input->post('image');
        $ig_profil = $this->input->post('ig_profil');
        $wa_profil = $this->input->post('wa_profil');
        $fb_profil = $this->input->post('fb_profil');

        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Edit");
            redirect('Profil'); 
        }else{

            
            $data=array(
                "nama_profil" => $nama_profil,
                'deskripsi_profil' => $deskripsi_profil,
                'tlp_profil' => $tlp_profil,
                'alamat_profil' => $alamat_profil,
                'image' => $image,
                'ig_profil' => $ig_profil,
                'wa_profil' => $wa_profil,
                'fb_profil' => $fb_profil
            );

            if (!empty($_FILES["image"]["name"])){
                $config['upload_path']='./assets/images/profil/';
                $config['allowed_types']='jpg|gif|png|jpeg';
                $config['encrypt_name'] = TRUE;


                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('image')){
                    echo "Menambahkan Profil Gagal"; die();
                }
                else{
                    $image=$this->upload->data('file_name');
                    $data['image'] = $image;
                }
            }


            $this->MdlProfil->updateProfil($data,$id);
            $this->session->set_flashdata('message', 'Success Update Donasi');

            redirect(base_url('admin/Profil'));
        }
    }

    public function refresh(){

        date_default_timezone_set("Asia/Bangkok");
        $dateNow = date('Y-m-d H:m:s');

        $selisih = strtotime($alamat_profil) - strtotime($dateNow);
        $masa_aktif = $selisih/(60*60*24);

        $dataUpdate = array(

            'masa_aktif' => $masa_aktif
        );
    }

    public function delete($id_profil){
        
        if( $id_profil > 0 ) {
            
            $where = array('id_profil' => $id_profil);

            $this->MdlProfil->deleteDonasi('data_profil', $where);
            $this->session->set_flashdata('message', 'Success Delete Profil');

            redirect(base_url('admin/Profil'));
        }
        else{
            
            redirect(base_url('admin/Profil'));
            exit;

        }
    }
}
?>