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
						<i class="fa fa-gift"></i>Data Nilai Siswa
					</div>
				</div>
				<div class="portlet-body form">
					<?= $this->session->flashdata('msg') ?>
					<?= form_open_multipart('siswa/nilai', ['class' => 'form-horizontal']) ?>
					<div class="form-body">
						<?= $this->session->flashdata('msg') ?>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-6 control-label">Tahun Ajaran</label>
									<div class="col-md-6">
										<select name="tahun_ajaran" class="form-control">
											<option value="">2018/2019</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-6 control-label">Semester</label>
									<div class="col-md-6">
										<select name="tahun_ajaran" class="form-control">
											<option value="">Ganjil</option>
											<option value="">Genap</option>
										</select>
									</div>
								</div><div class="form-group">
									<label class="col-md-6 control-label">Kelas</label>
									<div class="col-md-6">
										<select name="tahun_ajaran" class="form-control">
											<option value="">XII</option>
										</select>
									</div>
								</div>
								<center>
									<button type="submit" name="submit" value="Submit" class="btn btn-circle blue">Submit</button>
									<button type="submit" name="submit" value="Submit" class="btn btn-circle red">Cancel</button>
								</center>
							</div>
						</div>
					</div>
					<?= form_close() ?>
					<!-- END FORM-->
				</div>
			</div>
			<div class="portlet box default">
				<div class="portlet-body">
					<table class="table table-bordered table-responsive">
						<thead>
							<tr>
								<th>#</th>
								<th>Mata Pelajaran</th>
								<th>Guru</th>
								<th>Nilai Tugas</th>
								<th>Nilai UTS</th>
								<th>Nilai UAS</th>
								<th>Total</th>
								<th>Predikat</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>PENJASKES</td>
								<td>Azhary</td>
								<td>90</td>
								<td>90</td>
								<td>90</td>
								<td>180</td>
								<td>A</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="6"></td>
								<td colspan="2">
									<button class="btn btn-circle btn-success btn-sm">Cetak</button>
								</td>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- END PAGE CONTENT INNER -->
</div>
