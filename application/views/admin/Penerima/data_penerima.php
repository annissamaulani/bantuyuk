<!DOCTYPE html>
<html lang="en">
<head>

<?php $this->load->view('admin/layout/meta'); ?>
<title>Data Penerima | Hayu Bantu</title>
<?php $this->load->view('admin/layout/css'); ?>
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url().'assets/admin/plugins/datatables/dataTables.bootstrap.css'?>">

<body class="sidebar-mini">
<div class="wrapper"> 
    <?php $this->load->view('admin/layout/header') ?>
    <?php $this->load->view('admin/layout/sidebar') ?>

    <div class="content-wrapper">
        </section>
      
        <section class="content container-fluid">
            <div class="col-md-12">
                    <div class="chart-box">
                      <a class="btn btn-success btn-flat" href="<?php echo base_url('admin/Penerima/add') ?>"><span class="fa fa-plus"></span> Add Penerima</a><hr>
                    
                    <div class="table-responsive m-top-2">
                        <table id="example1" class="table table-bordered" style="font-size:13px;">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>NAMA PENERIMA</th>
                                    <th>JENIS KELAMIN</th>
                                    <th>ALAMAT</th>
                                    <th>ACTION</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no = 1;

                                    foreach($data_penerima as $rows) {
                                ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $rows->nik_penerima; ?></td>
                                        <td><?php echo $rows->nama_penerima; ?></td>
                                        <td><?php echo $rows->jk_penerima; ?></td>
                                        <td><?php echo $rows->alamat_penerima; ?></td>
                                        <td>
                                            <center>
                                                <a href="<?php echo base_url('admin/Penerima/edit/'.$rows->id_penerima); ?>"
                                                onclick="return confirm(' Apakah anda yakin EDIT DATA PENERIMA ini ? ');"
                                                ><i class="fa fa-edit fa-lg"></i></a>
                                                <span class="spasi">
                                                <a href="<?php echo base_url('admin/Penerima/delete/'.$rows->id_penerima) ?>" onclick="return confirm(' Apakah anda yakin HAPUS DATA PENERIMA ini ? ');"></span><i class="fa fa-trash fa-lg "></a></i>
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
  <?php $this->load->view('admin/layout/js'); ?>

</body>
</html>