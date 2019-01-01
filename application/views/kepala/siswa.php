<div class="page-content">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>Data Siswa</h1>
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
						<i class="fa fa-gift"></i>Data Siswa
					</div>
				</div>
				<div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                        <thead>
                            <tr>
                                <th> NISN </th>
                                <th> Nama </th>
                                <th> Jenis Kelamin </th>
                                <th> Tempat, Tanggal Lahir </th>
                                <th> Kelas </th>
                                <th> Actions </th>
                            </tr>
                        </thead>
                        <tbody>
                        	<!-- <?php foreach ($siswa as $row): ?> -->
                            <tr class="odd gradeX">
                                <td>09999</td>
                                <td>Azhary</td>
                                <td>
                                	Laki Laki
                                </td>
                                <td class="center">Palembang , 0101010</td>
                                <td>XII Elektro 2</td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-left" role="menu">
                                            <li>
                                                <a href="<?= base_url('kepala/detail-siswa/' . $row->student->student_id) ?>">
                                                    <i class="fa fa-eye"></i> Detail </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        	<!-- <?php endforeach; ?> -->
                        </tbody>
                    </table>
				</div>
			</div>
		</div>
	</div>
	<!-- END PAGE CONTENT INNER -->
</div>
