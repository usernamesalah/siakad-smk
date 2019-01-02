<div class="page-content">
    <!-- BEGIN PAGE HEAD -->
    <div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1>Data Visi Misi</h1>
        </div>
        <!-- END PAGE TITLE -->
    </div>
    <!-- END PAGE HEAD -->
    <?= $this->session->flashdata('msg') ?>
    <!-- BEGIN PAGE CONTENT INNER -->
    <div class="row margin-top-10">
        <div class="col-md-12">

            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>Input Visi Misi
                    </div>
                </div>
                <div class="portlet-body">
                    <?= form_open('kepala/visimisi') ?>
                    <div class="form-group">
                        <label>Visi Sekolah</label>
                        <textarea name="vision" id="vision" class="form-control" rows="6"><?= $headmaster->vision ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Misi Sekolah</label>
                        <textarea name="mission" id="mission" class="form-control" rows="6"><?= $headmaster->mission ?></textarea>
                    </div>
                    <input type="submit" name="submit" value="Simpan" class="btn btn-success btn-cyrcle">
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT INNER -->
</div>

<script type="text/javascript">
    $( document ).ready(function() {
        tinymce.init({ selector:'textarea', theme: 'modern', plugins: 'advlist' });
    });
        
</script>
