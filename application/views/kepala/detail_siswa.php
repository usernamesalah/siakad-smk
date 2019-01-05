<div class="page-content">
    <!-- BEGIN PAGE HEAD -->
    <div class="page-head">
        <!-- BEGIN PAGE TITLE -->
        <div class="page-title">
            <h1>Data Siswa</h1>
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
                        <i class="fa fa-gift"></i><?= $siswa->user->name ?>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-responsive table-striped">
                                <tbody>
                                    <tr>
                                        <td>Foto</td>
                                        <td>
                                            <img class="img img-thumbnail" src="<?= base_url('assets/files/students/' . $siswa->student_id . '.jpg') ?>" style="max-height: 150px;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>NIS</td>
                                        <td>
                                            <input type="text" name="nis" value="<?= $siswa->nis ?>" class="form-control" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>NISN</td>
                                        <td>
                                            <input type="text" name="nisn" value="<?= $siswa->nisn ?>" class="form-control" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama</td>
                                        <td>
                                            <input type="text" name="name" value="<?= $siswa->user->name ?>" class="form-control" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td><?= $siswa->user->gender == 'Male' ? 'Laki-laki' : 'Perempuan' ?></td>
                                    </tr>
                                    <tr>
                                        <td>Tempat Lahir</td>
                                        <td>
                                            <input type="text" value="<?= $siswa->user->birthplace ?>" name="birthplace" class="form-control" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Lahir</td>
                                        <td>
                                            <input type="date" value="<?= $siswa->user->birthdate ?>" name="birthdate" class="form-control" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>
                                            <textarea name="address" rows="4" class="form-control" readonly><?= $siswa->user->address ?></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td colspan="2" style="text-align:center;">Nama Orang Tua</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Ayah</td>
                                        <td>
                                            <input type="text" name="father_name" value="<?= $siswa->father_name ?>" class="form-control" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Pekerjaan Ayah</td>
                                        <td>
                                            <input type="text" name="father_job" value="<?= $siswa->father_job ?>" class="form-control" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Ayah</td>
                                        <td>
                                            <textarea readonly class="form-control" name="father_address"><?= $siswa->father_address ?></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Ibu</td>
                                        <td>
                                            <input type="text" name="mother_name" value="<?= $siswa->mother_name ?>" class="form-control" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Pekerjaan Ibu</td>
                                        <td>
                                            <input type="text" name="mother_job" value="<?= $siswa->mother_job ?>" class="form-control" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Ibu</td>
                                        <td>
                                            <textarea readonly class="form-control" name="mother_address"><?= $siswa->mother_address ?></textarea>
                                        </td>
                                    </tr>
								</tbody>
							</table>
                        </div>
                        <div class="col-md-6">
                        	<table class="table table-responsive table-striped">
                        		<tbody>
                        			 <tr>
                                        <td>Nama Wali</td>
                                        <td>
                                            <input type="text" name="representative_name" value="<?= $siswa->representative_name ?>" class="form-control" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Pekerjaan Wali</td>
                                        <td>
                                            <input type="text" name="representative_job" value="<?= $siswa->representative_job ?>" class="form-control" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Wali</td>
                                        <td>
                                            <textarea name="representative_address" rows="4" class="form-control" readonly><?= $siswa->representative_address ?></textarea>
                                        </td>

                                    </tr>

                                    <tr>
                                    	<td colspan="2" style="text-align:center;">Diterima Menjadi Siswa</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Diterima</td>
                                        <td>
                                            <input type="date" name="accepted_date" value="<?= $siswa->accepted_date ?>" class="form-control" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Asal Sekolah</td>
                                        <td>
                                            <input type="text" name="school_origin" value="<?= $siswa->school_origin ?>" class="form-control" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nomor STTB SMP</td>
                                        <td>
                                            <input type="text" name="sttb" value="<?= $siswa->sttb ?>" class="form-control" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal STTB SMP</td>
                                        <td>
                                            <input type="date" name="sttb_date" value="<?= $siswa->sttb_date ?>" class="form-control" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td colspan="2" style="text-align:center;">Meninggalkan Sekolah</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>
                                            <input type="date" name="leave_date" value="<?= $siswa->leave_date ?>" class="form-control" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Alasan</td>
                                        <td>
                                            <input type="text" name="leave_reason" value="<?= $siswa->leave_reason ?>" class="form-control" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nomor STTB SMP</td>
                                        <td>
                                            <input type="text" name="leave_sttb" value="<?= $siswa->leave_sttb ?>" class="form-control" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal STTB SMP</td>
                                        <td>
                                            <input type="date" name="leave_sttb_date" value="<?= $siswa->leave_sttb_date ?>" class="form-control" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nomor SKHUN</td>
                                        <td>
                                            <input type="text" name="skhun" value="<?= $siswa->skhun ?>" class="form-control" readonly>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal SKHUN</td>
                                        <td>
                                            <input type="date" name="skhun_date" value="<?= $siswa->skhun_date ?>" class="form-control" readonly>
                                        </td>
                                    </tr>
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