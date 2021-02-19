

<?php $this->load->view('layout/header'); ?>

<!--main-->

<div class="container-fluid">
   <div class="section">
   <?php
     foreach($donasi as $row) {
        ?>
        <div class="mt-inner">
        <h3 class="font-bold font-l text-left" style="margin-top: 150px">Silakan Masukan Data Anda</h3>
          <br>
          
      <div class="row">
            <div class="alert alert-success col-md-6">
            
                <form method="post" action="<?php echo base_url('Donatur/create') ?>">
                <input type="hidden" name="id_donasi" value="<?php echo $row->id_donasi; ?>">

                <div class="form-group">
                <h6 class="elip font-bold" style="margin-bottom: 30px"><b><?php echo $row->nama_donasi; ?></b></h6>
                    <label for="exampleInputEmail1">Donasi</label>
                    <input type="text" name="jumlah_donasi" class="form-control" placeholder="Rp." id="maskMoney" required/>        
                </div>
               
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input id="nama" type="text" name="nama_donatur" class="form-control" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="form-group">
                        <label >No Telepon (WhatsApp)</label>
                        <input type="text" name="no_telp_donatur" class="form-control" class="no_telp_donatur" placeholder="No Telepon" required>
                    </div>
                    
                    <label for="donasi-anonim" class="from-group-SwitchToggleLabel">
                        <span  style="color:#006400; font-size:18px;"class="from-group-SwitchToggleLabel">Ceklis jika tak ingin mengisi kolom nama (Anonim) </span>
                        <div class="from-group-SwitchToggleLabel">
                            <!-- <input id="donasi-anonim" type="checkbox" readonly value="3"> -->
                            <script type="text/javascript">
    function cekin() {
       
       if (document.getElementById('cek').checked) {
         document.getElementById("nama").required = false;
        
       }else{
         
          document.getElementById("nama").required = true;
          document.getElementById("nama").required = $a;
       }
     }
                              
                            </script>
                            <input type="checkbox" onclick="cekin()" id="cek">
                            <span class="from-group-SwitchToggleLabel">
                             
                            </span>
                            <div id="show">
                              
                            </div>
                        </div>
                    </label>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Pesan</label>
                        <textarea type="text" name="pesan_donatur" class="form-control" placeholder="Pesan" rows="3" required></textarea>
                    </div>
                   
                    <button type="submit" class="btn btn-success white btn-lg btn-block" id="load" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Loading">Lanjut Pembayaran</button>
                </form>
                
                <?php
    
            }
            ?>
         </div>
 

         <div class="col-md-6 text-center">
             <br><br><br><br><br><br><br><br>
             <h1>Dari kita untuk kita</h1>
             <br>
             <h2>#ManusiaDermawan </h2>
             <br>
            <h3>"Sedekah akan membuka pintu rezeki dari arah yang tidak di sangka sebelumnya"</h3>
         </div>
        
      </div>
    </div>
</div>
</div>

    <?php $this->load->view('layout/footer'); ?>
  
   <script type="text/javascript" src="<?php echo base_url('assets/bower_components/jquery-maskmoney/dist/jquery.maskMoney.min.js'); ?>"></script>
   <script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/1ef022ab/dist/jquery.mask.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <?php
        if($this->session->flashdata('message_success')) {
    ?>
    <script type='text/javascript'>
   


        swal({
            text: "<?php echo $this->session->flashdata('message_success'); ?>",
            icon: "success",
            button: true,
            timer: 99999
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
             $('#maskMoney').maskMoney({prefix:'Rp. ', thousands:'.', decimal:',', precission:0});
        });
    </script>
    <script type="text/javascript">
    $('.btn').on('click', function() {
        var $this = $(this);
        $this.button('loading');
    });
  </script>


    <?php
        }
    ?>

   
