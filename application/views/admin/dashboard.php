<!DOCTYPE html>
<html lang="en">
<head>

<?php $this->load->view('admin/layout/meta'); ?>
<title>Dashboard | Hayu bantu</title>
<?php $this->load->view('admin/layout/css'); ?>

<body class="sidebar-mini">
<div class="wrapper"> 
    <?php $this->load->view('admin/layout/header') ?>
    <?php $this->load->view('admin/layout/sidebar') ?>

    <div class="content-wrapper">
        <section class="content-header">
          
        </section>

        <section class="content container-fluid">

          <div class="row">
            <div class="col-lg-4 col-xs-6">
              <div class="media-box">
                <div class="media-icon pull-left"><i class="icon-bargraph"></i> </div>
                <div class="media-info">
                  <h5>Jumlah Kampanye</h5>
                  <h3>
                  <?php echo $this->db->get("data_donasi")->num_rows(); ?>
                  </h3>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-xs-6">
              <div class="media-box bg-sea">
                <div class="media-icon pull-left"><i class="icon-wallet"></i> </div>
                <div class="media-info">
                  <h5>Jumlah Total Donasi</h5>
                  <h3>
                  <?php echo $this->db->get("data_transaksi")->num_rows(); ?>
                  </h3>
                </div>
              </div>
            </div>
           <div class="col-lg-4 col-xs-6">
              <div class="media-box bg-blue">
                <div class="media-icon pull-left"><i class="fa fa-users"></i> </div>
                <div class="media-info">
                  <h5>Jumlah Penerima</h5>
                  <h3>
                  <?php echo $this->db->get("data_penerima")->num_rows(); ?>
                  </h3>
                </div>
              </div>
            </div>

      <section class="content container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Donasi</h3>
                <br>

          <?php
              foreach($data as $data){
              $nama_donasi[] = $data->nama_donasi;
              $perolehan_donasi[] = (float) $data->perolehan_donasi;
        }
    ?>
</thead>
<tbody>
 
    <canvas id="myChart" width="1000" height="280"></canvas>
 
    <!--Load chart js-->
    <script type="text/javascript" src="<?php echo base_url().'assets/chartjs/chart.min.js'?>"></script>
    <script>
 
            var barChartData = {
                labels : <?php echo json_encode($nama_donasi);?>,
                datasets : [
                     
                    {
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($perolehan_donasi);?>
                    }
 
                ]
                 
            }
 
        var Bar = new Chart(document.getElementById("myChart").getContext("2d")).Bar(barChartData);
         
    </script>
  </section>
          
        </section>
    </div> 

    <?php $this->load->view('admin/layout/footer'); ?>
</div>

<?php $this->load->view('admin/layout/js'); ?>

</body>
</html>