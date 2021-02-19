

<?php $this->load->view('layout/header'); ?>

<br><br>
<div class="container-fluid-full">

<!--slider-->
<br><br><br><br><br><br>

 <h3 style="text-align: center;">Laporan Pengumpulan</h3>
                       <div class="col-md-12">
                        
                        <?php 
                                foreach($trans as $rows) {
                            ?>
                                <ul class="list-group" style="font-size:14px;">
                                <li class="list-group-item">Nama : <b><?php echo $rows->nama_donatur; ?></b></li>
                                <li class="list-group-item">Nominal Donasi : <b><?php echo'Rp.'.nominal($rows->jumlah_donasi); ?></b></li>
                                </ul>
                            <?php
                                }
                            ?>
                        
                    </div>
