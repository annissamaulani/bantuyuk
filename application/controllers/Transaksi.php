<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->model('MdlTransaksi');
        $this->load->model('MdlDonasi');
        $this->load->model('MdlRecomend');

    }

    public function index($kt) {

        $where = array('kode_transaksi' => $kt);
        $dataT['tmpTransaksi'] = $this->MdlTransaksi->detailTransaksi('data_transaksi', $where)->result();

       

    	$getTransaksi = $this->MdlTransaksi->getTransaksi('data_transaksi')->result();
    	$dataT['Trn'] = $getTransaksi;


       

     //$getDonasi = $this->MdlDonasi->getDonasi('data_donasi')->result();
     //$dataT['donasi'] = $getDonasi;
     // $getDana = $this->MdlDonasi->getDana('data_donasi');
     // $dataT['donasi'] = $getDana;

        $this->load->view('transaksiPembayaran', $dataT);
    }
    public function Laporan(){

        $getTrn = $this->MdlTransaksi->getTrn('data_transaksi')->result();
        $dataT['trans'] = $getTrn;

        $this->load->view('halaman/v_laporan_donatur', $dataT);
    }
}

?>