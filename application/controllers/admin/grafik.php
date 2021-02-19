<?php
class grafik extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('transaksi');
    }
    function index(){
        $x['data']=$this->transaksi->get_data_perolehan_donasi();
        $this->load->view('dashboard',$x);
    }
}