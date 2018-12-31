<div class="page-content">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>Anggota Kelas</h1>
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
						<i class="fa fa-gift"></i>Anggota Kelas <?= $kelas->class_name ?> Tahun Ajaran <?= $tahun_ajaran->school_year ?>
					</div>
				</div>
				<div class="portlet-body">
					<div class="row">
						<?= form_open('admin/anggota-kelas?class_id=' . $class_id . '&year_id=' . $year_id, ['class' => 'form-horizontal']) ?>
						<div class="col-md-3">
							<select class="form-control" required name="student_id">
								<option value="">Pilih Siswa</option>
								<?php foreach ($siswa as $row): ?>
									<option value="<?= $row->student_id ?>"><?= $row->user->name ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="col-md-3">
							<input type="submit" name="submit" value="Tambah Anggota Kelas" class="btn green">
						</div>
						<?= form_close() ?>
					</div><br>
                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; foreach ($anggota_kelas->members as $row): ?>
                            <tr class="odd gradeX">
                                <td><?= ++$i ?></td>
                                <td>
                                    <?= $row->student->nis ?>
                                </td>
                                <td>
                                    <?= $row->student->user->name ?>
                                </td>
                                <td>
                                	<a href="<?= base_url('admin/anggota-kelas?class_id=' . $class_id . '&year_id=' . $year_id . '&member_id=' . $row->member_id) ?>" class="btn red btn-xs">
                                		<i class="fa fa-trash"></i>
                                	</a>
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