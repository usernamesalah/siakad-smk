<div class="page-content">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>Data Siswa</h1>
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
						<i class="fa fa-gift"></i>Form Update Siswa
					</div>
				</div>
				<div class="portlet-body form">
					<?= $this->session->flashdata('msg') ?>
					<?= form_open_multipart('admin/edit-siswa/' . $student_id, ['class' => 'form-horizontal']) ?>
					<div class="form-body">
						<div class="row">
							<div class="col-md-6">
								<h6>Data Diri Siswa</h6>
								<div class="form-group">
									<label class="col-md-4 control-label">Foto</label>
									<div class="col-md-6">
										<center>
											<img class="img img-responsive img-thumbnail" src="<?= base_url('assets/files/students/' . $siswa->student_id . '.jpg') ?>">
										</center>
										<br>
										<input type="file" name="photo" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">NIS</label>
									<div class="col-md-6">
										<input type="text" name="nis" value="<?= $siswa->nis ?>" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">NISN</label>
									<div class="col-md-6">
										<input type="text" name="nisn" value="<?= $siswa->nisn ?>" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Nama</label>
									<div class="col-md-6">
										<input type="text" name="name" value="<?= $siswa->user->name ?>" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Jenis Kelamin</label>
									<div class="col-md-6">
										<?php  
											$opt = [
												'Male'		=> 'Laki-laki',
												'Female'	=> 'Perempuan'
											];
											echo form_dropdown('gender', $opt, $siswa->user->gender, ['class' => 'form-control']);
										?>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Tempat Lahir</label>
									<div class="col-md-6">
										<input type="text" name="birthplace" value="<?= $siswa->user->birthplace ?>" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Tanggal Lahir</label>
									<div class="col-md-6">
										<input type="date" name="birthdate" value="<?= $siswa->user->birthdate ?>" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Alamat</label>
									<div class="col-md-6">
										<textarea name="address" rows="4" class="form-control"><?= $siswa->user->address ?></textarea>
									</div>
								</div><hr>

								<h6>Nama Orang Tua :</h6>
								<div class="form-group">
									<label class="col-md-4 control-label">Nama Ayah</label>
									<div class="col-md-6">
										<input type="text" value="<?= $siswa->father_name ?>" name="father_name" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Pekerjaan Ayah</label>
									<div class="col-md-6">
										<input type="text" name="father_job" value="<?= $siswa->father_job ?>" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Alamat Ayah</label>
									<div class="col-md-6">
										<textarea name="father_address" rows="4" class="form-control"><?= $siswa->father_address ?></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Nama Ibu</label>
									<div class="col-md-6">
										<input type="text" name="mother_name" value="<?= $siswa->mother_name ?>" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Pekerjaan Ibu</label>
									<div class="col-md-6">
										<input type="text" value="<?= $siswa->mother_job ?>" name="mother_job" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Alamat Ibu</label>
									<div class="col-md-6">
										<textarea name="mother_address" rows="4" class="form-control"><?= $siswa->mother_address ?></textarea>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<h6>Nama Wali :</h6>
								<div class="form-group">
									<label class="col-md-4 control-label">Nama Wali</label>
									<div class="col-md-6">
										<input type="text" name="representative_name" value="<?= $siswa->representative_name ?>" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Pekerjaan Wali</label>
									<div class="col-md-6">
										<input type="text" name="representative_job" value="<?= $siswa->representative_job ?>" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Alamat Wali</label>
									<div class="col-md-6">
										<textarea name="representative_address" rows="4" class="form-control"><?= $siswa->representative_address ?></textarea>
									</div>
								</div><hr>

								<h6>Diterima Menjadi Siswa</h6>
								<div class="form-group">
									<label class="col-md-4 control-label">Tanggal Diterima</label>
									<div class="col-md-6">
										<input type="date" name="accepted_date" value="<?= $siswa->accepted_date ?>" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Asal Sekolah</label>
									<div class="col-md-6">
										<input type="text" name="school_origin" value="<?= $siswa->school_origin ?>" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Nomor STTB SMP</label>
									<div class="col-md-6">
										<input type="text" name="sttb" value="<?= $siswa->sttb ?>" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Tanggal STTB SMP</label>
									<div class="col-md-6">
										<input type="date" name="sttb_date" value="<?= $siswa->sttb_date ?>" class="form-control">
									</div>
								</div>
								<h6>Meninggalkan Sekolah</h6>
								<div class="form-group">
									<label class="col-md-4 control-label">Tanggal</label>
									<div class="col-md-6">
										<input type="date" name="leave_date" value="<?= $siswa->leave_date ?>" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Alasan</label>
									<div class="col-md-6">
										<input type="text" name="leave_reason" value="<?= $siswa->leave_reason ?>" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Nomor STTB SMP</label>
									<div class="col-md-6">
										<input type="text" name="leave_sttb" value="<?= $siswa->leave_sttb ?>" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Tanggal STTB SMP</label>
									<div class="col-md-6">
										<input type="date" name="leave_sttb_date" value="<?= $siswa->leave_sttb_date ?>" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Nomor SKHUN</label>
									<div class="col-md-6">
										<input type="text" name="skhun" value="<?= $siswa->skhun ?>" class="form-control">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-4 control-label">Tanggal SKHUN</label>
									<div class="col-md-6">
										<input type="date" name="skhun_date" value="<?= $siswa->skhun_date ?>" class="form-control">
									</div>
								</div>
						</div>
						<center>
							<input type="submit" name="submit" value="Submit" class="btn btn-circle blue">
						</center>
					</div>
					<?= form_close() ?>
					<!-- END FORM-->
				</div>
			</div>
		</div>
	</div>
	<!-- END PAGE CONTENT INNER -->
</div>
