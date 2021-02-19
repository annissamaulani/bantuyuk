
<body background ="<?php echo base_url('assets/front/images/profil.png'); ?>">

<?php $this->load->view('layout/header'); ?>

<!--main-->
<br><br><br>
        <div class="container-fluid">
    <div class="section" style="margin-bottom: 8%;">
        <div class="mt-inner">
            <div>
                <br> <br> <br> <br> <br>

                <div class="row">
                    <div class="col-md-7">
                        <div class="alert alert-success">
                              <?php
            foreach ($tmpProfil as $row) {
        ?>
        <h1>&nbsp<b><?php echo $row->nama_profil; ?></b></h1><br>
    
                            <h4><b>No Telpon :</b></h4>
                            <h5 style="font-size: 14px;"><?php echo $row->tlp_profil; ?></h5>
                            <h4><b>Alamat Pusat :</b></h4>
                            <h5 style="font-size: 14px;"><?php echo $row->alamat_profil; ?></h5>
                <?php } ?>           

                        </div>
                        
                    </div>
                    <div class="col-md-5">
                        <div class="alert alert-warning" role="alert">
                        <?php 
                                foreach($tmpProfil as $rows) {
                            ?>
                            <!--<li><img width="100px" src="<?php echo base_url()."admin/assets/images/profil"; ?><?$row['image']?>" class="img-thumbnail" ></li>-->
                                <li style="font-size: 14px;">
                                    <h3><b><?php echo $rows->deskripsi_profil; ?></b></h3>
                                </li>
                                <br>
                                
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <br><br><br>
                   <div class="col-md-5">
                        <div >
                        <?php 
                                foreach($tmpProfil as $rows) {
                            ?>
                                
                                <ul style="font-size: 14px;">
                                    <h4 class="follow hvr-rectangle-out"><i class="fa fa-instagram fa-2x">&nbsp;<?php echo $rows->ig_profil; ?></i></h4>
                                    <h4 class="follow hvr-rectangle-out"><i class="fa fa-facebook fa-2x">&nbsp;&nbsp;&nbsp;<?php echo $rows->fb_profil; ?></i></h4>
                                </ul>
                                <br>
                                
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>
    </div>
    
    
    <?php $this->load->view('layout/footer'); ?>
    
</div>

