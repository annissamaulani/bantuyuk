<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

    public function __construct() {

        parent::__construct();
      
        $this->load->model('MdlDonasi');
        $this->load->model('MdlProfil');

    }

    public function index() {

       
    	$getProfil = $this->MdlProfil->getProfil('data_profil')->result();
        $dataT['tmpProfil'] = $getProfil;


       

     //$getDonasi = $this->MdlDonasi->getDonasi('data_donasi')->result();
     //$dataT['donasi'] = $getDonasi;
     // $getDana = $this->MdlDonasi->getDana('data_donasi');
     // $dataT['donasi'] = $getDana;

        $this->load->view('halaman/v_profil', $dataT);
    }
   
}

?>