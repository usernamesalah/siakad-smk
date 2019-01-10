<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Nilai_siswa_".$nama_siswa.".xls");
?>
<center>
	<h3>Daftar Nilai Siswa</h3>
</center>
<table width="50%" border="1">
	<thead>
		<tr>
			<th>Nama </th>
			<th>:</th>
			<th>Azhary</th>
		</tr>
		<tr>
			<th>Kelas </th>
			<th>:</th>
			<th></th>
		</tr>

		<tr>
			<th>Semester </th>
			<th>:</th>
			<th>Ganjil</th>
		</tr>
		<tr>
			<th>Tahun Ajaran </th>
			<th>:</th>
			<th>2019/2020</th>
		</tr>
	</thead>
</table>
<hr>
<table width="100%">
	<thead>
		<tr>
			<th>Mata Pelajaran</th>
			<th>Nilai Tugas</th>
			<th>Nilai UTS</th>
			<th>Nilai UAS</th>
			<th>Total</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td></td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
		<tr>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
			<td>data</td>
		</tr>
	</tbody>
</table>