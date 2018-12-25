<div class="page-content">
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>Tambah Kriteria</h1>
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
						<i class="fa fa-gift"></i>Form Penambahan Kriteria
					</div>
				</div>
				<div class="portlet-body form">
					<!-- BEGIN FORM-->
					<?= form_open_multipart('admin/edit-kriteria/' . $id_kriteria, ['class' => 'form-horizontal']) ?>
						<div class="form-body">
							<?= $this->session->flashdata('msg') ?>
							<div class="form-group">
								<label class="col-md-3 control-label">Label</label>
								<div class="col-md-4">
									<input type="text" name="label" value="<?= $kriteria->label ?>" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Key</label>
								<div class="col-md-4">
									<input type="text" name="key" value="<?= $kriteria->key ?>" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Weight</label>
								<div class="col-md-4">
									<input type="number" name="weight" value="<?= $kriteria->weight ?>" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 control-label">Type</label>
								<div class="col-md-4">
									<?php  
										$opt = [
											''			=> 'Choose Type',
											'range'		=> 'Range Angka',
											'option'	=> 'Opsi Pilihan',
											'criteria'	=> 'Memiliki Subkriteria'
										];

										echo form_dropdown('type', $opt, $kriteria->type, ['class' => 'form-control', 'id' => 'type']);
									?>
								</div>
							</div>
							<div id="type-container"></div>
						</div>
						<div class="form-actions">
							<div class="row">
								<div class="col-md-offset-3 col-md-9">
									<button type="submit" name="edit" value="Edit" class="btn btn-circle blue">Edit</button>
								</div>
							</div>
						</div>
					<?= form_close() ?>
					<!-- END FORM-->
				</div>
			</div>
		</div>
	</div>
	<!-- END PAGE CONTENT INNER -->
</div>

<script type="text/javascript">
	var num_sub = 0;

	$(document).ready(function() {
		$('#type').on('change', function() {
			let type = $('#type').val();
			if (type === 'range') {
				$('#type-container').html('')
					.html('<div class="form-group"><label class="control-label col-md-3 col-sm-3 col-xs-12" for="type"></label><div class="col-md-3 col-sm-3 col-xs-12" for="type"><button onclick="add_range();" type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add</button></div></div>');
					add_range();
			} else if (type === 'option') {
				$('#type-container').html('')
					.html('<div class="form-group"><label class="control-label col-md-3 col-sm-3 col-xs-12" for="type"></label><div class="col-md-3 col-sm-3 col-xs-12" for="type"><button onclick="add_option();" type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add</button></div></div>');
					add_option();
			} else if (type === 'criteria') {
				$('#type-container').html('')
					.html('<div class="form-group"><label class="control-label col-md-3 col-sm-3 col-xs-12" for="type"></label><div class="col-md-3 col-sm-3 col-xs-12" for="type"><button onclick="add_subcriteria();" type="button" class="btn btn-success"><i class="fa fa-plus"></i> Add</button></div></div>'); // tambah subcriteria
					add_subcriteria();
			}
		});

		let idx;
		<?php if ($kriteria->type == 'criteria'): ?>
			<?php  
				$details = json_decode($kriteria->details);
				foreach ($details as $key => $value):
			?>
				add_subcriteria_edit('<?= $key ?>', '<?= $value->label ?>', '<?= $value->weight ?>');
				<?php  
					$values = $value->values;
					foreach ($values as $k => $v):
				?>
					idx = add_subcriteria_values_edit('<?= $key ?>', '<?= $v->label ?>', '<?= $v->key ?>');
					<?php foreach ($v->values as $kk => $vv): ?>
						add_subcriteria_values_values_edit('<?= $v->key ?>', idx, '<?= $kk ?>', '<?= $vv ?>');
					<?php endforeach; ?>
				<?php endforeach; ?>
			<?php endforeach; ?>
		<?php endif; ?>
	});

	function add_subcriteria_edit(key, label, weight) {
		$('#type-container').append('<div><div id="' + key + '" class="form-group">' +
			'<label class="control-label col-md-1 col-sm-1 col-xs-12" for="type"></label>' +
			'<div class="col-md-2 col-sm-2 col-xs-6">' +
				'<input type="text" name="subcriteria_label[]" value="' + label + '" required="required" class="form-control col-md-7 col-xs-12" placeholder="Label">' +
			'</div>' +
			'<div class="col-md-2 col-sm-2 col-xs-6">' +
				'<input type="text" name="subcriteria_key[]" value="' + key + '" required="required" class="form-control col-md-7 col-xs-12" placeholder="Key">' +
			'</div>' +
			'<div class="col-md-2 col-sm-2 col-xs-6">' +
				'<input type="number" name="subcriteria_weight[]" value="' + weight + '" required="required" min="0" step="any" class="form-control col-md-7 col-xs-12" placeholder="Weight">' +
				'<input type="hidden" value="' + num_sub + '" id="idx-' + num_sub + '"/>' +
				'<input type="hidden" value="' + num_sub + '" id="val-' + num_sub + '"/>' +
			'</div>' +
			'<div class="col-md-3 col-sm-3 col-xs-6">' +
				'<button onclick="add_subcriteria_values(this);" type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add</button>' + 
				'<button onclick="$(this).parent().parent().parent().remove();" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>' + 
			'</div>' +
		'</div><div id="sub-container-subcriteria-' + num_sub + '"></div></div>'); // tambah subsubcriteria
		num_sub++;
	}

	function add_subcriteria_values_edit(id, label, key) {
		let idx = $('#' + id).children().eq(3).children()[1].value;
		let sub = $('#val-' + idx).parent().parent().children().eq(3).children()[2].value;
		$('#val-' + idx).parent().parent().children().eq(3).children().eq(2).val(Number(sub) + 1);
		$('#sub-container-subcriteria-' + idx).append('<div id="' + key + '_id" class="form-group">' +
			'<label class="control-label col-md-3 col-sm-3 col-xs-12" for="type"></label>' +
			'<div class="col-md-2 col-sm-2 col-xs-6">' +
				'<input type="text" name="' + idx + '-option_label[]" value="' + label + '" required="required" class="form-control col-md-7 col-xs-12" placeholder="Label">' +
			'</div>' +
			'<div class="col-md-2 col-sm-2 col-xs-6">' +
				'<input type="text" name="' + idx + '-option_key[]" value="' + key + '" id="' + idx + '-option_key" required="required" class="form-control col-md-7 col-xs-12" placeholder="Key">' +
				'<input type="hidden" value="' + sub + '" id="idx-idx-' + sub + '"/>' +
			'</div>' +
			'<div class="col-md-2 col-sm-2 col-xs-6">' +
				'<button onclick="add_subcriteria_values_values(this, ' + idx + ');" type="button" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Add</button>' + 
				'<button onclick="$(this).parent().parent().remove();" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</button></div>' +
		'</div><div id="sub-value-container-' + idx + '-' + sub + '"></div>');
		return idx;
	}

	function add_subcriteria_values_values_edit(id, idx, label, value) {
		let sub = $('#' + id + '_id').children().eq(2).children()[1].value;
		$('#sub-value-container-' + idx + '-' + sub).append('<div class="form-group">' +
			'<label class="control-label col-md-4 col-sm-4 col-xs-12" for="type"></label>' +
			'<div class="col-md-2 col-sm-2 col-xs-6">' +
				'<input type="text" name="' + idx + '-' + sub + '-sub_label[]" value="' + label + '" required="required" class="form-control col-md-7 col-xs-12" placeholder="Label">' +
			'</div>' +
			'<div class="col-md-2 col-sm-2 col-xs-6">' +
				'<input type="number" name="' + idx + '-' + sub + '-sub_value[]" value="' + value + '" required="required" min="0" step="any" class="form-control col-md-7 col-xs-12" placeholder="Value">' +
			'</div>' +
			'<div class="col-md-1 col-sm-1 col-xs-6"><button onclick="$(this).parent().parent().remove();" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</button></div>' +
		'</div>');
	}

	function add_range() {
		$('#type-container').append('<div class="form-group">' +
			'<label class="control-label col-md-1 col-sm-1 col-xs-12" for="type"></label>' +
			'<div class="col-md-2 col-sm-2 col-xs-6">' +
				'<input type="text" name="range_label[]" required="required" class="form-control col-md-7 col-xs-12" placeholder="Label">' +
			'</div>' +
			'<div class="col-md-2 col-sm-2 col-xs-6">' +
				'<input type="number" name="range_min[]" required="required" min="0" step="any" class="form-control col-md-7 col-xs-12" placeholder="Min">' +
			'</div>' +
			'<div class="col-md-2 col-sm-2 col-xs-6">' +
				'<input type="number" name="range_max[]" required="required" min="0" step="any" class="form-control col-md-7 col-xs-12" placeholder="Max">' +
			'</div>' +
			'<div class="col-md-2 col-sm-2 col-xs-6">' +
				'<input type="number" name="range_value[]" required="required" min="0" step="any" class="form-control col-md-7 col-xs-12" placeholder="Value">' +
			'</div>' +
			'<div class="col-md-1 col-sm-1 col-xs-6"><button onclick="$(this).parent().parent().remove();" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</button></div>' +
		'</div>');
	}

	function add_option() {
		$('#type-container').append('<div class="form-group">' +
			'<label class="control-label col-md-3 col-sm-3 col-xs-12" for="type"></label>' +
			'<div class="col-md-2 col-sm-2 col-xs-6">' +
				'<input type="text" name="option_label[]" required="required" class="form-control col-md-7 col-xs-12" placeholder="Label">' +
			'</div>' +
			'<div class="col-md-2 col-sm-2 col-xs-6">' +
				'<input type="number" name="option_value[]" required="required" min="0" step="any" class="form-control col-md-7 col-xs-12" placeholder="Value">' +
			'</div>' +
			'<div class="col-md-1 col-sm-1 col-xs-6"><button onclick="$(this).parent().parent().remove();" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</button></div>' +
		'</div>');
	}

	// 3x sub
	function add_subcriteria() {
		$('#type-container').append('<div><div class="form-group">' +
			'<label class="control-label col-md-1 col-sm-1 col-xs-12" for="type"></label>' +
			'<div class="col-md-2 col-sm-2 col-xs-6">' +
				'<input type="text" name="subcriteria_label[]" required="required" class="form-control col-md-7 col-xs-12" placeholder="Label">' +
			'</div>' +
			'<div class="col-md-2 col-sm-2 col-xs-6">' +
				'<input type="text" name="subcriteria_key[]" required="required" class="form-control col-md-7 col-xs-12" placeholder="Key">' +
			'</div>' +
			'<div class="col-md-2 col-sm-2 col-xs-6">' +
				'<input type="number" name="subcriteria_weight[]" required="required" min="0" step="any" class="form-control col-md-7 col-xs-12" placeholder="Weight">' +
				'<input type="hidden" value="' + num_sub + '" id="idx-' + num_sub + '"/>' +
				'<input type="hidden" value="' + num_sub + '" id="val-' + num_sub + '"/>' +
			'</div>' +
			'<div class="col-md-3 col-sm-3 col-xs-6">' +
				'<button onclick="add_subcriteria_values(this);" type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Add</button>' + 
				'<button onclick="$(this).parent().parent().parent().remove();" type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>' + 
			'</div>' +
		'</div><div id="sub-container-subcriteria-' + num_sub + '"></div></div>'); // tambah subsubcriteria
		num_sub++;
	}

	// cth: merk_tempat_tidur, ukuran_tempat_tidur
	function add_subcriteria_values(obj) {
		let idx = $(obj).parent().parent().children().eq(3).children()[1].value;
		let sub = $('#val-' + idx).parent().parent().children().eq(3).children()[2].value;
		$('#val-' + idx).parent().parent().children().eq(3).children().eq(2).val(Number(sub) + 1);
		$('#sub-container-subcriteria-' + idx).append('<div class="form-group">' +
			'<label class="control-label col-md-3 col-sm-3 col-xs-12" for="type"></label>' +
			'<div class="col-md-2 col-sm-2 col-xs-6">' +
				'<input type="text" name="' + idx + '-option_label[]" required="required" class="form-control col-md-7 col-xs-12" placeholder="Label">' +
			'</div>' +
			'<div class="col-md-2 col-sm-2 col-xs-6">' +
				'<input type="text" name="' + idx + '-option_key[]" id="' + idx + '-option_key" required="required" class="form-control col-md-7 col-xs-12" placeholder="Key">' +
				'<input type="hidden" value="' + sub + '" id="idx-idx-' + sub + '"/>' +
			'</div>' +
			'<div class="col-md-2 col-sm-2 col-xs-6">' +
				'<button onclick="add_subcriteria_values_values(this, ' + idx + ');" type="button" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Add</button>' + 
				'<button onclick="$(this).parent().parent().remove();" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</button></div>' +
		'</div><div id="sub-value-container-' + idx + '-' + sub + '"></div>');
	}

	// cth: Olympic, Napolly
	function add_subcriteria_values_values(obj, idx) {
		let sub = $(obj).parent().parent().children().eq(2).children()[1].value;
		$('#sub-value-container-' + idx + '-' + sub).append('<div class="form-group">' +
			'<label class="control-label col-md-4 col-sm-4 col-xs-12" for="type"></label>' +
			'<div class="col-md-2 col-sm-2 col-xs-6">' +
				'<input type="text" name="' + idx + '-' + sub + '-sub_label[]" required="required" class="form-control col-md-7 col-xs-12" placeholder="Label">' +
			'</div>' +
			'<div class="col-md-2 col-sm-2 col-xs-6">' +
				'<input type="number" name="' + idx + '-' + sub + '-sub_value[]" required="required" min="0" step="any" class="form-control col-md-7 col-xs-12" placeholder="Value">' +
			'</div>' +
			'<div class="col-md-1 col-sm-1 col-xs-6"><button onclick="$(this).parent().parent().remove();" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</button></div>' +
		'</div>');
	}
</script>