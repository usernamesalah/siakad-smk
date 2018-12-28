<div class="page-content">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>Data Kelas</h1>
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
						<i class="fa fa-gift"></i>Data Kelas XI MESIN 2
					</div>
				</div>
				<div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> Tahun Ajaran</th>
                                <th> Semester</th>
                                <th> Wali Kelas </th>
                                <th> Kelas </th>
                                <th> Actions </th>
                            </tr>
                            <tr>
                                <?= form_open('admin/data-kelas') ?>
                                <th>-</th>
                                <th> 
                                    <select name="year_id" class="form-control">
                                        <option value="">2012/2013</option>
                                    </select>
                                </th>
                                <th> 
                                    <select name="semester" class="form-control">
                                        <option value="">Genap</option>
                                    </select>
                                </th>
                                <th> 
                                    <select name="year_id" class="form-control">
                                        <option value="">Azhary,S.Pd.</option>
                                    </select>
                                </th>
                                <th> <input type="text" name="class_name" class="form-control" value="XI MESIN 2" readonly=""></th>
                                <th> <input type="submit" name="submit" value="Simpan" class="btn btn-success"></th>
                                <?= form_close(); ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; foreach ($kelas as $row): ?>
                            <tr class="odd gradeX">
                                <td> <?= ++$i ?> </td>
                                <td>
                                    <?= $row->class_name ?>
                                </td>
                                <td>
                                    <?= $row->class_name ?>
                                </td>
                                <td>
                                    <?= $row->class_name ?>
                                </td>
                                <td>
                                    <?= $row->class_name ?>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-left" role="menu">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-eye"></i> Details </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-edit"></i> Edit </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-trash"></i> Hapus </a>
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
