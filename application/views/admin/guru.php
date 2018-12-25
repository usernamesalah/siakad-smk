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
					<?= form_open_multipart('admin/tambah-kriteria', ['class' => 'form-horizontal']) ?>
					<div class="form-body">
						<?= $this->session->flashdata('msg') ?>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-6 control-label">NIP</label>
									<div class="col-md-6">
										<input type="text" name="label" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-6 control-label">Nama</label>
									<div class="col-md-6">
										<input type="text" name="key" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-6 control-label">Jenis Kelamin</label>
									<div class="col-md-6">
										<select name="jenis_kelamin" class="form-control">
											<option value="male">Laki Laki</option>
											<option value="female">Perempuan</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-6 control-label">Tempat Lahir</label>
									<div class="col-md-6">
										<input type="number" name="weight" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-6 control-label">Tanggal Lahir</label>
									<div class="col-md-6">
										<input type="number" name="weight" class="form-control">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-4 control-label">Pendidikan Terakhir</label>
									<div class="col-md-6">
										<input type="number" name="weight" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Alamat</label>
									<div class="col-md-6">
										<textarea name="alamat" rows="4" class="form-control"></textarea>
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
                                            <tr class="odd gradeX">
                                                <td> shuxer </td>
                                                <td>
                                                    <a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
                                                </td>
                                                <td>
                                                    <span class="label label-sm label-success"> Approved </span>
                                                </td>
                                                <td class="center"> 12 Jan 2012 </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu pull-left" role="menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-docs"></i> New Post </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-tag"></i> New Comment </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-user"></i> New User </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-flag"></i> Comments
                                                                    <span class="badge badge-success">4</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
				</div>
			</div>
		</div>
	</div>
	<!-- END PAGE CONTENT INNER -->
</div>
