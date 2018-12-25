<div class="page-content">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>Absensi Siswa</h1>
		</div>
		<!-- END PAGE TITLE -->
	</div>
	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT INNER -->
	<div class="row margin-top-10">
		<div class="col-md-12">
			<!-- BEGIN EXAMPLE TABLE PORTLET-->
			<div class="portlet box grey-cascade">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-globe"></i>
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
					<table class="table table-striped table-bordered table-hover" id="sample_1">
						<thead>
							<tr>
								<th style="text-align: center;">
									#
								</th>
								<th style="text-align: center;">
									Nama Siswa
								</th>
								<th style="text-align: center;">
									Jumlah Izin
								</th>
								<th style="text-align: center;">
									Jumlah Alpa
								</th>
								<th style="text-align: center;">
									Jumlah Sakit
								</th>
								<th width="200" style="text-align: center;">
									Aksi
								</th>
							</tr>
							<tr>
								<th style="text-align: center;">
									-
								</th>
								<th width="300" style="text-align: center;">
									<select name="siswa" class="form-control">
										<option value=""></option>
									</select>
								</th>
								<th style="text-align: center;">
									<input type="number" name="izin" class="form-control">
								</th>
								<th style="text-align: center;">
									<input type="number" name="alpa" class="form-control">
								</th>
								<th style="text-align: center;">
									<input type="number" name="sakit" class="form-control">
								</th>
								<th width="200" style="text-align: center;">
									<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
								</th>
							</tr>
						</thead>
						<tbody>
							<!-- <?php foreach ($kost as $row): ?> -->
								<tr class="odd gradeX">
									<td>
										1
									</td>
									<td>
										Faris Harun
									</td>
									<td>
										0
									</td>
									<td class="center">
										0
									</td>
									<td>
										1
									</td>
									<td>
										<div class="btn-group btn-group-solid">
											<a href="<?= base_url('admin/') ?>" class="btn blue btn-sm"><i class="fa fa-eye"></i> Lihat Info Detail</a>
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

<script type="text/javascript" src="<?= base_url('assets/metronic') ?>/assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/metronic') ?>/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?= base_url('assets/metronic') ?>/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#sample_1').dataTable();
	});

	function verify(id_kost, obj) {
		$.ajax({
			url: '<?= base_url('admin/verifikasi-kost') ?>',
			type: 'POST',
			data: {
				verify: true,
				id_kost: id_kost
			},
			success: function(response) {
				let json = $.parseJSON(response);
				if (json.status == 'success') {
					if (json.data == 'Verified') {
						$(obj).removeClass('yellow').addClass('green').html('<i class="fa fa-check"></i> Verified');
					} else {
						$(obj).removeClass('green').addClass('yellow').html('Pending');
					}
				}
			},
			error: function(error) { console.log(error.responseText); }
		});
	}
</script>