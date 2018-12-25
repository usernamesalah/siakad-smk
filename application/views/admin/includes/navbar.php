<!-- BEGIN HEADER -->
<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="<?= base_url('pemilik') ?>">
                <img src="<?= base_url('assets/metronic') ?>/assets/admin/layout4/img/logo-light.png" alt="logo" class="logo-default"/>
            </a>
            <div class="menu-toggler sidebar-toggler">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN PAGE TOP -->
        <div class="page-top">
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-user dropdown-dark">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <span class="username username-hide-on-mobile">
                        Admin </span>
                        <!-- DOC: Do not remove below empty space(&nbsp;) as its purposely used -->
                        <img alt="" class="img-circle" src="<?= base_url('assets/metronic') ?>/assets/admin/layout4/img/avatar9.jpg"/>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="#">
                                <i class="icon-user"></i> My Profile </a>
                            </li>
                            <li class="divider">
                            </li>
                            <li>
                                <a href="<?= base_url('logout') ?>">
                                <i class="icon-key"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>

<!-- BEGIN CONTAINER -->
<div class="page-container">
