<div class="page-content">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>Daftar Kriteria</h1>
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
								<div class="btn-group">
									<a href="<?= base_url('admin/tambah-kriteria') ?>" id="sample_editable_1_new" class="btn green">
									Add New <i class="fa fa-plus"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<table class="table table-striped table-bordered table-hover" id="sample_1">
						<thead>
							<tr>
								<th style="text-align: center;">
									Label
								</th>
								<th style="text-align: center;">
									Key
								</th>
								<th style="text-align: center;">
									Type
								</th>
								<th style="text-align: center;">
									Weight
								</th>
								<th width="250" style="text-align: center;">
									Action
								</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($kriteria as $row): ?>
								<tr class="odd gradeX">
									<td>
										<?= $row->label ?>
									</td>
									<td>
										<?= $row->key ?>
									</td>
									<td>
										<?= $row->type ?>
									</td>
									<td class="center">
										<?= $row->weight ?>
									</td>
									<td>
										<div class="btn-group btn-group-solid">
											<a href="<?= base_url('admin/edit-kriteria/' . $row->id_kriteria) ?>" class="btn blue btn-sm"><i class="fa fa-edit"></i> Edit</a>
											<a href="<?= base_url('admin/kriteria/' . $row->id_kriteria) ?>" class="btn red btn-sm"><i class="fa fa-trash"></i> Delete</a>
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
</script>