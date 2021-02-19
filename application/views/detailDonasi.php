
<?php $this->load->view('layout/header'); ?>

<!--main-->

  
        <?php
      foreach($donasi as $row) {
    ?>
          <div class="thumbnail col-md-12 text-center mt-inner">
           <h1 class="elip font-bold" style="margin-bottom: 30px; font-size: 20px;"><?php echo $row->nama_donasi; ?></h1>
       
        
          
              <div class="row justify-content-center">
      <div class="row">
    <div class="col-md-6">
          <div class="col-md-11 text-left">
           <img  src="<?php echo base_url('assets/front/images/donasi/'.$row->image); ?>" height="80%" width="110%"/>
           </div>
         </div>
         
   
       <div class="col-md-6">
        <!-- <h3 class="eclip text-left mt-inner" >Kategori : <?php echo $row->kategori_donasi; ?></h3> -->
        <h5  class="eclip text-left " >Tercapai &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <b><?php echo 'Rp '.nominal($row->perolehan_donasi); ?></b></h5>
        <h5 class="eclip text-left" >Target   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <?php echo 'Rp '.nominal($row->target_donasi); ?></h5>
         <h5 class="eclip text-left" >Tgl Donasi &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <?php echo tgl_indo($row->tgl_donasi); ?></h5>
        <h5 class="eclip text-left" >Berakhir Tgl &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <?php echo tgl_indo($row->masa_donasi); ?></h5>
        <h5 class="eclip text-left" >Sisa Hari &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <?php echo $row->masa_aktif; ?> Hari</h5>
         <h5 class="eclip text-left" >Penanggung Jawab &nbsp&nbsp: Hayu Bantu</h5>
          <h5 class="eclip text-left" >Kontak &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: 085637091432</h5><br>
        <a href="<?php echo base_url('/Donatur/register/'.$row->id_donasi); ?>" class="btn btn-success white btn-lg btn-block" role="button">Donasi Sekarang</a>

         </div>
    </div>
        </div>
        <h6 class="eclip text-center mt-inner"><?php echo $row->deskripsi_donasi; ?></h6>
        <?php } ?>
    
</div>
  



<br>
<h4 style="text-align: center;"><b>LIST DONATUR</b></h4>
  <div class="container my-3">
  
   <?php 
          foreach($tmpTransaksi as $rows) {

                            ?>
<div class="card">
  <div class=" card card-body">
    <h5 class="card-title"><?php echo $rows->nama_donatur; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted">Berdonasi Sebesar &nbsp; <?php echo'Rp.'.nominal($rows->jumlah_donasi); ?></h6> 
</div>
</div>
<?php } ?>

<br>
<div class="card">
  <div class="card card-body">
    <h5 style="text-align: center;" class="card-title"><a href="<?php echo base_url('Donasi/Donatur'); ?>"><button class="btn btn btn-link"><h3 style="font-size:20px; text-align: center;">Lainnya</h3></button></a></h5>
  </div>
</div>

</div>

 

        
    </div>


<!-- recomended -->
<br>
<hr>
<div class="container text-center my-3">
    <h2 class="font-weight-light"><b>Rekomendasi Donasi<br><p>(Dana Mendesak)</p><b></h><br>
  <div class="card-deck">     
<?php
        foreach($recom as $row) {
      ?>
      
<a href="<?php echo base_url('/donasi/detail/'.$row->id_donasi); ?>">
  <div class="card">
    <img class="card-img-top" style="width: 298px; height: 200px;"src="<?php echo base_url('assets/front/images/donasi/'.$row->image); ?>" alt="Card image cap">
    <div class="card-body">
      <h2 style="font-size:12px;"class="card-title"><?php echo $row->nama_donasi; ?></h2 >
      <h3 style="font-size:11px;"class="card-text">&nbsp;<span class="badge"><?php echo $row->id_kategori; ?></span></h3><hr>
    <h2  style="font-size:12px;" class="card-text">&nbsp;Terkumpul</h2>
    <h4 style="font-size:12px;"><span style="color:black;" >&nbsp;<?php echo 'Rp.'.nominal($row->perolehan_donasi); ?></span></h4>
    
    <div class="card-footer">
      <small class="text-muted">&nbsp;Sisa Hari</small>
   <small class="text-muted"><span style="color:black;" >&nbsp;<?php echo $row->masa_aktif; ?></span></small>
</div>
    </div>
    </div>
    
<?php 
  
      } ?>
      </a>

</div>
   
    
</div>
    




  <?php $this->load->view('layout/footer'); ?>


    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" 
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
  
    <script>
    $('#datepicker').datepicker({
      format: 'yyyy-mm-dd',
      startDate: '+1d',
      todayHighlight: true
    });
  </script>
