
    <?php $this->load->view('layout/header'); ?>

    <!--main-->
  
    <h1 class="elip font-bold" style="margin-bottom: 30px">test></h1>






	<?php $this->load->view('layout/footer'); ?>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php
        if($this->session->flashdata('message_success')) {
    ?>
    <script>
        swal({
            text: "<?php echo $this->session->flashdata('message_success'); ?>",
            icon: "success",
            button: true,
            timer: 9999
        });
    </script>
    <?php
        }
    ?>
	<?php $this->load->view('layout/js'); ?>
