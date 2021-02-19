
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
	
	<br>
	<div class="row" id="city">
		<div class="section">


			<div class="col-md-12 text-center">
				<h1 class="font-purple font-bold">Hayu Bantu</h1>
				<h3 class="font-medium">Tebar Kemulianan bersama kami</h3>
				<br><hr><br>
				<span class="border-bottom"></span>
			</div>
      
 
<br>
<br>

<div class="container" id="kategori">
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
</div>
<br>
<hr>


<br><br><br>


<style type="text/css">
  
@media (max-width: 100px) {
    .carousel-inner .carousel-item > div {
        display: none;
    }
    .carousel-inner .carousel-item > div:first-child {
        display: block;
    }
}

.carousel-inner .carousel-item.active,
.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev {
    display: flex;
}

/* display 3 */
@media (min-width: 100px) {
    
    .carousel-inner .carousel-item-right.active,
    .carousel-inner .carousel-item-next {
      transform: translateX(33.333%);
    }
    
    .carousel-inner .carousel-item-left.active, 
    .carousel-inner .carousel-item-prev {
      transform: translateX(-33.333%);
    }
}

.carousel-inner .carousel-item-right,
.carousel-inner .carousel-item-left{ 
  transform: translateX(0);
}


</style>


<div class="container text-center">
    <h1 class="font-weight-light"><b>List Donasi<b></h1><br>
    <div class="row">

        <div id="recipeCarousel" class="carousel slide w-100" data-interval="false" data-wrap="false">
            <div class="carousel-inner w-100" role="listbox">
             
           
                <?php
        foreach($donasi as $row) {

                ?>
                <div class="carousel-item">
                    <div class="col-md-4">
                       <a href="<?php echo base_url('/donasi/detail/'.$row->id_donasi); ?>">
                        <div class="card card-body">
                            <img class="img-fluid" src="<?php echo base_url('assets/front/images/donasi/'.$row->image); ?>">
                            <div class="card-body">
            <h4 class="card-title"style="color:black;"><?php echo $row->nama_donasi; ?></h4>
            <p class="card-text">&nbsp;<span style="color:black;" class="badge"><?php echo $row->nama_kategori; ?></span></p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            <hr>
            <div class="card-text">
              <h5 style="color:black;">&nbsp;Sisa Hari</h5>
              <h4><span style="color:black;" >&nbsp;<?php echo $row->masa_aktif; ?></span></h4>
            </div>
            <div  class="card-title">
              <h5 style="color:black;">&nbsp;Terkumpul</h5>
              <h4><span style="color:black;" >&nbsp;<?php echo 'Rp.'.nominal($row->perolehan_donasi); ?></span></h4>
            </div>
         
          <hr>
          </div>
                        </div>
                    </div>
                </div>
                </a>
             <?php 
       
      } ?>
    
                <div class="carousel-item active">
                    <div class="col-md-4">
                        <div class="card">
       
          <div class="card-body">
            <h2 class="card-title"style="width: 200px; height: 400px;"><br><br><br><br><br><a href="<?php echo base_url('home/Donasi_lain'); ?>"><button class="btn btn btn-link"><h1 style="font-size:40px;">Lainnya</h1></button></a></h2>
          
           
          </div>
        </div>
                    </div>
                </div>
              
            </div>
            <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    
</div>


<script type="text/javascript">
  
  $('#recipeCarousel').carousel({
  interval: false,
});

$('.carousel .carousel-item').each(function(){
    var minPerSlide = 3;
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    
  for (var i=0; i < minPerSlide; i++) {
        next=next.next();
       if (!next.length) {
         next = $(this).siblings(':first');
      }
        
      next.children(':first-child').clone().appendTo($(this));
     }
});



</script>








<br><br><br>

	
		</div>
	</div>

 
 
<!-- //end Coursel-->
 
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
</div>
 </div>  
</div>

 

        <?php $this->load->view('layout/footer'); ?>

</div>

<!--<script type="text/javascript" src="<?php echo base_url('assets/slick/slick.min.js') ?>"></script>	-->
<!--<script type="text/javascript">

$(document).ready(function(){
$('.post-wrapper').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
});
});
</script> -->


 



