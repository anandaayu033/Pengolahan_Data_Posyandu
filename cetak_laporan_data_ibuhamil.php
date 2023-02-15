<?php 
session_start(); 
include "koneksi.php";

?><!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA PEMERIKSAAN IBU HAMIL DI POSYANDU</title>
</head>

<body>
 
	<center>
 
		<h2>DATA LAPORAN DATA PEMERIKSAAN IBU HAMIL</h2>
	</center>

 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>NO PEMERIKSAAN</th>
			<th>Nama IBU HAMIL</th>
            <th>Umur Ibu</th>
            <th>BERAT BADAN</th>
            <th>TINGGI BADAN</th>
            <th>TEKANAN DARAH</th>
			<th>USIA KANDUNGAN</th>
			<th>TINGGI FUNDUS</th>
			<th>DENYUT JANTUNG JANIN</th>
            <th>KELUHAN</th>
            <th>SARAN</th>
		</tr>
        
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from data_ibu_hamil");
		while($data_ibu_hamil = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data_ibu_hamil['no_pemeriksaan']; ?></td>
			<td><?php echo $data_ibu_hamil['nama_ibu']; ?></td>
            <td><?php echo $data_ibu_hamil['umur_ibu']; ?></td>
			<td><?php echo $data_ibu_hamil['berat_badan']; ?></td>
            <td><?php echo $data_ibu_hamil['tinggi_badan']; ?></td>
            <td><?php echo $data_ibu_hamil['tekanan_darah']; ?></td>
			<td><?php echo $data_ibu_hamil['usia_kandungan']; ?></td>
			<td><?php echo $data_ibu_hamil['tinggi_fundus']; ?></td>
			<td><?php echo $data_ibu_hamil['denyut_janin']; ?></td>
            <td><?php echo $data_ibu_hamil['keluhan']; ?></td>
            <td><?php echo $data_ibu_hamil['saran']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>
 
</body>
</html>