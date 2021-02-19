
    <link href="<?php echo base_url('assets/front/images/hb-8'); ?>" rel="shortcut icon">
  
<?php $this->load->view('layout/header'); ?>
<br><br><br><br><br><br>

<div class="container-fluid-full">
<br> <br>
    <h4 style="text-align: center;"><b>DONATUR<b></h4>

  <div class="container my-3">
     <?php 
          foreach($trans as $rows) {

                            ?>

<div class="card">
  <div class=" card card-body">
    <h5 class="card-title"><?php echo $rows->nama_donatur; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted">Berdonasi Sebesar  &nbsp; <?php echo'Rp.'.nominal($rows->jumlah_donasi); ?></h6> 
</div>
</div>
<?php } ?>



</div>

</div>


