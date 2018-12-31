<div class="page-content">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>Data Guru</h1>
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
						<i class="fa fa-gift"></i>Form Penambahan Guru
					</div>
				</div>
				<div class="portlet-body form">
					<?= $this->session->flashdata('msg') ?>
					<?= form_open_multipart('admin/data-guru', ['class' => 'form-horizontal']) ?>
					<div class="form-body">
						<?= $this->session->flashdata('msg') ?>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-6 control-label">NIP</label>
									<div class="col-md-6">
										<input type="text" name="nip" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-6 control-label">Nama</label>
									<div class="col-md-6">
										<input type="text" name="name" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-6 control-label">Jenis Kelamin</label>
									<div class="col-md-6">
										<select name="gender" class="form-control">
											<option value="Male">Laki Laki</option>
											<option value="Female">Perempuan</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-6 control-label">Tempat Lahir</label>
									<div class="col-md-6">
										<input type="text" name="birthplace" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-6 control-label">Tanggal Lahir</label>
									<div class="col-md-6">
										<input type="date" name="birthdate" class="form-control">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-4 control-label">Pendidikan Terakhir</label>
									<div class="col-md-6">
										<input type="text" name="last_education" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Alamat</label>
									<div class="col-md-6">
										<textarea name="address" rows="4" class="form-control"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Username</label>
									<div class="col-md-6">
										<input type="text" name="username" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Password</label>
									<div class="col-md-6">
										<input type="password" name="password" class="form-control">
									</div>
								</div>
							<div id="type-container"></div>
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
						<i class="fa fa-gift"></i>Data Guru
					</div>
				</div>
				<div class="portlet-body">
					<div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn-group">
                                    <button id="sample_editable_1_new" class="btn sbold green"> Add New
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
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
                                <th> Nip </th>
                                <th> Nama </th>
                                <th> Jenis Kelamin </th>
                                <th> Tempat, Tanggal Lahir </th>
                                <th> Actions </th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php foreach ($guru as $row): ?>
                            <tr class="odd gradeX">
                                <td><?= $row->teacher->nip ?></td>
                                <td><?= $row->name ?></td>
                                <td>
                                	<?php if ($row->gender == 'Male'): ?>
                                		<span class="label label-sm label-danger"><?= $row->gender ?></span>
                                	<?php else: ?>
                                		<span class="label label-sm label-blue"><?= $row->gender ?></span>
                                	<?php endif; ?>
                                </td>
                                <td class="center"><?= $row->birthplace . ', ' . $row->birthdate ?></td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-left" role="menu">
                                            <li>
                                                <a href="<?= base_url('admin/detail-guru/' . $row->teacher->teacher_id) ?>">
                                                    <i class="fa fa-eye"></i> Detail </a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('admin/edit-guru/' . $row->teacher->teacher_id) ?>">
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
