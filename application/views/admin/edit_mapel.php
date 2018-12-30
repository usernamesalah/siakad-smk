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
						<i class="fa fa-gift"></i>Form Update Data Mata Pelajaran
					</div>
				</div>
				<div class="portlet-body form">
					<!-- BEGIN FORM-->
					<?= form_open('admin/data-mata-pelajaran', ['class' => 'form-horizontal']) ?>
						<div class="form-body">
							<?= $this->session->flashdata('msg') ?>
                            <input type="hidden" name="id_mapel" value="">
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
		</div>
	</div>
	<!-- END PAGE CONTENT INNER -->
</div>
