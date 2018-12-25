<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user"></i> <?= $username ?>
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li>
                            <?php if (isset($id_hak_akses) && $id_hak_akses == 1): ?>
                                <a href="<?= base_url('admin/edit-profile') ?>"><i class="fa fa-cog"></i> Edit Profile</a>
                            <?php elseif (isset($id_hak_akses) && $id_hak_akses == 2): ?>
                                <a href="<?= base_url('supervisor/edit-profile') ?>"><i class="fa fa-cog"></i> Edit Profile</a>
                            <?php endif; ?>
                        </li>
                        <li><a href="<?= base_url('logout') ?>"><i class="fa fa-sign-out"></i> Log Out</a></li>
                    </ul>
                </li>
                <li><a href="<?= base_url() ?>"><h5>PT. Sumatera Prima Fibreboard</h5></a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->