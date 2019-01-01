<div class="page-content">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>Data Jadwal Pelajaran</h1>
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
						<i class="fa fa-gift"></i>Jadwal Pelajaran Semester <?= $semester == 'Even' ? 'Genap' : 'Ganjil' ?> Tahun Ajaran <?= $year->school_year ?>
					</div>
				</div>
				<div class="portlet-body">
					<div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                
                            </div>
                            <div class="col-md-6">
                                <div class="btn-group pull-right">
                                    <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-print"></i> Print </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Kelas </th>
                                <th> Mata Pelajaran </th>
                                <th> Jam Pelajaran </th>
                                <th> Actions </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $days = [
                                    'Sunday'    => 'Minggu',
                                    'Monday'    => 'Senin',
                                    'Tuesday'   => 'Selasa',
                                    'Wednesday' => 'Rabu',
                                    'Thursday'  => 'Kamis',
                                    'Friday'    => 'Jumat',
                                    'Saturday'  => 'Sabtu'
                                ];
                                $i = 0; 
                                foreach ($jadwal as $row): 
                            ?>
                            <tr class="odd gradeX">
                                <td><?= ++$i ?></td>
                                <td>
                                    <?= $row->class->class_name ?>
                                </td>
                                <td>
                                    <?= $row->lesson->title ?>
                                </td>
                                <td>
                                    <?= $days[$row->day] . ' - ' . $row->started_at . ' s.d. ' . $row->ended_at ?>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-xs green " href="<?= base_url('guru/siswa-kelas-mapel?year_id=' . $row->year_id . '&semester=' . $row->semester . '&lesson_id=' . $row->lesson_id . '&class_id=' . $row->class->class_id) ?>"> Daftar Siswa
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
