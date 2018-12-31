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
			<?= $this->session->flashdata('msg') ?>
			<div class="portlet box green">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-gift"></i>Form Update Data Mata Pelajaran
					</div>
				</div>
				<div class="portlet-body form">
					<!-- BEGIN FORM-->
					<?= form_open('admin/edit-mata-pelajaran/' . $lesson_id, ['class' => 'form-horizontal']) ?>
						<div class="form-body">
							<div class="form-group">
								<label class="col-md-3 control-label">Nama Mata Pelajaran</label>
								<div class="col-md-4">
									<input type="text" value="<?= $mapel->title ?>" name="title" class="form-control">
								</div>
							</div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Jurusan</label>
                                <div class="col-md-4">
                                	<?php
                                		$opt = [];
                                		foreach ($jurusan as $row)
                                		{
                                			$opt[$row->department_id] = $row->department_name;
                                		}

                                		echo form_dropdown('department_id', $opt, $mapel->department_id, ['class' => 'form-control', 'required' => 'required']);
                                	?>
                                </div>
                            </div>
							<div class="form-group">
								<label class="col-md-3 control-label">Deskripsi</label>
								<div class="col-md-4">
									<textarea name="description" class="form-control"><?= $mapel->description ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Semester</label>
								<div class="col-md-4">
									<?php  
										echo form_dropdown('semester', [
											'Odd'	=> 'Ganjil',
											'Even'	=> 'Genap'
										], $mapel->semester, ['class' => 'form-control', 'required' => 'required']);
									?>
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
