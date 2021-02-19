
<!DOCTYPE html>
<html>
<head>
  <link href="<?php echo base_url('assets/front/images/hb-8'); ?>" rel="shortcut icon">
  <?php $this->load->view('layout/meta'); ?>
  <title>Home - Hayu Bantu</title>
  <?php $this->load->view('layout/css'); ?>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
       <link href='https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap' rel='stylesheet'>

</head>
<body>



<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
     
        <a class="navbar-brand" href="#">
      <img src="<?php echo base_url('assets/front/images/hb-8.png'); ?>" alt="Logo" style="width:20px;">
        </a>
     
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('/'); ?>"><i class='bx bx-grid-alt nav__icon'style="color: black; icon-size:50px;">&nbsp;&nbsp;</i>Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('home/Tutorial'); ?>"><i class='bx bx-bar-chart-alt-2 nav__icon' style="color: black; icon-size:50px;">&nbsp;&nbsp;</i>Tutorial Donasi</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class='bx bx-list-ul nav__icon'style="color: black; icon-size:50px;">&nbsp;&nbsp;</i>
         Hubungi Kami
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo base_url('Profil'); ?>">Profil</a>
          <a class="dropdown-item" href="<?php echo base_url('home/Tentang'); ?>">Tentang Kami</a>
          <div class="dropdown-divider"></div>
         
        </div>
      </li>
    
    </ul>
   <style type="text/css">
  


.form-control:focus {
  box-shadow: none;
}

.form-control-underlined {
  border-width: 0;
  border-bottom-width: 1px;
  border-radius: 0;
  padding-left: 0;
}

/*
*
* ==========================================
* FOR DEMO PURPOSE
* ==========================================
*
*/

body {
  min-height: 100vh;
}

.form-control::placeholder {
  font-size: 0.95rem;
  color: #aaa;
  font-style: italic;
}


</style>
<!--search tgll 22/01/21-->

      <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4"><?php echo form_open('Home/search') ?>
            <div class="input-group" style=" color: blue;" >
              <div class="input-group-prepend">
                <button id="button-addon2" type="submit" class="btn btn-link text-warning"><i class="fa fa fa-search" style="color: #7f8df2;"></i></button>
              </div>
              <input type="search" placeholder="search.." name="keyword" aria-describedby="button-addon2" class="form-control border-0 bg-light">
            </div>
          </div><?php echo form_close()?>
        
 
</div>

</nav>