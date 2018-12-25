<div class="page-content">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>Daftar Kost</h1>
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
					<table class="table table-striped table-bordered table-hover" id="sample_1">
						<thead>
							<tr>
								<th style="text-align: center;">
									Kost
								</th>
								<th style="text-align: center;">
									Harga Sewa Per Tahun
								</th>
								<th style="text-align: center;">
									Luas Kamar
								</th>
								<th style="text-align: center;">
									Lokasi
								</th>
								<th style="text-align: center;">
									Status
								</th>
								<th width="200" style="text-align: center;">
									Aksi
								</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($kost as $row): ?>
								<tr class="odd gradeX">
									<td>
										<?= $row->kost ?>
									</td>
									<td>
										<?= 'Rp. ' . number_format($row->harga_sewa, 2, ',', '.') ?>
									</td>
									<td>
										<?= $row->luas_kamar ?> m²
									</td>
									<td class="center">
										<?= $row->lokasi ?> M
									</td>
									<td>
										<?php if ($row->status == 'Verified'): ?>
											<button class="btn green" onclick="verify('<?= $row->id_kost ?>', this)"><i class="fa fa-check"></i> Verified</button>
										<?php else: ?>
											<button class="btn yellow" onclick="verify('<?= $row->id_kost ?>', this)">Pending</button>
										<?php endif; ?>
									</td>
									<td>
										<div class="btn-group btn-group-solid">
											<a href="<?= base_url('admin/detail-kost/' . $row->id_kost) ?>" class="btn blue btn-sm"><i class="fa fa-eye"></i> Lihat Info Detail</a>
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