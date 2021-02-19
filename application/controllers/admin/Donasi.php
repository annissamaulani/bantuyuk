<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donasi extends CI_Controller{

    public function __construct(){

        parent::__construct();
        $this->load->model('admin/MdlAdminDonasi');
    }

    public function index(){

        $getDataDonasi = $this->MdlAdminDonasi->getDonasi('data_donasi')->result();
        $data['tmpDonasi'] = $getDataDonasi;

        $this->load->view('admin/Donasi/dataDonasi', $data);
    }

    public function add(){

        $data['data_kategori'] = $this->MdlAdminDonasi->getkategori()->result();
        $this->load->view('admin/Donasi/tambahDonasi', $data);
    }

    public function create(){

        $nama_donasi = $this->input->post('nama_donasi');
        $id_kategori = $this->input->post('id_kategori');
        $target_donasi = $this->input->post('target_donasi');
        $masa_donasi = $this->input->post('masa_donasi');
        $deskripsi_donasi = $this->input->post('deskripsi_donasi');
        //$perolehan_donasi = 0;

        date_default_timezone_set("Asia/Bangkok");
        $dateNow = date('Y-m-d H:m:s');

        $selisih = strtotime($masa_donasi) - strtotime($dateNow);
        $masa_aktif = $selisih/(60*60*24);

        $image = $this->input->post('image');

        $reg = array(',00', 'Rp', '.');
        $regStr = array('', '', '');

        $target_donasiStr = str_replace($reg, $regStr, $target_donasi);
        //$perolehan_donasiStr = str_replace($reg, $regStr, $perolehan_donasi);

        if ($image=''){} else{
            $config['upload_path']='./assets/front/images/donasi';
            $config['allowed_types']='jpg|gif|png|jpeg';
            $config['encrypt_name'] = TRUE;


            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('image')){
                //return $this->upload->data("file_name");
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
                'id_donasi' => '',
                'nama_donasi' => $nama_donasi,
                'id_kategori' => $id_kategori,
                'target_donasi' => $target_donasiStr,
                'perolehan_donasi' => '0',
                'masa_donasi' => $masa_donasi,
                'deskripsi_donasi' => $deskripsi_donasi,
                'tgl_donasi' => $dateNow,
                'masa_aktif' => $masa_aktif,
                'image' => $image
            );
            $this->MdlAdminDonasi->insertDonasi('data_donasi', $data);
            $this->session->set_flashdata('message', 'Success Tambah Donasi');

            redirect(base_url('/admin/Donasi'));
        }
        
    }


    public function edit($id_donasi){

        $where = array('id_donasi' => $id_donasi);

        $data['tmpDonasi'] = $this->MdlAdminDonasi->editDonasi('data_donasi', $where)->result();
        $data['data_kategori'] = $this->MdlAdminDonasi->getkategori()->result();
        $this->load->view('admin/Donasi/editDonasi', $data);
    }

    public function update(){

        $this->form_validation->set_rules('id_donasi', 'id_donasi', 'required');
        $this->form_validation->set_rules('nama_donasi', 'nama_donasi', 'required');

        $id_donasi = $this->input->post('id_donasi');
        $nama_donasi = $this->input->post('nama_donasi');
        $id_kategori = $this->input->post('id_kategori');
        $target_donasi = $this->input->post('target_donasi');
        $perolehan_donasi = $this->input->post('perolehan_donasi');
        $masa_donasi = $this->input->post('masa_donasi');
        $deskripsi_donasi = $this->input->post('deskripsi_donasi');

        date_default_timezone_set("Asia/Bangkok");
        $dateNow = date('Y-m-d H:m:s');

        $selisih = strtotime($masa_donasi) - strtotime($dateNow);
        $masa_aktif = $selisih/(60*60*24); //60detik*60menit*24jam == seharian
        
        $image = $this->input->post('image');

        $reg = array(',00', 'Rp', '.');
        $regStr = array('', '', '');

        $target_donasiStr = str_replace($reg, $regStr, $target_donasi);
        $perolehan_donasiStr = str_replace($reg, $regStr, $perolehan_donasi);

        if($this->form_validation->run()==FALSE){
            $this->session->set_flashdata('error',"Data Gagal Di Edit");
            redirect('/admin/Donasi'); 
        }else{

            
            $data=array(
                "nama_donasi" => $nama_donasi,
                'id_kategori' => $id_kategori,
                'target_donasi' => $target_donasiStr,
                'perolehan_donasi' => $perolehan_donasiStr,
                'masa_donasi' => $masa_donasi,
                'deskripsi_donasi' => $deskripsi_donasi,
                'masa_aktif' => $masa_aktif
            );

            if (!empty($_FILES["image"]["name"])){
                $config['upload_path']='./assets/images';
                $config['allowed_types']='jpg|gif|png|jpeg';
                $config['encrypt_name'] = TRUE;


                $this->load->library('upload',$config);
                if(!$this->upload->do_upload('image')){
                    echo "Menambahkan Berita Gagal"; die();
                }
                else{
                    $image=$this->upload->data('file_name');
                    $data['image'] = $image;
                }
            }


            $this->MdlAdminDonasi->updateDonasi($data,$id);
            $this->session->set_flashdata('message', 'Success Update Donasi');

            redirect(base_url('/admin/Donasi'));
        }
    }

    public function refresh(){

        date_default_timezone_set("Asia/Bangkok");
        $dateNow = date('Y-m-d H:m:s');

        $selisih = strtotime($masa_donasi) - strtotime($dateNow);
        $masa_aktif = $selisih/(60*60*24);

        $dataUpdate = array(

            'masa_aktif' => $masa_aktif
        );
    }

    public function delete($id_donasi){
        
        if( $id_donasi > 0 ) {
            
            $where = array('id_donasi' => $id_donasi);

            $this->MdlAdminDonasi->deleteDonasi('data_donasi', $where);
            $this->session->set_flashdata('message', 'Success Delete Donasi');

            redirect(base_url('/admin/Donasi'));
        }
        else{
            
            redirect(base_url('/admin/Donasi'));
            exit;

        }
    }
}
?>