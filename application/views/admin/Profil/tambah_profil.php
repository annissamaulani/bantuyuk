<!DOCTYPE html>
<html lang="en">
<head>

<?php $this->load->view('admin/layout/meta'); ?>
<title>Tambah Donasi | Hayu Bantu</title>
<?php $this->load->view('admin/layout/css'); ?>

<body class="sidebar-mini" >
<div class="wrapper"> 
    <?php $this->load->view('admin/layout/header') ?>
    <?php $this->load->view('admin/layout/sidebar') ?>

     <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

            <!-- SELECT2 EXAMPLE -->
      <div class="panel-success">
        <div class="panel-heading with-border">
          <h4 class="panel-title">Post Profil</h4>
        </div>

    <?php echo form_open_multipart('admin/Profil/create');
    ?>

        <div class="panel-body">
          <div class="row">
            <div class="col-md-10">
              <input type="text" name="nama_profil" class="form-control" placeholder="Judul" required/>
            </div>
            <!-- /.col -->
            <div class="col-md-2">
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-flat pull-right" name="insert"><span class="fa fa-pencil"></span> Publish</button>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->

      </div>
    </div>
      <!-- /.box -->

      <div class="row">
        <div class="col-md-8">

          <div class="form-group">
          <div class="panel panel-danger">
            <div class="panel-heading">
              <h4 class="panel-title">Deskripsi</h4>
            </div>
            <div class="panel-body">

              <textarea id="ckeditor" name="deskripsi_profil" required></textarea>

            </div>
            <!-- /.box-body -->
          </div>

          <div class="panel panel-info">
            <div class="panel-heading">
              <h4 class="panel-title">Alamat</h4>
            </div>
            <div class="panel-body">

              <textarea class= "ckeditor" id="ckeditor" name="alamat_profil" required></textarea>

            </div>
            <!-- /.box-body -->
          </div>
        </div>
          <!-- /.box -->

        </div>
        <!-- /.col (left) -->
        <div class="col-md-4">
          <div class="panel panel-info">
            <div class="panel-heading">
               <h4 class="panel-title">Kontak & Sosial Media  </h4>
            </div>
            <div class="panel-body">

              <div class="form-group">
                <label>No Telepon</label>
                <input type="text" name="tlp_profil" placeholder="" style="width: 100%;" required>
              </div>

               <div class="form-group">
                <label>Facebook</label>
                <input type="text" name="fb_profil" ofilplaceholder="" style="width: 100%;" required>
              </div>

              <div class="form-group">
                <label>Instagram</label>
                <input type="text" name="ig_profil" style="width: 100%;" required>
              </div>

              <div class="form-group">
                <label>WhatsApp</label>
                <input type="text" name="wa_profil" style="width: 100%;" required>
              </div>

              <div class="form-group">
                <label>Gambar</label>
                <input type="file" name="image" style="width: 100%;" required>
              </div>
              <!-- /.form group -->
       <div class="form-group">
              <!--<label>
                  <input type="checkbox" class="minimal" name="ximgslider" value="1">
                   Tampilkan pada Image Slider
                </label>
              </div>-->

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    <?php echo form_close();?>

          <!-- /.box -->
        </div>
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
    <?php $this->load->view('admin/layout/footer'); ?>
</div>

<?php $this->load->view('admin/layout/js'); ?>
<script type="text/javascript" src="<?php echo base_url('assets/bower_components/jquery-maskmoney/dist/jquery.maskMoney.min.js'); ?>"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url().'assets/ckeditor/ckeditor.js'?>"></script>
<!-- Page script -->

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.

    CKEDITOR.replace('ckeditor');


  });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#maskMoney').maskMoney({prefix:'Rp. ', thousands:'.', decimal:',', precission:0});
    });
</script>
<script type="text/javascript">
		$('#datepicker').datepicker({
			format: 'yyyy-mm-dd',
			startDate: '+1d',
			todayHighlight: true
		});
	</script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.

    CKEDITOR.replace('ckeditor2');


  });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#maskMoney').maskMoney({prefix:'Rp. ', thousands:'.', decimal:',', precission:0});
    });
</script>
<script type="text/javascript">
    $('#datepicker').datepicker({
      format: 'yyyy-mm-dd',
      startDate: '+1d',
      todayHighlight: true
    });
  </script>
</body>
</html>