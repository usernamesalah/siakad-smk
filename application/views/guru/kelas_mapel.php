<div class="page-content">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>Mata Pelajaran</h1>
		</div>
		<!-- END PAGE TITLE -->
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT INNER -->
	<div class="row margin-top-10">
		<div class="col-md-12">
			<!-- BEGIN EXAMPLE TABLE PORTLET-->
			<div class="portlet box grey-cascade">
				<div class="portlet-title">
					<div class="caption">
						Nilai Mata Pelajaran Matematika Kelas XI IPA 2
					</div>
				</div>
				<div class="portlet-body">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th style="text-align: center;">
									#
								</th>
								<th style="text-align: center;">
									NIS
								</th>
								<th style="text-align: center;">
									Nama Siswa
								</th>
								<th width="200" style="text-align: center;">
									Aksi
								</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 0; foreach ($siswa as $row): ?>
							<tr class="odd gradeX">
								<td style="text-align: center;">
									<?= ++$i ?>
								</td>
								<td style="text-align: center;">
									<?= $row->nis ?>
								</td>
								<td style="text-align: center;">
									<?= $row->user->name ?>
								</td>
								<td width="200" style="text-align: center;">
									<a href="<?= base_url('guru/input-nilai?student_id=' . $row->student_id . '&lesson_id=' . $lesson_id . '&year_id=' . $year_id) ?>" class="btn blue">Beri Nilai</a>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="6" style="text-align: right;">
									<button type="submit" class="btn btn-success">Simpan Semua</button>
								</td>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
			<!-- END EXAMPLE TABLE PORTLET-->
		</div>
	</div>
	<!-- END PAGE CONTENT INNER -->
</div>