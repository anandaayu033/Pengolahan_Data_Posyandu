<?php 
session_start(); 
include "koneksi.php";

$nik            = "";
$nama_ibu       = "";
$tgl            = "";
$tempat_lahir   = "";
$pekerjaan_ibu  = "";
$nama_suami     = "";
$alamat         = "";
$agama          = "";
$pekerjaan      = "";
$sukses         = "";
$error          = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Identitas Ibu</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
        <tr>
			<img src="img/header.png" width="100%" height="50%">
		</tr>

	<!-- header -->

	<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><i class="fa-solid fa-person-breastfeeding"> SIPD</i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="nav justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><i class="fa-solid fa-house"> Home </i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="identitas_anak.php"><i class="fa-solid fa-child"> IDENTITAS ANAK</i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="data.php"><i class="fa-solid fa-book-medical"> PEMERIKSAAN ANAK</i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ibu_hamil.php"><i class="fa-solid fa-person-dress"> IDENTITAS IBU</i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="data_ibuhamil.php"><i class="fa-solid fa-stethoscope"> PEMERIKSAAN IBU</i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php"><i class="fa-solid fa-right-from-bracket">LOGOUT</i></a>
        </li>
      </ul>
      </div>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
    </form>
        </div>
    </nav>
        </nav>
        <br>
    <div class>
        <a href="tambah_identitas_ibu.php" button class="btn btn-outline-primary"  type="button"><i class="fa-solid fa-plus"><b></i> TAMBAH DATA IDENTITAS IBU </b></i></a>
        <a href="cetak_laporan_ibuhamil.php" button class="btn btn-outline-primary"  type="button" > <i class="fa-solid fa-print"></i><b> CETAK LAPORAN IDENTITAS </b></i></a>
    </div><br>

        <!-- untuk mengeluarkan data -->
        <div class="card">
            <div class="card-header bg-black bg-light">
            <h3><b>DATA IDENTITAS IBU</b></h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">NIK</th>
                            <th scope="col">Nama Ibu Hamil</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Pekerjaan Ibu</th>
                            <th scope="col">Nama Suami</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Pekerjaan Suami</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql2   = "select * from ibu_hamil order by id desc";
                        $q2     = mysqli_query($koneksi, $sql2);
                        $urut   = 1;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id             = $r2['id'];
                            $nik            = $r2['nik'];
                            $nama_ibu       = $r2['nama_ibu'];
                            $tgl            = $r2['tgl'];
                            $tempat_lahir   = $r2['tempat_lahir'];
                            $pekerjaan_ibu  = $r2['pekerjaan_ibu'];
                            $nama_suami     = $r2['nama_suami'];
                            $alamat         = $r2['alamat'];
                            $agama          = $r2['agama'];
                            $pekerjaan      = $r2['pekerjaan'];
                        ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $nik ?></td>
                                <td scope="row"><?php echo $nama_ibu ?></td>
                                <td scope="row"><?php echo $tgl ?></td>
                                <td scope="row"><?php echo $tempat_lahir ?></td>
                                <td scope="row"><?php echo $pekerjaan_ibu ?></td>
                                <td scope="row"><?php echo $nama_suami ?></td>
                                <td scope="row"><?php echo $alamat ?></td>
                                <td scope="row"><?php echo $agama ?></td>
                                <td scope="row"><?php echo $pekerjaan ?></td>
                                <td scope="row">
                                    <a href="tambah_identitas_ibu.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button></a>
                                    <a href="tambah_identitas_ibu.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></a>            
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
</body>
</html>
