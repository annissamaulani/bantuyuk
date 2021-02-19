
<?php $this->load->view('layout/header'); ?>

<!--main-->
<div class="container-fluid-full">

<!--slider-->

	<br><br><br><br>
<div class="row">
  <div class="col-md-12">    
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
   
  </ol>

           <!-- Wrapper for slides -->
     <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo base_url('assets/front/images/slider/1.png') ?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/front/images/slider/2.png') ?>"  alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/front/images/slider/3.png') ?>"alt="Third slide">
    </div>
   <!--   <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/front/images/slider/4.png') ?>"alt="Fourth slide">
    </div>-->
      <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/front/images/slider/5.png') ?>"alt="fifth slide">
    </div>
     <!-- <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo base_url('assets/front/images/slider/6.png') ?>"alt="sixth slide">
    </div>-->
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
          </div>
        </div>
	<!--end slider-->
	
	<br><br>
	<div class="row" id="city">
		<div class="section">
				<div class="col-md-12 text-center">
				<h5 class="font-purple font-bold font-xl">Hayu Bantu</h5>
				<p class="font-medium font-md">Tebar Kemulianan bersama kami</p>
				<br><hr><br>
				<span class="border-bottom"></span>
			</div>
      
 
<br>
<br>

<div class="container-fluid" id="kategori">
  <div class="section section-p">
    <div class="section-c">
      <h3>Kategori Donasi</h3>
    </div>
  <div class="row row-w">
    <div class="col-md-3 col-ce">
      <a href="<?php echo base_url('home/pendidikan'); ?>"> <i class="fa fa-graduation-cap fa-2x btn btn-success"></i></a>
      <h6 class="font-bold">Pendidikan</h6>
      
    </div>
    <div class="col-md-3 col-ce">
     <a href="<?php echo base_url('home/Difabel'); ?>"> <i class="fa fa-hospital-o fa-2x btn btn-success"></i></a>
      <h6 class="font-bold">Medis dan Kesehatan</h6>
      
    </div>
    <div class="col-md-3 col-ce">
    <a href="<?php echo base_url('home/Bencana_alam'); ?>"><i class="fa fa-snowflake-o fa-2x btn btn-success"></i></a>
      <h6 class="font-bold">Bencana Alam</h6>
      
    </div>

    <div class="col-md-3 col-ce">
    <a href="<?php echo base_url('home/Lainnya'); ?>">  <i class="fa fa-ellipsis-h fa-2x btn btn-success"></i></a>
      <h6 class="font-bold">Lainnya</h6>
      
    </div>
  </div>
  </div>
</div><br><br>

			<?php
				foreach($donasi as $row) {
			?>
			
			<a href="<?php echo base_url('/donasi/detail/'.$row->id_donasi); ?>">
			<div class="flex-container_item col-md-4">
				<div class="thumbnail" style="padding: 0;">
					 <img style="width: 300px; height: 250px;" src="<?php echo base_url('assets/front/images/donasi/'.$row->image); ?>"/>
						<div class="caption">
							<h4 class="card-title" style="width: 300px; height: 60px;" class="font-bold"><?php echo $row->nama_donasi; ?></h4>
							<h4 class="card-text">&nbsp;<span class="badge"><?php echo $row->nama_kategori; ?></span></h4>
						</div>
						<hr>
						<div class="card-title">
							<h5 class="card-text">&nbsp;Sisa Hari</h5>
							<h4><span style="color:black;" >&nbsp;<?php echo $row->masa_aktif; ?></span></h4>
						</div>
						<div  class="card-title">
							<h5 class="card-text">&nbsp;Terkumpul</h5>
							<h4><span style="color:black;" >&nbsp;<?php echo 'Rp.'.nominal($row->perolehan_donasi); ?></span></h4>
						</div>
					
				</div> 

			</div>
			<?php 
	
			} ?>
			</a>
		</div>
	</div>

 
	 

	<div class="row bg-img" id="rentyour">
		<div class="section font-white">
			<div class="col-md-12 text-center">
				<h2 class="font-lg font-bold ">Hayu Bantu</h2><br>
				<div class="col-md-6">
				<p class="font-md font-medium"></p>
				</div>
				<div class="col-md-6">
				<p class="font-md font-medium"> </p>
				</div>
				<br>
			</div>
		</div>
	</div>
	
	<div class="container-fluid" id="subscribe">
		<div class="section section-p">
			<div class="section-c">
				<h3>Partner Bank</h3>
			</div>
			<div class="row row-w">
        <div class="col-md-5 col-ce">
          <img class="" src="">
          <h6 class="font-bold"></h6>
        </div>
				
				<div class="col-md-3 col-ce">
					<img class="img-partner" src="<?php echo base_url('assets/front/images/bca.jpg'); ?>">
					<h6 class="font-bold">BCA</h6>
				</div>
        <div class="col-md-3 col-ce">
          <img class="" src="">
          <h6 class="font-bold"></h6>
        </div>
				<div class="col-md-3 col-ce">
					<img class="" src="">
					<h6 class="font-bold"></h6>
				</div>
        <div class="col-md-3 col-ce">
          <img class="" src="">
          <h6 class="font-bold"></h6>
        </div>
			</div>
		</div>
	</div>

	<?php $this->load->view('layout/footer'); ?>

</div>


	
	<?php $this->load->view('layout/js'); ?>
