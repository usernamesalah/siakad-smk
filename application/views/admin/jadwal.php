    <div class="page-content">
    <!-- BEGIN PAGE HEAD -->
    <div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1>Data Jadwal Pelajaran</h1>
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
                        <i class="fa fa-gift"></i>Data Jadwal Pelajaran
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
                                <th> # </th>
                                <th> Kelas </th>
                                <th> Mata Pelajaran </th>
                                <th> Guru </th>
                                <th> Semester </th>
                                <th> Tahun Ajaran </th>
                                <th> Jam Pelajaran </th>
                                <th> Actions </th>
                            </tr>

                            <tr>
                                <?= form_open('admin/data-jadwal') ?>
                                <th></th>
                                <th>
                                    <select name="class_id" required class="form-control">
                                        <option value="">Pilih Kelas</option>
                                        <?php foreach ($kelas as $row): ?>
                                        <option value="<?= $row->class_id ?>">
                                            <?= $row->class_name ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </th>
                                <th>
                                    <select name="lesson_id" required class="form-control">
                                        <option value="">Pilih Mata Pelajaran</option>
                                        <?php foreach ($mapel as $row): ?>
                                        <option value="<?= $row->lesson_id ?>">
                                            <?= $row->title ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </th>
                                <th>
                                    <select name="teacher_id" required class="form-control">
                                        <option value="">Pilih Guru</option>
                                        <?php foreach ($guru as $row): ?>
                                        <option value="<?= $row->teacher_id ?>">
                                            <?= $row->user->name ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </th>
                                <th>
                                    <select name="semester" required class="form-control">
                                        <option value="">Pilih Semester</option>
                                        <option value="Odd">Ganjil</option>
                                        <option value="Even">Genap</option>
                                    </select>
                                </th>
                                <th>
                                    <select name="year_id" required class="form-control">
                                        <option value="">Pilih Tahun Ajaran</option>
                                        <?php foreach ($tahun_ajaran as $row): ?>
                                        <option value="<?= $row->year_id ?>">
                                            <?= $row->school_year ?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </th>
                                <th>
                                    <div class="col-md-6">
                                        <input type="time" name="started_at" class="form-control">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="time" name="ended_at" class="form-control">
                                    </div>
                                </th>
                                <th>
                                    <input type="submit" name="submit" value="Simpan" class="btn btn-success">
                                </th>
                                <?= form_close() ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0; foreach ($jadwal as $row): ?>
                            <tr class="odd gradeX">
                                <td>
                                    <?= ++$i ?>
                                </td>
                                <td>
                                    <?= $row->class->class_name ?>
                                </td>
                                <td>
                                    <?= $row->lesson->title ?>
                                </td>
                                <td class="center">
                                    <?= $row->teacher->user->name ?>
                                </td>
                                <td>
                                    <?= $row->semester == 'Odd' ? 'Ganjil' : 'Genap' ?>
                                </td>
                                <td>
                                    <?= $row->year->school_year ?>
                                </td>
                                <td>
                                    <?= $row->started_at . ' s.d. ' . $row->ended_at ?>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-left" role="menu">
                                            <li>
                                                <a href="#edit" data-toggle="modal">
                                                    <i class="icon-pencil"></i> Edit Jadwal </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="icon-trash"></i> Hapus </a>
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
<div class="modal fade" id="edit" tabindex="-1" role="basic" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Edit Jadwal</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="col-md-6 control-label">Kelas</label>
                    <div class="col-md-6">
                        <select name="class_id" required class="form-control">
                            <option value="">Pilih Kelas</option>
                            <?php foreach ($kelas as $row): ?>
                            <option value="<?= $row->class_id ?>">
                                <?= $row->class_name ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-6 control-label">Mata Pelajaran</label>
                    <div class="col-md-6">
                        <select name="lesson_id" required class="form-control">
                            <option value="">Pilih Mata Pelajaran</option>
                            <?php foreach ($mapel as $row): ?>
                            <option value="<?= $row->lesson_id ?>">
                                <?= $row->title ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-6 control-label">Guru</label>
                    <div class="col-md-6">
                        <select name="teacher_id" required class="form-control">
                            <option value="">Pilih Guru</option>
                            <?php foreach ($guru as $row): ?>
                            <option value="<?= $row->teacher_id ?>">
                                <?= $row->user->name ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-6 control-label">Semester</label>
                    <div class="col-md-6">
                        <select name="semester" required class="form-control">
                            <option value="">Pilih Semester</option>
                            <option value="Odd">Ganjil</option>
                            <option value="Even">Genap</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-6 control-label">Tahun Ajaran</label>
                    <div class="col-md-6">

                        <select name="year_id" required class="form-control">
                            <option value="">Pilih Tahun Ajaran</option>
                            <?php foreach ($tahun_ajaran as $row): ?>
                            <option value="<?= $row->year_id ?>">
                                <?= $row->school_year ?>
                            </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-6 control-label">Jam Pelajaran</label>
                    <div class="col-md-6">
                        <div class="col-md-6">
                            <input type="time" name="started_at" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <input type="time" name="ended_at" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                <button type="button" class="btn green">Simpan</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>