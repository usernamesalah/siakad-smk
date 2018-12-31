<div class="page-content">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>Data Guru</h1>
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
						<i class="fa fa-gift"></i>Data Guru
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
                                <th> Nip </th>
                                <th> Nama </th>
                                <th> Jenis Kelamin </th>
                                <th> Tempat, Tanggal Lahir </th>
                                <th> Actions </th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php foreach ($guru as $row): ?>
                            <tr class="odd gradeX">
                                <td><?= $row->teacher->nip ?></td>
                                <td><?= $row->name ?></td>
                                <td>
                                	<?php if ($row->gender == 'Male'): ?>
                                		<span class="label label-sm label-danger"><?= $row->gender ?></span>
                                	<?php else: ?>
                                		<span class="label label-sm label-blue"><?= $row->gender ?></span>
                                	<?php endif; ?>
                                </td>
                                <td class="center"><?= $row->birthplace . ', ' . $row->birthdate ?></td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-left" role="menu">
                                            <li>
                                                <a href="<?= base_url('kepala/detail-guru/' . $row->teacher->teacher_id) ?>">
                                                    <i class="fa fa-eye"></i> Detail </a>
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
		</div>
	</div>
	<!-- END PAGE CONTENT INNER -->
</div>
