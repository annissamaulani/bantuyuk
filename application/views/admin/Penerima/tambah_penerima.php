<!DOCTYPE html>
<html lang="en">
<head>

<?php $this->load->view('admin/layout/meta'); ?>
<title>Tambah Penerima | Hayu Bantu</title>
<?php $this->load->view('admin/layout/css'); ?>

<body class="sidebar-mini" >
<div class="wrapper"> 
    <?php $this->load->view('admin/layout/header') ?>
    <?php $this->load->view('admin/layout/sidebar') ?>

     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>

    <section class="content container-fluid">
          <div class="col-md-5 col-md-offset-3">

            <?php if($this->session->flashdata('message')) { ?>
              <div role="alert" class="alert alert-success">
                <?php echo $this->session->flashdata('message'); ?>
              </div>
            <?php 
              }?>
            
             <form action="<?php echo base_url('admin/Penerima/create'); ?>" method="post" class="chart-box" enctype="multipart/form-data">
                <h4>Input Data Penerima</h4>
                <br/>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>NIK</label>
                      <input class="form-control" name="nik_penerima" id="basicInput" type="text" required/>
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Nama Penerima</label>
                      <input class="form-control" name="nama_penerima" id="basicInput" type="text" required/>
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Jenis Kelamin</label>
                      <div class="form-check">
                        <label class="form-check-label col-sm-12">
                            <input type="radio" name="jk_penerima" class="form-check-input" value="L">Laki-laki
                          </label>
                        </div>

                        <div class="form-check">
                          <label class="form-check-label col-sm-12">
                            <input type="radio" name="jk_penerima" class="form-check-input" value="P">Perempuan
                          </label>
                        </div>
                    </fieldset>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <label>Alamat Penerima</label>
                      <input class="form-control" name="alamat_penerima" id="basicInput" type="text" required/>
                    </fieldset>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <fieldset class="form-group">
                      <button type="submit" name="insert" class="btn btn-primary">Submit</button>
                    </fieldset>
                  </div>
                </div>
              </form>
          </div>
        </section>
  </div>

    <?php $this->load->view('admin/layout/footer'); ?>
</div>

<?php $this->load->view('admin/layout/js'); ?>
<script type="text/javascript" src="<?php echo base_url('assets/bower_components/jquery-maskmoney/dist/jquery.maskMoney.min.js'); ?>"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url().'assets/ckeditor/ckeditor.js'?>"></script>


</body>
</html>