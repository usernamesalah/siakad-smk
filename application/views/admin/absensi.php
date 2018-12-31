<div class="page-content">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>Data Absensi</h1>
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
						<i class="fa fa-gift"></i>Data Absensi <?= $day . ', ' . date('d/m/Y', strtotime($date)) ?>
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
                    <?= form_open('admin/absensi?date=' . $date . '&day=' . $day_en) ?>
                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Absensi</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; foreach ($guru as $row): ?>
                                <tr>
                                    <td><?= ++$i ?></td>
                                    <td><?= $row->nip ?></td>
                                    <td><?= $row->user->name ?></td>
                                    <td>
                                        <div class="md-radio-inline">
                                            <div class="md-radio">
                                                <input type="radio" id="radio1-<?= $row->nip ?>" name="attendance-<?= $row->nip ?>" <?= isset($row->attendance) && $row->attendance->status == 'Attend' ? 'checked' : '' ?> value="Attend" class="md-check">
                                                <label for="radio1-<?= $row->nip ?>">
                                                    <span class="inc"></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Hadir</label>
                                            </div>
                                            <div class="md-radio">
                                                <input type="radio" id="radio2-<?= $row->nip ?>" name="attendance-<?= $row->nip ?>" <?= isset($row->attendance) && $row->attendance->status == 'Absent' ? 'checked' : '' ?> value="Absent" class="md-check" >
                                                <label for="radio2-<?= $row->nip ?>">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> Absen</label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <textarea class="form-control" name="info-<?= $row->nip ?>"><?= isset($row->attendance) ? $row->attendance->additional_info : '-' ?></textarea>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <input type="submit" name="submit" value="Simpan Absensi" class="btn blue btn-lg">
                    <?= form_close() ?>
				</div>
			</div>
		</div>
	</div>
	<!-- END PAGE CONTENT INNER -->
</div>