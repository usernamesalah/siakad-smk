<div class="page-content">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>Data Nilai Siswa</h1>
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
						<i class="fa fa-gift"></i>Data Nilai Siswa
					</div>
				</div>
				<div class="portlet-body form">
					<?= $this->session->flashdata('msg') ?>
					<div class="form-body">
						<?= $this->session->flashdata('msg') ?>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-6 control-label">Nama Siswa</label>
									<div class="col-md-6">
										<select name="student_id" id="student_id" class="form-control">
											<option value="">Pilih Siswa</option>
											<?php foreach ($siswa as $row): ?>
												<option value="<?= $row->student->student_id ?>"><?= $row->name ?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-6 control-label">Tahun Ajaran</label>
									<div class="col-md-6">
										<select name="year_id" id="year_id" class="form-control">
											<option value="">Pilih Tahun Ajaran</option>
											<?php foreach ($tahun_ajaran as $row): ?>
												<option value="<?= $row->year_id ?>"><?= $row->school_year ?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-6 control-label">Semester</label>
									<div class="col-md-6">
										<select name="semester" id="semester" class="form-control">
											<option value="">Pilih Semester</option>
											<option value="Odd">Ganjil</option>
											<option value="Even">Genap</option>
										</select>
									</div>
								</div><div class="form-group">
									<label class="col-md-6 control-label">Kelas</label>
									<div class="col-md-6">
										<select name="class_id" id="class_id" class="form-control">
											<option value="">Pilih Kelas</option>
											<?php foreach ($kelas as $row): ?>
												<option value="<?= $row->class_id ?>"><?= $row->class_name ?></option>
											<?php endforeach; ?>
										</select>
									</div>
								</div>
								<center>
									<button type="button" id="submit-btn" onclick="submit();" name="submit" value="Submit" class="btn btn-circle blue">Submit</button>
								</center>
							</div>
						</div>
					</div>
					<!-- END FORM-->
				</div>
			</div>
			<div class="portlet box default">
				<div class="portlet-body" id="result">
					
				</div>
			</div>
		</div>
	</div>
	<!-- END PAGE CONTENT INNER -->
</div>

<script type="text/javascript">
		function submit() {
			const data = {
				submit: true,
				student_id: $('#student_id').val(),
				year_id: $('#year_id').val(),
				semester: $('#semester').val(),
				class_id: $('#class_id').val()
			};
			$.ajax({
				url: '<?= base_url('kepala/laporan-nilai') ?>',
				type: 'POST',
				data: data,
				success: function(response) {
					const res = $.parseJSON(response);
					let html = '<table class="table table-bordered table-responsive">' +
						'<thead>' +
							'<tr>' +
								'<th>#</th>' +
								'<th>Mata Pelajaran</th>' +
								'<th>Nilai Tugas</th>' +
								'<th>Nilai UTS</th>' +
								'<th>Nilai UAS</th>' +
								'<th>Total</th>' +
							'</tr>' +
						'</thead>' +
						'<tbody>';
					for (let i = 0; i < res.length; i++) {
						const harian = Number(res[i].harian.score) || 0;
						const uts = Number(res[i].uts.score) || 0;
						const uas = Number(res[i].uas.score) || 0;
						html += '<tr>';
						html += '<td>' + (i + 1) + '</td>';
						html += '<td>' + res[i].mapel.title + '</td>';
						html += '<td>' + harian + '</td>';
						html += '<td>' + uts + '</td>';
						html += '<td>' + uas + '</td>';
						html += '<td>' + (harian + uts + uas) + '</td>';
						html += '</tr>';
					}

					html += '</tbody>' +
						'<tfoot>' +
							'<tr>' +
								'<td colspan="5"></td>' +
								'<td colspan="2">' +
									'<button class="btn btn-circle btn-success btn-sm">Cetak</button>' +
								'</td>' +
							'</tr>' +
						'</tfoot>';

					$('#result').html(html);
				},
				error: function(error) {
					console.log(error.responseText);
				}
			});

			return false;
		}
</script>