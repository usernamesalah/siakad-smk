<!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar md-shadow-z-2-i  navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
            <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
            <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
            <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                <li>
                    <a href="<?= base_url('kepala') ?>">
                        <i class="icon-home"></i>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li class="heading">
                    <h3 class="uppercase">Data Master</h3>
                </li>
                <li>
                    <a href="<?= base_url('kepala/guru') ?>">
                        <i class="icon-user"></i>
                        <span class="title">Guru</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('kepala/siswa') ?>">
                        <i class="icon-user"></i>
                        <span class="title">Siswa</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('kepala/visimisi') ?>">
                        <i class="icon-list"></i>
                        <span class="title">Visi Misi</span>
                    </a>
                </li>


                <li class="heading">
                    <h3 class="uppercase">Laporan Data</h3>
                </li>
                <li>
                    <a href="<?= base_url('kepala/laporan-nilai') ?>">
                        <i class="icon-list"></i>
                        <span class="title">Nilai Siswa</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('kepala/absensi-guru') ?>">
                        <i class="icon-users"></i>
                        <span class="title">Absensi Guru</span>
                    </a>
                </li>
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
