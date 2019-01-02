<div class="page-content">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>Data Penilaian</h1>
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
						<i class="fa fa-gift"></i>Data Penilaian
					</div>
				</div>
				<div class="portlet-body">
                    <?= $this->session->flashdata('msg') ?>
                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Nama Penilaian </th>
                                <th> Deskripsi </th>
                                <th> Persentase </th>
                                <th> Actions </th>
                            </tr>

                            <tr>
                                <?= form_open('admin/data-nilai') ?>
                                <th> # </th>
                                <th> 
                                    <input type="text" name="type_name" class="form-control">
                                </th>
                                <th> 
                                    <textarea name="description" class="form-control"></textarea>
                                </th>
                                <th> 
                                    <input type="number" min="0" max="100" name="percentage" class="form-control">
                                </th>
                                <th> 
                                    <input type="submit" name="submit" value="Simpan" class="btn btn-success">
                                </th>
                                <?= form_close() ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; foreach ($penilaian as $row): ?>
                            <tr class="odd gradeX">
                                <td><?= ++$i ?></td>
                                <td>
                                    <?= $row->type_name ?>
                                </td>
                                <td>
                                    <?= $row->description ?>
                                </td>
                                <td class="center"> <?= $row->percentage . '%' ?> </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-left" role="menu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-edit"></i> Edit </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-trash"></i> Hapus </a>
                                            </li>
                                        </ul>
                                    </div>
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
