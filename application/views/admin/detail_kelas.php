<div class="page-content">
    <!-- BEGIN PAGE HEAD -->
    <div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1>Detail Kelas</h1>
        </div>
        <!-- END PAGE TITLE -->
    </div>
    <!-- END PAGE HEAD -->
    <!-- BEGIN PAGE CONTENT INNER -->
    <div class="row margin-top-10">
        <div class="col-md-12">
            <?= $this->session->flashdata('msg') ?>
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>Kelas <?= $kelas->class_name ?>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered table-responsive">
                                <tbody>
                                    <tr>
                                        <td><b>Wali Kelas</b></td>
                                        <td>
                                            <?php 
                                                $homeroom = $kelas->homerooms()
                                                            ->latest()
                                                            ->first();
                                                echo isset($homeroom) ? $homeroom->teacher->user->name : '-';
                                            ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-gift"></i>Daftar Wali Kelas <?= $kelas->class_name ?>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-toolbar">
                                <div class="row">
                                    <?= form_open('admin/detail-kelas/' . $class_id, ['class' => 'form-horizontal']) ?>
                                        <div class="col-md-3">
                                            <select class="form-control" required name="teacher_id">
                                                <option value="">Pilih Guru</option>
                                                <?php foreach ($guru as $row): ?>
                                                    <option value="<?= $row->teacher_id ?>"><?= $row->user->name ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control" required name="year_id">
                                                <option value="">Pilih Tahun Ajaran</option>
                                                <?php foreach ($tahun_ajaran as $row): ?>
                                                    <option value="<?= $row->year_id ?>"><?= $row->school_year ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <select class="form-control" required name="semester">
                                                <option value="">Pilih Semester</option>
                                                <option value="Odd">Ganjil</option>
                                                <option value="Even">Genap</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="submit" class="btn green" name="submit" value="Tambah">
                                        </div>
                                    <?= form_close() ?>
                                </div>
                            </div>
                            <table class="table table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Semester</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0; foreach ($kelas->homerooms as $homeroom): ?>
                                    <tr>
                                        <td><?= ++$i ?></td>
                                        <td><?= $homeroom->teacher->nip ?></td>
                                        <td><?= $homeroom->teacher->user->name ?></td>
                                        <td><?= $homeroom->semester == 'Odd' ? 'Ganjil' : 'Genap' ?></td>
                                        <td><?= $homeroom->year->school_year ?></td>
                                        <td>
                                            <a href="#" class="btn red btn-xs">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT INNER -->
</div>
