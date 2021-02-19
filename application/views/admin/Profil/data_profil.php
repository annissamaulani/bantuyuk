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
                      <a class="btn btn-success btn-flat" href="<?php echo base_url('admin/Profil/add') ?>"><span class="fa fa-plus"></span> Add Profil</a><hr>
                    
                    <div class="table-responsive m-top-2">
                        <table id="example1" class="table table-bordered" style="font-size:13px;">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>GAMBAR</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Telepon</th>
                                    <th>Alamat</th>
                                    <th>Instagram</th>
                                    <th>WhatsApp</th>
                                    <th>Facebook</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no = 1;

                                    foreach($data_profil as $rows) {
                                ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><a href="<?=base_url().'assets/images/profil/'.$rows->image; ?>"><img width="100px" src="<?php echo base_url(). 'assets/images/profil/'.$rows->image; ?>" class="img-thumbnail" ></a></td>
                                        <td><?php echo $rows->nama_profil; ?></td>
                                        <td><?php echo $rows->deskripsi_profil; ?></td>
                                        <td><?php echo $rows->tlp_profil; ?></td>
                                        <td><?php echo $rows->alamat_profil; ?></td>
                                        <td><?php echo $rows->ig_profil; ?></td>
                                        <td><?php echo $rows->wa_profil; ?></td>
                                        <td><?php echo $rows->fb_profil; ?></td>
                                        
                                        <td>
                                            <center>
                                                <a href="<?php echo base_url('admin/Profil/edit/'.$rows->id_profil); ?>"
                                                onclick="return confirm(' Apakah anda yakin EDIT DATA PROFIL ini ? ');"
                                                ><i class="fa fa-edit fa-lg"></i></a>
                                                <span class="spasi">
                                                <a href="<?php echo base_url('admin/Profil/delete/'.$rows->id_profil) ?>" onclick="return confirm(' Apakah anda yakin HAPUS DATA PROFIL ini ? ');"></span><i class="fa fa-trash fa-lg "></a></i>
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