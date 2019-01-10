<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Absensi_Guru.xls");
?>
<center>
	<h3>Absensi Guru Bulan Januari</h3>
</center>
<hr>
<table width="100%">
	<thead>
		<tr>
			<th>NIP</th>
			<th>Nama Guru</th>
			<?php for ($i = 0; $i < 32; $i++) {
				echo '<th>'.$i.'-01-2019</th>';
			} ?>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>009</td>
			<td>Azhary</td>
			<?php for ($i = 0; $i < 32; $i++) {
				echo '<td>'.$i.'-01-2019</td>';
			} ?>
		</tr>
		<tr>
			<td>009</td>
			<td>Azhary</td>
			<?php for ($i = 0; $i < 32; $i++) {
				echo '<td>'.$i.'-01-2019</td>';
			} ?>
		</tr>
	</tbody>
</table>