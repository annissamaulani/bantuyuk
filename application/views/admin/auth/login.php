<!DOCTYPE html>
<html lang="en">
<head>

<?php $this->load->view('admin/layout/meta'); ?>
<title>Login | Hayu Bantu</title>
<?php $this->load->view('admin/layout/css'); ?>

<body class="body-bg-color">
<div class="wrapper">
  <?php
    if($this->session->flashdata('message')) {
  ?>

  <div role="alert" class="alert alert-danger alert-dismissible">
    <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">×</span></button>
    <center><strong><?php echo $this->session->flashdata('message'); ?></strong></center>
  </div>

  <?php 
  } ?>

  <div class="form-body">
    <form action="<?php echo base_url('admin/Login/auth'); ?>" method="post" class="col-form" novalidate="" />
    <div class="col-logo"><img alt="" style="width: 95px" src="<?php echo base_url('admin/assets/images/profil/hb-8.png'); ?>" /></a></div>
      <fieldset>
        <section>
          <div class="form-group has-feedback">
            <label class="control-label"><b>Username</b></label>
            <input class="form-control" name="username" placeholder="Username" type="text" />
            <span class="fa fa-user form-control-feedback" aria-hidden="true"></span> </div>
        </section>
        <section>
          <div class="form-group has-feedback">
            <label class="control-label"><b>Password</b></label>
            <input class="form-control" name="password" placeholder="Password" type="password"/>
            <span class="fa fa-lock form-control-feedback" aria-hidden="true"></span> </div>
        </section>
      </fieldset>
      <footer class="text-center">
        <button type="submit" style="width: 100%" class="btn btn-success pull-center">Login</button>
    </form>
  </div>

</div>
<?php $this->load->view('admin/layout/js'); ?>
</body>
</html>