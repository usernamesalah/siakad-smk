<div class="page-content">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>Detail Guru</h1>
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
                        <div class="col-md-4">
                            <center>
                                <img src="http://placehold.it/150">
                            </center>
                        </div>
                        <div class="col-md-8">
                            <table class="table table-bordered table-responsive">
                                <tbody>
                                    <tr>
                                        <td>Nip</td>
                                        <td><?= $guru->nip ?></td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td><?= $guru->user->name ?></td>
                                    </tr>

                                    <tr>
                                        <td>Tempat , Tanggal Lahir</td>
                                        <td><?= $guru->user->birthplace . ', ' . $guru->user->birthdate ?></td>
                                    </tr>
                                    <tr>
                                        <td>Pendidikan Terakhir</td>
                                        <td><?= $guru->last_education ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <hr>
                    <h4>Log Mengajar</h4>
                    <table class="table table-responsive table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Mata Pelajaran</th>
                                <th>Semester</th>
                                <th>Kelas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                            </tr>
                        </tbody>
                    </table>
				</div>
			</div>
		</div>
	</div>
	<!-- END PAGE CONTENT INNER -->
</div>
