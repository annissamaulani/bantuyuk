
<?php $this->load->view('layout/header'); ?>

<!--main-->

<!--slider-->
<br><br><br><br>

	
	<br><br>

		<div class="container text-center my-3">
			<div class="col-md-12 text-center">
				<!--<h5 class="font-purple font-bold font-xl">Hayu Bantu</h5> -->
				<h2 class="font-medium font-md">Donasi</h2>
				<br><br>
				
			</div>
<div class="card-deck">     
<?php
				foreach($donasi as $row) {
			?>
			
<a href="<?php echo base_url('/donasi/detail/'.$row->id_donasi); ?>">
  <div class="card">
    <img class="card-img-top" style="width: 298px; height: 200px;"src="<?php echo base_url('assets/front/images/donasi/'.$row->image); ?>"alt="Card image cap">
    <div class="card-body">
      <h2 style="font-size:12px;"class="card-title"><?php echo $row->nama_donasi; ?></h2 >
      <h4 style="font-size:11px;"class="card-text">&nbsp;<span class="badge"><?php echo $row->nama_kategori; ?></span></h4><hr>
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