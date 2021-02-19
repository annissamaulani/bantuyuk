<!DOCTYPE html>
<html lang="en">
<head>

<?php $this->load->view('admin/layout/meta'); ?>
<title>Edit Donasi | Hayu Bantu</title>
<?php $this->load->view('admin/layout/css'); ?>

<body class="sidebar-mini">
<div class="wrapper"> 
    <?php $this->load->view('admin/layout/header') ?>
    <?php $this->load->view('admin/layout/sidebar') ?>

    <div class="content-wrapper">
        
         <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="panel panel-success">
        <div class="panel-heading with-border">
          <h3 class="panel-title">Update Donasi</h3>
        </div>
          <?php                
                foreach($tmpDonasi as $rows) {
            ?>

          <form action="<?php echo base_url('/admin/Donasi/update'); ?>" method="post" class="chart-box" enctype="multipart/form-data">

        <!-- /.box-header -->
        <div class="panel-body">
          <div class="row">
             <input class="form-control" value="<?php echo $rows->id_donasi; ?>" name="id_donasi" id="basicInput" type="hidden" />
            <div class="col-md-10">
              <input class="form-control" value="<?php echo $rows->id_donasi; ?>" name="id_donasi" id="basicInput" type="hidden" />
              <input type="text" class="form-control" value="<?php echo $rows->nama_donasi; ?>" name="nama_donasi" placeholder="Nama Donasi" required/>
            </div>
            <!-- /.col -->
            <div class="col-md-2">
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-flat pull-right"><span class="fa fa-pencil"></span> Update</button>
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

          <div class="panel panel-danger">
            <div class="panel-heading">
              <h3 class="panel-title">Deskripsi</h3>
            </div>
            <div class="panel-body">

             <textarea id="ckeditor" value="<?php echo $rows->deskripsi_donasi; ?>" name="deskripsi_donasi" ></textarea>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (left) -->
        <div class="col-md-4">
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Pengaturan Lainnya</h3>
            </div>
            <div class="panel-body">

              <div class="form-group">
                <label>Kategori</label>
                <select class="form-control select2" name="id_kategori" style="width: 100%;" required>
                  <option value="">-Pilih-</option>
                  <?php foreach ($data_kategori as $data_kategori) {
                          if($row->id_kategori==$data_kategori->id_kategori){ ?>
                            <option value="<?php echo $data_kategori->id_kategori;?>" selected><?php echo $data_kategori->kategori_nama; ?></option>
                          <?php } 
                          else {?>
                              <option value="<?php echo $data_kategori->id_kategori; ?>"><?php echo $data_kategori->kategori_nama; ?></option>
                            <?php } 
                        } ?>
                </select>
              </div>

          <div class="form-group">
            <label>Target</label>
            <input type="number" name="target_donasi"  id="maskMoney" value="<?php echo $rows->target_donasi; ?>" style="width: 100%;">
          </div>

          <div class="form-group">
            <label>Perolehan</label>
            <input type="number" id="maskMoney" class="form-control" value="<?php echo $rows->perolehan_donasi; ?>" name="perolehan_donasi" placeholder="Rp." style="width: 100%;">
          </div>

          <div class="form-group">
            <label>Masa Aktif</label>
            <input type="text" id="datepicker" name="masa_donasi" value="<?php echo $rows->masa_donasi; ?>" style="width: 100%;">
          </div>

          <div class="form-group">
            <label>Gambar</label>
            <input type="file" name="image" value="<?php echo $rows->image; ?>" style="width: 100%;">
          </div>
              <!-- /.form group -->
       <div class="form-group">

              </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </form>
          <?php } ?>
          <!-- /.box -->
        </div>
        <!-- /.col (right) -->
      </div>
      <!-- /.row -->

    </section>

        
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
<script>
		$('#datepicker').datepicker({
			format: 'yyyy-mm-dd',
			startDate: '+1d',
			todayHighlight: true
		});
	</script>

</body>
</html>