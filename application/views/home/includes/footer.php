</div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner">
         2014 &copy; Metronic by keenthemes. <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/respond.min.js"></script>
<script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
<script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
<script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
<!-- <script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script> -->
<script src="<?= base_url('assets/metronic') ?>/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?= base_url('assets/metronic') ?>/assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?= base_url('assets/metronic') ?>/assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="<?= base_url('assets/metronic') ?>/assets/admin/layout2/scripts/quick-sidebar.js" type="text/javascript"></script>
<script src="<?= base_url('assets/metronic') ?>/assets/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<!-- <script src="<?= base_url('assets/metronic') ?>/assets/admin/pages/scripts/index3.js" type="text/javascript"></script> -->
<script src="<?= base_url('assets/metronic') ?>/assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   Demo.init(); // init demo features
   QuickSidebar.init(); // init quick sidebar
    // Index.init(); // init index page
 Tasks.initDashboardWidget(); // init tash dashboard widget  
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>