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
						Daftar Siswa Mata Pelajaran <?= $jadwal->lesson->title ?> Kelas <?= $jadwal->class->class_name ?>
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
							<?php $i = 0; foreach ($jadwal->class->members as $row): ?>
							<tr class="odd gradeX">
								<td style="text-align: center;">
									<?= ++$i ?>
								</td>
								<td style="text-align: center;">
									<?= $row->student->nis ?>
								</td>
								<td style="text-align: center;">
									<?= $row->student->user->name ?>
								</td>
								<td width="200" style="text-align: center;">
									<a href="<?= base_url('guru/input-nilai?student_id=' . $row->student->student_id . '&lesson_id=' . $lesson_id . '&year_id=' . $year_id) ?>" class="btn blue">Beri Nilai</a>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
			<!-- END EXAMPLE TABLE PORTLET-->
		</div>
	</div>
	<!-- END PAGE CONTENT INNER -->
</div>