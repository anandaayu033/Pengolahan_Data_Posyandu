<?php 
session_start(); 
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA IDENTITAS ANAK DI POSYANDU</title>
</head>

<body>
	
	<center>
		<h2>DATA LAPORAN IDENTITAS ANAK</h2>
	</center>

 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>NIK Anak</th>
			<th>Nama Lengkap</th>
            <th>Tanggal Lahir</th>
            <th>Tempat Lahir</th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Jenis Kelamin</th>
            <th>Nama Ibu</th>
            <th>Nama Ayah</th>
            <th>Pekerjaan Ayah</th>
		</tr>
        
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from anak");
		while($anak = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $anak['nik']; ?></td>
			<td><?php echo $anak['nama']; ?></td>
			<td><?php echo $anak['tgl']; ?></td>
            <td><?php echo $anak['tempat_lahir']; ?></td>
            <td><?php echo $anak['alamat']; ?></td>
            <td><?php echo $anak['agama']; ?></td>
            <td><?php echo $anak['jk']; ?></td>
            <td><?php echo $anak['ibu']; ?></td>
            <td><?php echo $anak['ayah']; ?></td>
            <td><?php echo $anak['perayah']; ?></td>
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