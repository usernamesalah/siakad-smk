<div class="page-content">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>Data Absensi Siswa</h1>
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
						<i class="fa fa-gift"></i>Data Absensi Siswa Kelas <?= $jadwal->class->class_name ?> Mata Pelajaran <?= $jadwal->lesson->title ?> Semester <?= $semester == 'Odd' ? 'Ganjil' : 'Genap' ?> Tahun Ajaran <?= $jadwal->year->school_year ?>
					</div>
				</div>
				<div class="portlet-body">
					<div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6">
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Tanggal</th>
                                <th>Hari</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; foreach ($period as $row): ?>
                                <?php if ($row->format('l') == 'Sunday') continue; ?>
                                <tr class="odd gradeX">
                                    <td width="20"><?= ++$i ?></td>
                                    <td><?= $row->format('d/m/Y') ?></td>
                                    <td><?= $locale[$row->format('l')] ?></td>
                                    <td>
                                        <a href="<?= base_url('guru/absensi?date=' . $row->format('Y-m-d') . '&day=' . $row->format('l') . '&semester=' . $semester . '&schedule_id=' . $schedule_id) ?>" class="btn green"><i class="icon-list"></i> Absensi</a>
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