<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.4
Version: 3.3.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>
        <?= $title . ' | ' . $global_title ?>
    </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/metronic') ?>/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/metronic') ?>/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/metronic') ?>/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/metronic') ?>/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="<?= base_url('assets/metronic') ?>/assets/admin/pages/css/login2.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME STYLES -->
    <link href="<?= base_url('assets/metronic') ?>/assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/metronic') ?>/assets/global/css/plugins-md.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/metronic') ?>/assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/metronic') ?>/assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="<?= base_url('assets/metronic') ?>/assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css" />
    <!-- END THEME STYLES -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<body class="page-md login">
    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    <div class="menu-toggler sidebar-toggler">
    </div>
    <!-- END SIDEBAR TOGGLER BUTTON -->
    <!-- BEGIN LOGO -->
    <div class="logo">
        <a href="index.html">
            <h3>Sistem Informasi Akademik</h3>
        </a>
    </div>
    <!-- END LOGO -->
    <!-- BEGIN LOGIN -->
    <div class="content">
        <!-- BEGIN LOGIN FORM -->
        <?= $this->session->flashdata('msg') ?>
        <?= form_open('login', ['class' => 'login-form']) ?>
        <div class="form-title">
            <span class="form-title">Selamat datang.</span>
            <span class="form-subtitle">Silahkan login.</span>
        </div>
        <?= $this->session->flashdata('msg') ?>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span>
                Enter any username and password. </span>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" />
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" />
        </div>
        <input type="hidden" name="login" value="Login" />
        <div class="form-actions">
            <input type="submit" class="btn btn-primary btn-block uppercase" value="Login" />
        </div>
        <!-- <div class="form-actions">
      <div class="pull-left">
        <label class="rememberme check">
        <input type="checkbox" name="remember" value="1"/>Remember me </label>
      </div>
      <div class="pull-right forget-password-block">
        <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
      </div>
    </div> -->
        <div class="create-account">
            <p>
                <a href="javascript:;" id="register-btn">Buat akun</a>
            </p>
        </div>
        <?= form_close() ?>
        <!-- END LOGIN FORM -->
        <!-- BEGIN FORGOT PASSWORD FORM -->
        <form class="forget-form" action="index.html" method="post">
            <div class="form-title">
                <span class="form-title">Forget Password ?</span>
                <span class="form-subtitle">Enter your e-mail to reset it.</span>
            </div>
            <div class="form-group">
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" />
            </div>
            <div class="form-actions">
                <button type="button" id="back-btn" class="btn btn-default">Back</button>
                <button type="submit" class="btn btn-primary uppercase pull-right">Submit</button>
            </div>
        </form>
        <!-- END FORGOT PASSWORD FORM -->
        <!-- BEGIN REGISTRATION FORM -->
        <?= form_open_multipart('login/register', ['class' => 'register-form']) ?>
        <div class="form-title">
            <span class="form-title">Daftar</span>
        </div>
        <p class="hint">
            Masukkan informasi personal:
        </p>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Nama Lengkap</label>
            <input class="form-control placeholder-no-fix" type="text" placeholder="Nama Lengkap" name="nama" />
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Email</label>
            <input class="form-control placeholder-no-fix" type="email" placeholder="Email" name="email" />
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Alamat</label>
            <input class="form-control placeholder-no-fix" type="text" placeholder="Alamat" name="alamat" />
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Kontak</label>
            <input class="form-control placeholder-no-fix" type="text" placeholder="Kontak" name="kontak" />
        </div>
        <p class="hint">
            Masukkan informasi akun:
        </p>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Jenis Akun</label>
            <select class="form-control placeholder-no-fix" required name="id_role">
                <option value="">Pilih Jenis Akun</option>
                <option value="1">Pemilik Kost</option>
                <option value="3">Pengguna Biasa</option>
            </select>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" />
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" id="register_password" placeholder="Password" name="password" />
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Masukkan kembali password</label>
            <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Masukkan kembali password" name="rpassword" />
        </div>
        <div class="form-actions">
            <input type="hidden" name="register-submit" value="Register" />
            <button type="button" id="register-back-btn" class="btn btn-default">Kembali</button>
            <button type="submit" value="Submit" name="register" class="btn btn-primary uppercase pull-right">Daftar</button>
        </div>
        <?= form_close() ?>
        <!-- END REGISTRATION FORM -->
    </div>
    <div class="copyright hide">
        2014 © Metronic. Admin Dashboard Template.
    </div>
    <!-- END LOGIN -->
    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- BEGIN CORE PLUGINS -->
    <!--[if lt IE 9]>
<script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/respond.min.js"></script>
<script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
    <script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    <script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="<?= base_url('assets/metronic') ?>/assets/global/scripts/metronic.js" type="text/javascript"></script>
    <script src="<?= base_url('assets/metronic') ?>/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
    <script src="<?= base_url('assets/metronic') ?>/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
    <script src="<?= base_url('assets/metronic') ?>/assets/admin/pages/scripts/login.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <script>
        jQuery(document).ready(function() {
            Metronic.init(); // init metronic core components
            Layout.init(); // init current layout
            Login.init();
            Demo.init();
        });
    </script>
    <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->

</html>