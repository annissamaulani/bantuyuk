<aside class="main-sidebar dark-bg">
    <section class="sidebar">
        

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header dark-bg">Menu</li>
            <li><a href="<?php echo base_url('/admin/Profil') ?>"><i class="fa fa-user"></i> Profil</a></li>
            <li><a href="<?php echo base_url('/admin/Welcome') ?>"><i class="fa fa-home"></i> Beranda</a></li>
            <li class="treeview"> <a href="#"><i class="fa fa-users"></i> <span>Member</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('/admin/Pengguna') ?>"><i class="fa fa-angle-right"></i> Pengguna</a></li>
                    <li><a href="<?php echo base_url('/admin/Penerima'); ?>"><i class="fa fa-angle-right"></i> Penerima Donasi</a></li>
                </ul>
            </li>
            <li class="treeview"> <a href="#"><i class="fa fa-archive"></i> <span>Donasi</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('/admin/Donasi'); ?>"><i class="fa fa-angle-right"></i> Data Donasi</a></li>
                    <li><a href="<?php echo base_url('/admin/Donasi/add'); ?>"><i class="fa fa-angle-right"></i> Tambah Donasi</a></li>
                    <li><a href="<?php echo base_url('/admin/Kategori') ?>"><i class="fa fa-angle-right"></i> Kategori</a></li>
                </ul>
            </li>

            <li class="treeview"> <a href="#"><i class="fa fa-credit-card"></i> <span>Transaksi</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('/admin/Transaksi'); ?>"><i class="fa fa-angle-right"></i> Data Transaksi</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo base_url('/admin/laporan'); ?>"><i class="fa fa-file"></i> Laporan</a></li>
            </li>
            <li>
                <a href="<?php echo base_url('/admin/Login/logout'); ?>"><i class="fa fa-sign-out"></i> LogOut</a></li>
            </li>
        </ul>
    </section>
</aside>