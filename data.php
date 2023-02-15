<?php 
session_start(); 
include "koneksi.php";

$no_pemeriksaan            = "";
$nama           = "";
$berat_badan           = "";
$tinggi_badan   = "";
$keluhan         = "";
$diagnosa          = "";
$saran            = "";
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
    <title>Data Pemeriksaan Anak</title>
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
        <a href="tambah_data.php" button class="btn btn-outline-primary"  type="button"><i class="fa-solid fa-plus"><b></i>TAMBAH DATA PEMERIKSAAN </b></i></a>
        <a href="cetak_laporan.php" button class="btn btn-outline-primary"  type="button" > <i class="fa-solid fa-print"></i><b> CETAK LAPORAN PEMERIKSAAN ANAK </b></i></a>
    </div><br>
        <!-- untuk mengeluarkan data -->
        <div class="card">
            <div class="card-header text-white bg-primary">
                <b>DATA PEMERIKSAAN ANAK</b>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">No Pemeriksaan</th>
                            <th scope="col">Nama Anak</th>
                            <th scope="col">Berat Badan</th>
                            <th scope="col">Tinggi Badan</th>
                            <th scope="col">Keluhan</th>
                            <th scope="col">Diagnosa</th>
                            <th scope="col">Saran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql2   = "select * from data_anak order by id desc";
                        $q2     = mysqli_query($koneksi, $sql2);
                        $urut   = 1;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id             = $r2['id'];
                            $no_pemeriksaan            = $r2['no_pemeriksaan'];
                            $nama           = $r2['nama'];
                            $berat_badan           = $r2['berat_badan'];
                            $tinggi_badan   = $r2['tinggi_badan'];
                            $keluhan        = $r2['keluhan'];
                            $diagnosa          = $r2['diagnosa'];
                            $saran   = $r2['saran'];
                        ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $no_pemeriksaan ?></td>
                                <td scope="row"><?php echo $nama ?></td>
                                <td scope="row"><?php echo $berat_badan ?></td>
                                <td scope="row"><?php echo $tinggi_badan ?></td>
                                <td scope="row"><?php echo $keluhan ?></td>
                                <td scope="row"><?php echo $diagnosa ?></td>
                                <td scope="row"><?php echo $saran ?></td>
                                <td scope="row">
                                    <a href="tambah_data.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button></a>
                                    <a href="tambah_data.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button></a>            
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