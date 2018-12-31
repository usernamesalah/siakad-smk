<div class="page-content">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>Data Mata Pelajaran</h1>
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
						<i class="fa fa-gift"></i>Form Penambahan Mata Pelajaran
					</div>
				</div>
				<div class="portlet-body form">
					<!-- BEGIN FORM-->
					<?= form_open('admin/data-mata-pelajaran', ['class' => 'form-horizontal']) ?>
						<div class="form-body">
							<?= $this->session->flashdata('msg') ?>
							<div class="form-group">
								<label class="col-md-3 control-label">Nama Mata Pelajaran</label>
								<div class="col-md-4">
									<input type="text" name="title" class="form-control">
								</div>
							</div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Jurusan</label>
                                <div class="col-md-4">
                                    <select class="form-control" required name="department_id">
                                        <option value="">Pilih Jurusan</option>
                                        <?php foreach ($jurusan as $row): ?>
                                            <option value="<?= $row->department_id ?>"><?= $row->department_name ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
							<div class="form-group">
								<label class="col-md-3 control-label">Deskripsi</label>
								<div class="col-md-4">
									<textarea name="description" class="form-control"></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Semester</label>
								<div class="col-md-4">
									<select class="form-control" required name="semester">
                                        <option value="">Pilih Semester</option>
										<option value="Odd">Ganjil</option>
										<option value="Even">Genap</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-actions">
							<div class="row">
								<div class="col-md-offset-3 col-md-9">
									<button type="submit" name="submit" value="Submit" class="btn btn-circle blue">Submit</button>
								</div>
							</div>
						</div>
					<?= form_close() ?>
					<!-- END FORM-->
				</div>
			</div>

			<div class="portlet box green">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-gift"></i>Data Mata Pelajaran
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
                                <th> Nama Mata Pelajaran </th>
                                <th> Deskripsi </th>
                                <th> Semester </th>
                                <th> Jurusan </th>
                                <th> Actions </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; foreach ($mapel as $row): ?>
                            <tr class="odd gradeX">
                                <td><?= ++$i ?></td>
                                <td>
                                    <?= $row->title ?>
                                </td>
                                <td>
                                    <?= $row->description ?>
                                </td>
                                <td class="center"> <?= $row->semester == 'Odd' ? 'Ganjil' : 'Genap' ?> </td>
                                <td><?= $row->department->department_name ?></td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-left" role="menu">
                                            <li>
                                                <a href="<?= base_url('admin/detail-mata-pelajaran/' . $row->lesson_id) ?>">
                                                    <i class="fa fa-eye"></i> Detail </a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('admin/edit-mata-pelajaran/' . $row->lesson_id) ?>">
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
