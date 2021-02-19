

<?php $this->load->view('layout/header'); ?>

<div class="back-banner box-shadow-bt">
    <div class="title-all">
        <h2 class="font-white">Pembayaran Tiket</h2>   
    </div>
</div>
<div class="container-fluid">
    <div class="section" style="margin-bottom: 8%;">
        <div class="mt-inner">
            <div>
                <br> <br> <br> <br> <br>

                <div class="alert alert-info" role="alert">
                    <a style="font-size: 12px;">Terima kasih atas donasinya <b>Hayu Bantu</b></a> 
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="alert alert-success">
                              <?php
            foreach ($tmpTransaksi as $row) {
        ?>
        <h4><b>Terimakasih</b></h4>
        <h5>Sekali lagi terimakasih kami ucapkan kepada&nbsp<b><?php echo $row->nama_donatur; ?></b>&nbspSemoga Kebaikan yang diberikan dapat bermanfaat , dan semoga saudara/i selalu berada dilindungan Allah SWT.</h5>
    <?php } ?>
                            <h4><b>Tata cara pembayaran :</b></h4>
                            <li style="font-size: 14px;">Mohon Melakukan pembayaran sesuai <b> Nominal Donasi </b> yang tercantum list disamping (transfer bank)</li>
                            <li style="font-size: 14px;">Setelah melakukan Transfer, konfirmasi segera setelah pembayaran dengan mencantumkan bukti <b> Foto & Kode Transaksi </b>melalui whatsapp</li>
                            <li style="font-size: 14px;">Whatsapp : 0822 3000 0909</li>
                            <li style="font-size: 14px;">Mohon Melakukan pembayaran 1x24 jam. Apabila dalam jangka waktu tersebut belum melakukan pembayaran maka <b>Donasi akan dibatalkan oleh sistem </b></li>
                            <br>
                            <h4><b>Rekening Bank :</b></h4>
                            <li style="font-size: 14px;">BSM       :  708 2604 191    (Hayu Bantu)</li>
                           

                        </div>
                        
                    </div>
                    <div class="col-md-5">
                        <div class="alert alert-warning" role="alert">
                        <?php 
                                foreach($tmpTransaksi as $rows) {
                            ?>
                                
                                <li style="font-size: 14px;">
                                    Nama : <b><?php echo $rows->nama_donatur; ?></b>
                                </li>
                                <br>
                                <li style="font-size: 14px;">
                                    Nominal Donasi : <b><?php echo'Rp.'.nominal($rows->jumlah_donasi); ?></b>
                                </li>
                                <br>
                                <li style="font-size: 14px;">
                                    Kode Transaksi : <b><?php echo $rows->kode_transaksi; ?></b>
                                </li>   
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <br><br><br>
                   
                </div>
                

            </div>
        </div>
    </div>
    
    
	<?php $this->load->view('layout/footer'); ?>
	
</div>


<script type="text/javascript" src="<?php echo base_url('assets/front/js/simple.money.format.js'); ?>"></script>
<script>
    $('.format').simpleMoneyFormat();
</script>

