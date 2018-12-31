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
                    <a href="<?= base_url('admin') ?>">
                        <i class="icon-home"></i>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li class="heading">
                    <h3 class="uppercase">Data Master</h3>
                </li>
                <li>
                    <a href="<?= base_url('admin/data-guru') ?>">
                        <i class="icon-user"></i>
                        <span class="title">Guru</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/data-siswa') ?>">
                        <i class="icon-user"></i>
                        <span class="title">Siswa</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/data-mata-pelajaran') ?>">
                        <i class="icon-list"></i>
                        <span class="title">Mata Pelajaran</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/data-tahun-ajaran') ?>">
                        <i class="icon-list"></i>
                        <span class="title">Tahun Ajaran</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/data-kelas') ?>">
                        <i class="icon-list"></i>
                        <span class="title">Kelas</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/data-penilaian') ?>">
                        <i class="icon-list"></i>
                        <span class="title">Penilaian</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/data-jadwal') ?>">
                        <i class="icon-list"></i>
                        <span class="title">Jadwal Pelajaran</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/data-jurusan') ?>">
                        <i class="icon-list"></i>
                        <span class="title">Jurusan</span>
                    </a>
                </li>


                <li class="heading">
                    <h3 class="uppercase">Laporan Data</h3>
                </li>
                <li>
                    <a href="<?= base_url('admin/laporan-nilai') ?>">
                        <i class="icon-list"></i>
                        <span class="title">Nilai Siswa</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/absensi-guru') ?>">
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
