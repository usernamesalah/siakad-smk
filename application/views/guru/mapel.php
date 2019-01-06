<div class="page-content">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>Jadwal Mengajar</h1>
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
						<i class="fa fa-gift"></i>Jadwal Mengajar Tahun <?= $tahun_ajaran->school_year . ' Semester ' . ($semester == 'Odd' ? 'Ganjil' : 'Genap') ?>
					</div>
				</div>
				<div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th> # </th>
                                                <th> Mata Pelajaran </th>
                                                <th> Kelas </th>
                                                <th> Jadwal </th>
                                                <th> Actions </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($jadwal as $i => $row): ?>
                                            <tr class="odd gradeX">
                                                <td><?= $i + 1 ?></td>
                                                <td><?= $row->lesson->title ?></td>
                                                <td><?= $row->class->class_name ?></td>
                                                <td><?= $locale[$row->day] . ', ' . $row->started_at . ' s.d. ' . $row->ended_at ?></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a class="btn btn-xs green " href="<?= base_url('guru/siswa-kelas-mapel?year_id=' . $row->year_id . '&semester=' . $row->semester . '&lesson_id=' . $row->lesson_id . '&class_id=' . $row->class->class_id . '&schedule_id=' . $row->schedule_id) ?>"> Daftar Siswa
                                                        </a>
                                                        <a class="btn btn-xs red" href="<?= base_url('guru/data-absensi?year_id=' . $row->year_id . '&semester=' . $row->semester . '&lesson_id=' . $row->lesson_id . '&class_id=' . $row->class->class_id . '&schedule_id=' . $row->schedule_id) ?>">Absensi</a>
                                                    </div>
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
