<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="<?= base_url('') ?>" class="site_title"><i class="fa fa-paw"></i> <!-- <span>PT. Sumatera Prima Fibreboard</span> --></a>
                </div>
                <div class="clearfix"></div>
                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="<?= base_url('assets/production/') ?>images/img.jpg" alt="User" class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2><?= $username ?></h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->
                <br />
                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>Menu</h3>
                        <ul class="nav side-menu">
                        <li>
                            <?php if (isset($id_hak_akses) && $id_hak_akses == 1): ?>
                                <a href="<?= base_url('admin') ?>"><i class="fa fa-home"></i> Home </a>
                                <ul class="nav child_menu">
                                </ul>
                            <?php elseif (isset($id_hak_akses) && $id_hak_akses == 2): ?>
                                <a href="<?= base_url('supervisor') ?>"><i class="fa fa-home"></i> Home </a>
                                <ul class="nav child_menu">
                                </ul>
                            <?php endif; ?>
                        </li>
                        <li><a href="#"><i class="fa fa-user"></i> Pelamar</a>
                        <ul class="nav child_menu">
                            <?php if (isset($id_hak_akses) && $id_hak_akses == 1): ?>
                                <li><a href="<?= base_url('admin/daftar-pelamar') ?>"><i class="fa fa-users"></i> Daftar Pelamar</a></li>
                            <?php elseif (isset($id_hak_akses) && $id_hak_akses == 2): ?>
                                <li><a href="<?= base_url('supervisor/daftar-pelamar') ?>"><i class="fa fa-users"></i> Daftar Pelamar</a></li>
                            <?php endif; ?>
                            <?php if (isset($id_hak_akses) && $id_hak_akses == 1): ?>
                                <li><a href="<?= base_url('admin/input-data-pelamar') ?>"><i class="fa fa-user-plus"></i> Input Data Pelamar</a></li>
                            <?php endif; ?>
                            <?php if (isset($id_hak_akses) && $id_hak_akses == 1): ?>
                                <li><a href="<?= base_url('admin/ranking-penilaian') ?>"><i class="fa fa-line-chart"></i> Ranking Penilaian</a></li>
                            <?php elseif (isset($id_hak_akses) && $id_hak_akses == 2): ?>
                                <li><a href="<?= base_url('supervisor/ranking-penilaian') ?>"><i class="fa fa-line-chart"></i> Ranking Penilaian</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                    <?php if (isset($id_hak_akses) && $id_hak_akses == 1): ?>
                    <li><a href="#"><i class="fa fa-th-list"></i> Kriteria</a>
                    <ul class="nav child_menu">
                        <?php if (isset($id_hak_akses) && $id_hak_akses == 1): ?>
                                <li><a href="<?= base_url('admin/kriteria') ?>"><i class="fa fa-list"></i> Data Kriteria</a></li>
                            <?php elseif (isset($id_hak_akses) && $id_hak_akses == 2): ?>
                                <li><a href="<?= base_url('supervisor/kriteria') ?>"><i class="fa fa-list"></i> Data Kriteria</a></li>
                            <?php endif; ?>
                        <?php if (isset($id_hak_akses) && $id_hak_akses == 1): ?>
                            <li><a href="<?= base_url('admin/input-data-kriteria') ?>"><i class="fa fa-list-alt"></i> Input Data Kriteria</a></li>
                        <?php endif; ?>
                    </ul>
                    <?php endif; ?>
                </li>
            <li>
                <?php if (isset($id_hak_akses) && $id_hak_akses == 1): ?>
                <a href="<?= base_url('admin/user') ?>"><i class="fa fa-database"></i> Data Pengguna</a>
                <ul class="nav child_menu">
                </ul>
                <?php endif; ?>
            </li>
            <li>
                <?php if (isset($id_hak_akses) && $id_hak_akses == 1): ?>
                    <a href="<?= base_url('admin/perhitungan') ?>"><i class="fa fa-calculator"></i> Perhitungan FSAW</a>
                    <ul class="nav child_menu">
                    </ul>
                <?php endif; ?>
            </li>
        </ul>
    </div>
</div>
<!-- /sidebar menu -->
</div>
</div>