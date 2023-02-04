<?php 
session_start(); 
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA PEMERIKSAAN ANAK DI POSYANDU</title>
</head>

<body>
 
	<center>
 
		<h2>DATA LAPORAN DATA PEMERIKSAAN ANAK</h2>
	</center>

 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>NO PEMERIKSAAN</th>
			<th>Nama Lengkap ANAK</th>
            <th>BERAT BADAN</th>
            <th>TINGGI BADAN</th>
            <th>KELUHAN</th>
            <th>DIAGNOSA</th>
            <th>SARAN</th>
		</tr>
        
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from data_anak");
		while($anak = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $anak['no_pemeriksaan']; ?></td>
			<td><?php echo $anak['nama']; ?></td>
			<td><?php echo $anak['berat_badan']; ?></td>
            <td><?php echo $anak['tinggi_badan']; ?></td>
            <td><?php echo $anak['keluhan']; ?></td>
            <td><?php echo $anak['diagnosa']; ?></td>
            <td><?php echo $anak['saran']; ?></td>
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