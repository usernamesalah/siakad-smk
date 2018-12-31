<div class="page-content">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>Detail Mata Pelajaran</h1>
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
						<i class="fa fa-gift"></i>Data Mata Pelajaran
					</div>
				</div>
				<div class="portlet-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered table-responsive">
                                <tbody>
                                    <tr>
                                        <td><b>Mata Pelajaran</b></td>
                                        <td><?= $mapel->title ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Jurusan</b></td>
                                        <td><?= $mapel->department->department_name ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Semester</b></td>
                                        <td><?= $mapel->semester == 'Odd' ? 'Ganjil' : 'Genap' ?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Deskripsi</b></td>
                                        <td><?= $mapel->description ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
	<!-- END PAGE CONTENT INNER -->
</div>
