<div class="page-content">

	<!-- END PAGE HEAD -->
	<!-- BEGIN PAGE CONTENT INNER -->
	<div class="row margin-top-10">
		<div class="col-md-12">
			<div class="portlet box green">
				<div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase">Jadwal Pelajaran</span>
                                    </div>
                                    <div class="tools"> </div>
                                </div>
				<div class="portlet-body">
					<table class="table table-striped table-bordered table-hover " id="sample_1">
						<thead>
							<tr>
								<th>Senin</th>
								<th>Selasa</th>
								<th>Rabu</th>
								<th>Kamis</th>
								<th>Jumat</th>
								<th>Sabtu</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>BAHASA</td>
								<td>PENJASKES</td>
								<td>MTK</td>
								<td>MULOK</td>
								<td>AGAMA</td>
								<td>BAHASA</td>
							</tr>
							<tr>
								<td>BAHASA</td>
								<td>PENJASKES</td>
								<td>MTK</td>
								<td>MULOK</td>
								<td>AGAMA</td>
								<td>BAHASA</td>
							</tr>
							<tr>
								<td>BAHASA</td>
								<td>PENJASKES</td>
								<td>MTK</td>
								<td>MULOK</td>
								<td>AGAMA</td>
								<td>BAHASA</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<td colspan="5"></td>
								<td style="text-align: right;">
									<div class="tools">
										
									</div>
									<!-- <button class="btn btn-circle btn-success btn-sm">Cetak</button> -->
								</td>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			
		</div>
	</div>
	<!-- END PAGE CONTENT INNER -->
</div>

<script type="text/javascript">
	$(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    // { extend: 'copy'},
                    // {extend: 'csv'},
                    {extend: 'excel', title: 'Jadwal Pelajaran'},
                    // {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });
        });
</script>