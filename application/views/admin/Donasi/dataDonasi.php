<!DOCTYPE html>
<html lang="en">
<head>

<?php $this->load->view('admin/layout/meta'); ?>
<title>Data Donasi | Hayu Bantu</title>
<?php $this->load->view('admin/layout/css'); ?>
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url().'assets/admin/plugins/datatables/dataTables.bootstrap.css'?>">

<body class="sidebar-mini">
<div class="wrapper"> 
    <?php $this->load->view('admin/layout/header') ?>
    <?php $this->load->view('admin/layout/sidebar') ?>

    <div class="content-wrapper">
        <section class="content-header">
          
        </section>
      
        <section class="content container-fluid">
            <div class="col-md-12">
                    <div class="chart-box">
                      <a class="btn btn-success btn-flat" href="<?php echo base_url('/admin/Donasi/add') ?>"><span class="fa fa-plus"></span> Add Donasi</a><hr>
                    
                    <div class="table-responsive m-top-2">
                        <table id="example1" class="table table-bordered" style="font-size:13px;">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>ID Kategori</th>
                                    <th>Target</th>
                                    <th>Perolehan Sementara</th>
                                    <th>Tanggal Buat</th>
                                    <th>Masa Habis</th>
                                    <th>Sisa Hari</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no = 1;

                                    foreach($tmpDonasi as $rows) {
                                ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $rows->nama_donasi; ?></td>
                                        <td><?php echo $rows->id_kategori; ?></td>
                                        <td><?php echo 'Rp.'.nominal($rows->target_donasi); ?></td>
                                        <td><?php echo 'Rp.'.nominal($rows->perolehan_donasi); ?></td>
                                        <!-- <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Klik Disini</button>
                                        <div id="demo" class="collapse">
                                        
                                        </div> -->
                                        <td><?php echo tgl_indo($rows->tgl_donasi); ?></td>
                                        <td><?php echo tgl_indo($rows->masa_donasi); ?></td>
                                        <td><?php echo $rows->masa_aktif; ?></td>
                                        
                                        <td>
                                            <center>
                                                <a href="<?php echo base_url('admin/Donasi/edit/'.$rows->id_donasi); ?>"
                                                onclick="return confirm(' Apakah anda yakin EDIT DATA DONASI ini ? ');"
                                                ><i class="fa fa-edit fa-lg"></i></a>
                                                <span class="spasi">
                                                <a href="<?php echo base_url('admin/Donasi/delete/'.$rows->id_donasi) ?>" onclick="return confirm(' Apakah anda yakin HAPUS DATA DONASI ini ? ');"></span><i class="fa fa-trash fa-lg "></a></i>
                                            </center>
                                        </td>
                                    </tr>
                                <?php
                                    $no++;
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
    </div> 

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
  <?php $this->load->view('layout/js'); ?>

</body>
</html>