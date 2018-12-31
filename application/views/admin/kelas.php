<div class="page-content">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>Data Kelas</h1>
		</div>
		<!-- END PAGE TITLE -->
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT INNER -->
	<div class="row margin-top-10">
		<div class="col-md-12">

			<div class="portlet box green">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-gift"></i>Data Kelas
					</div>
				</div>
				<div class="portlet-body">
					<div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                
                            </div>
                            <div class="col-md-6">
                                <div class="btn-group pull-right">
                                    <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-print"></i> Print </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Kelas </th>
                                <th> Actions </th>
                            </tr>
                            <tr>
                                <?= form_open('admin/data-kelas') ?>
                                <th>-</th>
                                <th> <input type="text" name="class_name" class="form-control"></th>
                                <th> <input type="submit" name="submit" value="Simpan" class="btn btn-success"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; foreach ($kelas as $row): ?>
                            <tr class="odd gradeX">
                                <td> <?= ++$i ?> </td>
                                <td>
                                    <?= $row->class_name ?>
                                </td>
                                <td>
                                    <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-left" role="menu">
                                        <li>
                                            <a href="<?= base_url('admin/detail-kelas/' . $row->class_id) ?>">
                                                <i class="fa fa-eye"></i> Details </a>
                                        </li>
                                        <li>
                                            <a href="#edit" data-toggle="modal">
                                                <i class="fa fa-edit"></i> Edit </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-trash"></i> Hapus </a>
                                        </li>
                                    </ul>
                                    <a href="<?= base_url('admin/tahun-anggota-kelas/' . $row->class_id) ?>" class="btn btn-xs red">Anggota Kelas</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
				</div>
			</div>
		</div>
	</div>
	<!-- END PAGE CONTENT INNER -->
</div>


<div class="modal fade" id="edit" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Edit Kelas</h4>
            </div>
            <div class="modal-body"> 
                <div class="form-group">
                    <label class="col-md-6 control-label">Nama</label>
                    <div class="col-md-6">
                        <input type="text" name="name" class="form-control">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                <button type="button" class="btn green">Simpan</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
