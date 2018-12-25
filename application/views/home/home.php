<link href="<?= base_url('assets/metronic') ?>/assets/admin/pages/css/search.css" rel="stylesheet" type="text/css"/>
<div class="page-content">
		<!-- BEGIN PAGE HEAD -->
		<div class="page-head">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Sistem Sewa Kost</h1>
			</div>
			<!-- END PAGE TITLE -->
		</div>
		<!-- END PAGE HEAD -->
		<!-- BEGIN PAGE CONTENT INNER -->
		<div class="row">
			<div class="col-md-8">
				<div class="booking-search">
					<!-- BEGIN FORM-->
					<?= form_open('home/rank', ['class' => 'form-horizontal']) ?>
						<div class="form-body">
							<?= $this->session->flashdata('msg') ?>
							<div class="form-group">
								<label class="col-md-3 control-label">Harga Sewa Per Tahun</label>
								<div class="col-md-6">
									<select class="form-control input-circle" id="harga_sewa" name="harga_sewa">
										<option value="">-- Pilih Harga Sewa --</option>
										<option value="5">&lt; Rp. 8.000.000</option>
										<option value="4">Rp. 8.100.000 - Rp. 9.100.000</option>
										<option value="3">Rp. 9.200.000 - Rp. 10.200.000</option>
										<option value="2">Rp. 10.300.000 - Rp. 11.300.000</option>
										<option value="1">Rp. 11.400.000 &gt;</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Tipe</label>
								<div class="col-md-6">
									<select class="form-control input-circle" id="tipe" name="tipe">
										<option value="">-- Pilih Tipe --</option>
										<option value="Laki-laki">Laki-laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Luas Kamar</label>
								<div class="col-md-6">
									<select class="form-control input-circle" id="luas_kamar" name="luas_kamar">
										<option value="">-- Pilih Luas Kamar --</option>
										<option value="5">22 m² &gt;</option>
										<option value="4">18 m² - 21 m²</option>
										<option value="3">14 m² - 17 m²</option>
										<option value="2">10 m² - 13 m²</option>
										<option value="1">&lt; 9 m²</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Lokasi</label>
								<div class="col-md-6">
									<select class="form-control input-circle" id="lokasi" name="lokasi">
										<option value="">-- Pilih Jarak Lokasi --</option>
										<option value="5">&lt; 236 M</option>
										<option value="4">236,1 M - 352,1 M</option>
										<option value="3">352,2 M - 468,2 M</option>
										<option value="2">468,3 M - 584,3 M</option>
										<option value="1">584,4 M &gt;</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Fasilitas</label>
								<div class="col-md-5">
									<select class="form-control input-circle" id="jenis_fasilitas">
										<option value="">-- Pilih Jenis Fasilitas --</option>
										<?php foreach ($fasilitas as $key => $value): ?>
											<option value="<?= $key ?>"><?= $value['label'] ?></option>
										<?php endforeach; ?>
									</select>
								</div>
								<div class="col-md-4">
									<button type="button" onclick="tambah_fasilitas();" class="btn blue">
										<i class="fa fa-plus"></i> Tambah Fasilitas
									</button>
								</div>
							</div>
							<div id="fasilitas"></div>
						</div>
						<div class="form-actions">
							<div class="row">
								<div class="col-md-offset-3 col-md-9">
									<button type="button" name="cari" value="Submit" class="btn blue btn-block margin-top-20" onclick="search(); return false;">Cari Kost <i class="fa fa-search"></i></button>
								</div>
							</div>
						</div>
					<?= form_close() ?>
					<!-- END FORM-->
				</div>
			</div>
			<!--end booking-search-->
			<div class="col-md-4">
				<div class="booking-app">
					<a href="javascript:;">
					<span>
					Cari kost yang sesuai dengan kebutuhanmu </span>
					</a>
				</div>
				<div class="booking-offer">
					<img src="<?= base_url('assets/metronic') ?>/assets/admin/pages/media/search/1.jpg" class="img-responsive" alt="">
					<div class="booking-offer-in" style="background-color: rgba(0, 0, 0, 0.5);">
						<span>Anda pemilik kostan?</span>
						<em>
							<u><a style="color: white !important;" href="<?= base_url('login') ?>">Daftar sekarang</a></u>
						</em>
					</div>
				</div>
			</div>
			<!--end col-md-4-->
		</div>
		<div id="search-result"></div>
		<!-- END PAGE CONTENT INNER -->
	</div>

	<script type="text/javascript">
		function isInArray(value, array) {
			return array.indexOf(value) > -1;
		}
		
		var fasilitas = [];

		function search() {
			<?php 
				$username = $this->session->userdata('username'); 
				if (!isset($username)):
			?>
				window.location.href = '<?= base_url('login') ?>';				
			<?php endif; ?>

			let form_data = {
				cari: true,
				harga_sewa: $('#harga_sewa').val(),
				luas_kamar: $('#luas_kamar').val(),
				lokasi: $('#lokasi').val(),
				tipe: $('#tipe').val()
			};

			for (let i = 0; i < fasilitas.length; i++) {
				if (fasilitas[i] === 'tempat_tidur') {
					form_data['merk_tempat_tidur'] = $('#merk_tempat_tidur').val();
					form_data['bahan_tempat_tidur'] = $('#bahan_tempat_tidur').val();
					form_data['ukuran_tempat_tidur'] = $('#ukuran_tempat_tidur').val();
				} else if (fasilitas[i] === 'lemari') {
					form_data['merk_lemari'] = $('#merk_lemari').val();
					form_data['bahan_lemari'] = $('#bahan_lemari').val();
					form_data['ukuran_lemari'] = $('#ukuran_lemari').val();
				} else if (fasilitas[i] === 'kipas_angin') {
					form_data['merk_kipas_angin'] = $('#merk_kipas_angin').val();
					form_data['tipe_kipas_angin'] = $('#tipe_kipas_angin').val();
					form_data['ukuran_kipas_angin'] = $('#ukuran_kipas_angin').val();
				} else if (fasilitas[i] === 'kamar_mandi_dalam') {
					form_data['fasilitas_kamar_mandi'] = $('#fasilitas_kamar_mandi').val();
					form_data['ukuran_kamar_mandi'] = $('#ukuran_kamar_mandi').val();
				} else if (fasilitas[i] === 'meja_belajar') {
					form_data['merk_meja_belajar'] = $('#merk_meja_belajar').val();
					form_data['tipe_meja_belajar'] = $('#tipe_meja_belajar').val();
					form_data['ukuran_meja_belajar'] = $('#ukuran_meja_belajar').val();
				} else if (fasilitas[i] === 'listrik') {
					form_data['listrik'] = $('#listrik').val();
					form_data['watt_listrik'] = $('#watt_listrik').val();
				} else if (fasilitas[i] === 'mesin_cuci') {
					form_data['merk_mesin_cuci'] = $('#merk_mesin_cuci').val();
					form_data['kapasitas_mesin_cuci'] = $('#kapasitas_mesin_cuci').val();
				} else if (fasilitas[i] === 'kaca_kamar') {
					form_data['merk_kaca_kamar'] = $('#merk_kaca_kamar').val();
					form_data['ukuran_kaca_kamar'] = $('#ukuran_kaca_kamar').val();
				} else if (fasilitas[i] === 'rak_buku') {
					form_data['bahan_rak_buku'] = $('#bahan_rak_buku').val();
					form_data['ukuran_rak_buku'] = $('#ukuran_rak_buku').val();
				} else if (fasilitas[i] === 'wifi') {
					form_data['merk_wifi'] = $('#merk_wifi').val();
				} else if (fasilitas[i] === 'laundry') {
					form_data['laundry'] = $('#laundry').val();
				} else if (fasilitas[i] === 'kulkas') {
					form_data['merk_kulkas'] = $('#merk_kulkas').val();
					form_data['kapasitas_kulkas'] = $('#kapasitas_kulkas').val();
				} else if (fasilitas[i] === 'ac') {
					form_data['merk_ac'] = $('#merk_ac').val();
				}

			}

			$.ajax({
				url: '<?= base_url('home/rank') ?>',
				type: 'POST',
				data: form_data,
				success: function(response) {
					console.log(response);
					let json = $.parseJSON(response);
					let html = '';
					for (let i = 0; i < json.length; i++) {
						html += '<div class="search-classic">' +
									'<div class="row">' +
										'<div class="col-md-3">' +
											'<img src="' + json[i].foto + '" onerror="this.src = \'http://placehold.it/200\'" width="100%"/>' +
										'</div>' +
										'<div class="col-md-8">' +
											'<h4>' +
												'<a href="<?= base_url('home/detail-kost') ?>/' + json[i].id_kost + '">' +
													json[i].kost +
												'</a>' +
											'</h4>' +
												'<a href="javascript:;">' +
													json[i].harga_sewa +
												'</a>' +
											'<p>' +
												json[i].fasilitas +
											'</p>' +
										'</div>' +
									'</div>' +
								'</div>';
					}
					$('#search-result').html(html);
				},
				error: function(err) { console.log(err.responseText); }
			});

			return false;
		}

		function tambah_fasilitas() {
			let jenis_fasilitas = $('#jenis_fasilitas').val();
			<?php foreach ($fasilitas as $key => $value): ?>
				if (jenis_fasilitas === '<?= $key ?>') {
					let config = {};
					let opt;
					<?php 
						$opt = $value['values']; 
						foreach ($opt as $k => $v):
						?>
							<?php $values = $v['values']; ?>
							
							opt = [];
							
							<?php foreach ($values as $ok => $ov): ?>
								opt.push('<?= $ok ?>');
							<?php endforeach; ?>

							config['<?= $k ?>'] = opt;

						<?php endforeach; ?>
					if (!isInArray('<?= $key ?>', fasilitas)) {
						create_option_form('<?= $value['label'] ?>', config, '<?= $key ?>');
						fasilitas.push('<?= $key ?>');
					} else {
						alert('Fasilitas tersebut telah ditambahkan sebelumnya');
					}
				}
			<?php endforeach; ?>
		}

		function generate_option(key, opt) {
			let html = '<div class="col-md-3">';
			html += '<select class="form-control input-circle" id="' + key + '" name="' + key + '">';
			let name = key.replace(/_/g, x => ' ');
			html += '<option value="">' + name + '</option>';
			for (let i = 0; i < opt.length; i++) {
				html += '<option value="' + opt[i] + '">' + opt[i] + '</option>';
			}
			html += '</select>';
			html += '</div>';
			return html;
		}

		function create_option_form(label, config, key) {

			let html = '<div class="row">' +
					'<label class="col-md-2 control-label"><small>' + label + '</small></label>';
			for (let k in config) {
				if (config.hasOwnProperty(k)) {
					html += generate_option(k, config[k]);
				}
			}
			html += '<button type="button" class="btn red" onclick="hapus_fasilitas(this, \'' + key + '\');"><i class="fa fa-times"></i></button>';
			html += '</div>' +
				'</div><br/>';
			$('#fasilitas').append(html);
		}

		function hapus_fasilitas(obj, key) {
			$(obj).parent().remove();
			fasilitas.splice(fasilitas.indexOf(key), 1);
		}
	</script>