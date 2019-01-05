<div class="page-content">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>Data Kepala Sekolah</h1>
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
						<i class="fa fa-gift"></i>Form Penambahan Kepala Sekolah
					</div>
				</div>
				<div class="portlet-body form">
					<?= form_open_multipart('admin/kepala-sekolah', ['class' => 'form-horizontal']) ?>
					<div class="form-body">
						<div class="row">
							<div class="col-md-6">
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
									<label class="col-md-4 control-label">Periode Menjabat</label>
									<div class="col-md-4">
										<input type="date" name="start_period" class="form-control">
									</div>
									<div class="col-md-4">
										<input type="date" name="end_period" class="form-control">
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
						<i class="fa fa-gift"></i>Data Kepala Sekolah
					</div>
				</div>
				<div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Nama </th>
                                <th> Jenis Kelamin </th>
                                <th> Tempat, Tanggal Lahir </th>
                                <th> Periode Jabatan</th>
                                <th> Actions </th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php foreach ($kepsek as $row): ?>
                            <tr class="odd gradeX">
                                <td>1</td>
                                <td><?= $row->name ?></td>
                                <td>
                                	<?php if ($row->gender == 'Male'): ?>
                                		<span class="label label-sm label-danger"><?= $row->gender ?></span>
                                	<?php else: ?>
                                		<span class="label label-sm label-primary"><?= $row->gender ?></span>
                                	<?php endif; ?>
                                </td>
                                <td class="center"><?= $row->birthplace . ', ' . $row->birthdate ?></td>
                                <td>
                                	<?= $row->headmaster->start_period . ' sampai ' . $row->headmaster->end_period ?>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-left" role="menu">
                                            <li>
                                                <a href="<?= base_url('admin/detail-guru/' . $row->headmaster->headmaster_id) ?>">
                                                    <i class="fa fa-eye"></i> Detail </a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('admin/edit-guru/' . $row->headmaster->headmaster_id) ?>">
                                                    <i class="fa fa-edit"></i> Edit </a>
                                            </li>
                                            <li>
                                                <a href="<?= base_url('admin/data-guru/' . $row->headmaster->headmaster_id) ?>">
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
