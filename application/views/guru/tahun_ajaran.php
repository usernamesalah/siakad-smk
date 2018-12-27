<div class="page-content">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>Tahun Ajaran</h1>
		</div>
		<!-- END PAGE TITLE -->
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT INNER -->
	<div class="row margin-top-10">
		<div class="col-md-12">
			<!-- BEGIN EXAMPLE TABLE PORTLET-->
			<div class="portlet box blue">
				<div class="portlet-title">
					<div class="caption">
						Tahun Ajaran
					</div>
				</div>
				<div class="portlet-body">
					<table class="table table-striped table-hover table-bordered">
						<thead>
							<tr>
								<th>No.</th>
								<th>Tahun Ajaran</th>
								<th>Semester</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 0; foreach ($years as $year): ?>
								<tr>
									<td><?= ++$i ?></td>
									<td><?= $year->school_year ?></td>
									<td>
										<div class="btn-group">
                                            <button class="btn red dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Ganjil
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-left" role="menu">
                                                <li>
                                                    <a href="<?= base_url('guru/data-jadwal?year_id=' . $year->year_id . '&semester=Odd') ?>">
                                                        <i class="icon-clock"></i> Jadwal </a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url('guru/data-kelas?year_id=' . $year->year_id . '&semester=Odd') ?>">
                                                        <i class="icon-home"></i> Kelas </a>
                                                </li>
                                            </ul>
                                        </div>
										<div class="btn-group">
                                            <button class="btn green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Genap
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-left" role="menu">
                                                <li>
                                                    <a href="<?= base_url('guru/data-jadwal?year_id=' . $year->year_id . '&semester=Even') ?>">
                                                        <i class="icon-clock"></i> Jadwal </a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url('guru/data-kelas?year_id=' . $year->year_id . '&semester=Even') ?>">
                                                        <i class="icon-home"></i> Kelas </a>
                                                </li>
                                            </ul>
                                        </div>
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