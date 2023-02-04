<?php 
session_start(); 
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA IDENTITAS IBU HAMIL DI POSYANDU</title>
</head>

<body>
	
	<center>
		<h2>DATA LAPORAN IDENTITAS IBU HAMIL</h2>
	</center>

 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>NIK</th>
			<th>Nama Ibu Hamil</th>
            <th>Tanggal Lahir</th>
            <th>Tempat Lahir</th>
            <th>Pekerjaan Ibu</th>
            <th>NAMA SUAMI</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Pekerjaan Suami</th>
		</tr>
        
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from ibu_hamil");
		while($ibu_hamil = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $ibu_hamil['nik']; ?></td>
			<td><?php echo $ibu_hamil['nama_ibu']; ?></td>
			<td><?php echo $ibu_hamil['tgl']; ?></td>
            <td><?php echo $ibu_hamil['tempat_lahir']; ?></td>
            <td><?php echo $ibu_hamil['pekerjaan_ibu']; ?></td>
            <td><?php echo $ibu_hamil['nama_suami']; ?></td>
            <td><?php echo $ibu_hamil['alamat']; ?></td>
            <td><?php echo $ibu_hamil['agama']; ?></td>
            <td><?php echo $ibu_hamil['pekerjaan']; ?></td>
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