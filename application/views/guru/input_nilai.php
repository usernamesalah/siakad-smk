<div class="page-content">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>Input Nilai Siswa</h1>
		</div>
		<!-- END PAGE TITLE -->
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT INNER -->
	<div class="row margin-top-10">
		<div class="col-md-12">
			<?= $this->session->flashdata('msg') ?>
			<!-- BEGIN EXAMPLE TABLE PORTLET-->
			<div class="portlet box red">
				<div class="portlet-title">
					<div class="caption">
						Profil Siswa
					</div>
				</div>
				<div class="portlet-body">
					<div class="row">
						<div class="col-md-4" style="text-align: center;">
							<img src="http://placehold.it/150">
						</div>
						<div class="col-md-8">
							<table class="table table-striped table-hover table-bordered">
								<tr>
									<td width="25%"><b>Nama</b></td>
									<td><?= $siswa->user->name ?></td>
								</tr>
								<tr>
									<td><b>NIS</b></td>
									<td><?= $siswa->nis ?></td>
								</tr>
								<tr>
									<td><b>Jenis Kelamin</b></td>
									<td><?= $siswa->user->gender == 'Male' ? 'Laki-laki' : 'Perempuan' ?></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- END EXAMPLE TABLE PORTLET-->

			<div class="portlet box green">
				<div class="portlet-title">
					<div class="caption">
						Daftar Nilai <?= $mapel->title ?>
					</div>
				</div>
				<div class="portlet-body">
					<table class="table table-striped table-hover table-bordered">
						<thead>
							<tr>
								<th>Nilai</th>
								<th>Jenis</th>
								<th>Keterangan</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<?= form_open('guru/input-nilai?student_id=' . $student_id . '&lesson_id=' . $lesson_id . '&year_id=' . $year_id) ?>
									<td>
										<input type="number" required name="score" class="form-control">
									</td>
									<td>
										<select class="form-control" required name="type_id">
											<option value="">Pilih Jenis</option>
											<?php foreach ($types as $type): ?>
												<option value="<?= $type->type_id ?>"><?= $type->type_name ?></option>
											<?php endforeach; ?>
										</select>
									</td>
									<td>
										<textarea class="form-control" name="additional_info"></textarea>
									</td>
									<td><input type="submit" name="submit" class="btn green" value="Simpan"></td>
								<?= form_close() ?>
							</tr>
							<?php foreach ($siswa->scores as $score): ?>
								<tr>
									<td><?= $score->score ?></td>
									<td><?= $score->type->type_name ?></td>
									<td><?= $score->additional_info ?></td>
									<td></td>
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