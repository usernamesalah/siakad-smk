<div class="page-content">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>Tahun Anggota Kelas</h1>
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
						<i class="fa fa-gift"></i>Tahun Anggota Kelas <?= $kelas->class_name ?>
					</div>
				</div>
				<div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Tahun Ajaran </th>
                                <th> Aksi </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; foreach ($tahun_ajaran as $row): ?>
                            <tr class="odd gradeX">
                                <td><?= ++$i ?></td>
                                <td>
                                    <?= $row->school_year ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('admin/anggota-kelas?class_id=' . $class_id . '&year_id=' . $row->year_id) ?>" class="btn red btn-xs">Lihat Anggota Kelas</a>
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