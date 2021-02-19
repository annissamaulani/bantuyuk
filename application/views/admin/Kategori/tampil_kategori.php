<!DOCTYPE html>
<html lang="en">
<head>

<?php $this->load->view('admin/layout/meta'); ?>
<title>Data Kategori | Hayu Bantu</title>
<?php $this->load->view('admin/layout/css'); ?>
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url().'assets/admin/plugins/datatables/dataTables.bootstrap.css'?>">

  
<body class="sidebar-mini">
<div class="wrapper"> 
    <?php $this->load->view('admin/layout/header') ?>
    <?php $this->load->view('admin/layout/sidebar') ?>

    <div class="content-wrapper">
    <section class="content-header">
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

          <div class="box">
            <div class="box-header">
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#myModal"><span class="fa fa-plus"></span> Add Kategori</a><hr>
            </div>
            <!-- /.box-header -->
             <div class="table-responsive m-top-2">
              <table id="example1" class="table table-bordered" style="font-size:13px;">
                <thead>
                <tr>
          <th style="width:100px;">No</th>
                    <th>ID Kategori</th>
                    <th>Kategori</th>
                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
        <?php
          $no=0;
          foreach ($data->result_array() as $i) :
             $no++;
                       $id_kategori=$i['id_kategori'];
                       $kategori_nama=$i['kategori_nama'];

                    ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $id_kategori;?></td>
                  <td><?php echo $kategori_nama;?></td>

                  <td style="text-align:right;">
                        <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $id_kategori;?>"><span class="fa fa-pencil"></span></a>
                        <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $id_kategori;?>"><span class="fa fa-trash"></span></a>
                  </td>
                </tr>
        <?php endforeach;?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

    <!--Modal Add Pengguna-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Add Kategori</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/Kategori/simpan_kategori'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">ID Kategori</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xidkategori" class="form-control" id="inputUserName" placeholder="ID Kategori" required>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Kategori</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xkategori" class="form-control" id="inputUserName" placeholder="Kategori" required>
                                        </div>
                                    </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>


    <?php foreach ($data->result_array() as $i) :
              $id_kategori=$i['id_kategori'];
              $kategori_nama=$i['kategori_nama'];
            ?>


  <!--Modal Edit Pengguna-->
        <div class="modal fade" id="ModalEdit<?php echo $id_kategori;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Kategori</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/Kategori/update_kategori'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Kategori</label>
                                        <div class="col-sm-7">
                      <input type="hidden" name="kode" value="<?php echo $id_kategori;?>"/>
                                            <input type="text" name="xkategori" class="form-control" id="inputUserName" value="<?php echo $kategori_nama;?>" placeholder="Kategori" required>
                                        </div>
                                    </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Update</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
  <?php endforeach;?>

  <?php foreach ($data->result_array() as $i) :
              $id_kategori=$i['id_kategori'];
              $kategori_nama=$i['kategori_nama'];
            ?>
  <!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $id_kategori;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Kategori</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/Kategori/hapus_kategori'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
              <input type="hidden" name="kode" value="<?php echo $id_kategori;?>"/>
                            <p>Apakah Anda yakin mau menghapus Pengguna <b><?php echo $kategori_nama;?></b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
  <?php endforeach;?>


    <?php $this->load->view('admin/layout/footer'); ?>
</div>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script>
  $(document).ready(function() {
    var table = $('#example1').DataTable( {
        rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true
    } );
} );
</script>
<?php if($this->session->flashdata('msg')=='error'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Error',
                    text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
                    showHideTransition: 'slide',
                    icon: 'error',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#FF4859'
                });
        </script>

    <?php elseif($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Kategori Berhasil disimpan ke database.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='info'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Info',
                    text: "Kategori berhasil di update",
                    showHideTransition: 'slide',
                    icon: 'info',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#00C9E6'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Kategori Berhasil dihapus.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php else:?>

    <?php endif;?>

<?php $this->load->view('admin/layout/js'); ?>

</body>
</html>