<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model(['MdlDonasi', 'MdlSorting']);
    }

    public function sorting() {
        
        $get_url = $this->uri->rsegment(1);

        if($get_url == 'home') {
            $masa_donasi = $this->MdlDonasi->getDonasi('data_donasi')->result();
        }

     
        date_default_timezone_set("Asia/Bangkok");
    
        foreach($masa_donasi as $item) {
            
            $dateNow = date('Y-m-d H:m:s');

            $masa_donasi_item = $item->masa_donasi;
            $selisih = strtotime($masa_donasi_item) - strtotime($dateNow);

            $masa_aktif = $selisih/(60*60*24);
            $dataUpdate = array(

                'masa_aktif' => $masa_aktif
            
            );       
        
            return $this->MdlDonasi->masaAktif($dataUpdate, 'data_donasi', $item->id_donasi);
     
        }
    }

    public function index(){

        $this->sorting();

        $getDonasi = $this->MdlDonasi->getDonasi('data_donasi')->result();
        $data['donasi'] = $getDonasi;

        $this->load->view('home', $data);
    }

    
    
    public function pendidikan() {
        $this->sorting();

        $getDonasi = $this->MdlSorting->data_pendidikan('data_donasi')->result();
        $data['donasi'] = $getDonasi;

        $this->load->view('halaman/k_pendidikan', $data);
    }
     public function Bencana_alam() {
        $this->sorting();

        $getDonasi = $this->MdlSorting->data_bencana('data_donasi')->result();
        $data['donasi'] = $getDonasi;

        $this->load->view('halaman/k_bencana_alam', $data);
    }
    public function Sosial() {
        $this->sorting();

        $getDonasi = $this->MdlSorting->data_sosial('data_donasi')->result();
        $data['donasi'] = $getDonasi;

        $this->load->view('halaman/k_sosial', $data);
    }
    public function Difabel() {
        $this->sorting();

        $getDonasi = $this->MdlSorting->data_difabel('data_donasi')->result();
        $data['donasi'] = $getDonasi;

        $this->load->view('halaman/k_difabel', $data);
    }
     public function Lingkungan() {
        $this->sorting();

        $getDonasi = $this->MdlSorting->data_lingkungan('data_donasi')->result();
        $data['donasi'] = $getDonasi;

        $this->load->view('halaman/k_lingkungan', $data);
    }
     public function Rumah_ibadah() {
        $this->sorting();

        $getDonasi = $this->MdlSorting->data_masjid('data_donasi')->result();
        $data['donasi'] = $getDonasi;

        $this->load->view('halaman/k_masjid', $data);
    }
     public function Produk_dan_inovasi() {
        $this->sorting();

        $getDonasi = $this->MdlSorting->data_produk('data_donasi')->result();
        $data['donasi'] = $getDonasi;

        $this->load->view('halaman/k_produk', $data);
    }
     public function Panti_Asuhan() {
        $this->sorting();

        $getDonasi = $this->MdlSorting->data_panti('data_donasi')->result();
        $data['donasi'] = $getDonasi;

        $this->load->view('halaman/k_panti', $data);
    }
    public function Lainnya(){
        $this->sorting();

        $getDonasi = $this->MdlDonasi->getDonasi('data_donasi')->result();
        $data['donasi'] = $getDonasi;

        $this->load->view('halaman/v_kategori_lainnya', $data);
    }
     public function Donasi_lain(){
        $this->sorting();

        $getDana = $this->MdlDonasi->getDana('data_donasi')->result();
        $data['donasi'] = $getDana;

        $this->load->view('halaman/v_donasi_lainnya', $data);
    }
    public function Profil(){
        $this->sorting();

        $getDonasi = $this->MdlDonasi->getDonasi('data_donasi')->result();
        $data['donasi'] = $getDonasi;

        $this->load->view('halaman/v_profil', $data);
    }
     public function Tutorial(){
        $this->sorting();

        $getDonasi = $this->MdlDonasi->getDonasi('data_donasi')->result();
        $data['donasi'] = $getDonasi;

        $this->load->view('halaman/v_tutorial', $data);
    }
      public function Tentang(){
        $this->sorting();

        $getDonasi = $this->MdlDonasi->getDonasi('data_donasi')->result();
        $data['donasi'] = $getDonasi;

        $this->load->view('halaman/v_tentang_kami', $data);
    }
    
   public function search(){
   $keyword = $this->input->post('keyword');
    $data['donasi']=$this->MdlDonasi->get_keyword($keyword);
    $this->load->view('halaman/v_donasi_lainnya', $data);
    }
    

}

?>