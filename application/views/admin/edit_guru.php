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
						<i class="fa fa-gift"></i>Form Update Data Guru
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
							<div id="type-container"></div>
								<button type="submit" name="submit" value="Submit" class="btn btn-circle blue">Submit</button>
							</div>
						</div>
							
					</div>
					<?= form_close() ?>
					<!-- END FORM-->
				</div>
			</div>
		</div>
	</div>
	<!-- END PAGE CONTENT INNER -->
</div>
