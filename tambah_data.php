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

if($op == 'delete'){
    $id         = $_GET['id'];
    $sql1       = "delete from data_anak where id = '$id'";
    $q1         = mysqli_query($koneksi,$sql1);
    if($q1){
        $sukses = "Berhasil Hapus Data";
    }else{
        $error  = "Gagal Melakukan Delete Data";
    }
}
if ($op == 'edit') {
    $id         = $_GET['id'];
    $sql1       = "select * from data_anak where id = '$id'";
    $q1         = mysqli_query($koneksi, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $no_pemeriksaan        = $r1['no_pemeriksaan'];
    $nama       = $r1['nama'];
    $berat_badan       = $r1['berat_badan'];
    $tinggi_badan   = $r1['tinggi_badan'];
    $keluhan     = $r1['keluhan'];
    $diagnosa      = $r1['diagnosa'];
    $saran      = $r1['saran'];

    if ($no_pemeriksaan == '') {
        $error = "Data Tidak Ditemukan";
    }
}
if (isset($_POST['simpan'])) { //untuk create
    $no_pemeriksaan        = $_POST['no_pemeriksaan'];
    $nama       = $_POST['nama'];
    $berat_badan       = $_POST['berat_badan'];
    $tinggi_badan   = $_POST['tinggi_badan'];
    $keluhan     = $_POST['keluhan'];
    $diagnosa   = $_POST['diagnosa'];
    $saran   = $_POST['saran'];

    if ($no_pemeriksaan && $nama && $berat_badan && $tinggi_badan && $keluhan && $diagnosa && $saran ) {
        if ($op == 'edit') { //untuk update
            $sql1       = "update data_anak set no_pemeriksaan = '$no_pemeriksaan',nama='$nama',berat_badan='$berat_badan', tinggi_badan= '$tinggi_badan',keluhan='$keluhan'
            ,diagnosa='$diagnosa',saran='$saran' where id = '$id'";
            $q1         = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Data Berhasil Diupdate";
            } else {
                $error  = "Data Gagal Diupdate";
            }
        } else { //untuk insert
            $sql1   = "insert into data_anak(no_pemeriksaan,nama,berat_badan,tinggi_badan,keluhan,diagnosa,saran) values 
            ('$no_pemeriksaan','$nama','$berat_badan','$tinggi_badan','$keluhan','$diagnosa','$saran')";
            $q1     = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses     = "SELAMAT, BERHASIL MEMASUKKAN DATA PEMERIKSAAN ANAK BARU";
            } else {
                $error      = "Gagal Memasukkan Data";
            }
        }
    } else {
        $error = "Silakan Masukkan Semua Data dengan Benar";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tambah Data Identitas</title>
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
          <a class="nav-link" href="#"><i class="fa-solid fa-person-dress"> IDENTITAS IBU</i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-stethoscope"> PEMERIKSAAN IBU</i></a>
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
        <a href="data.php" button class="btn btn-outline-primary"  type="button"><i class="fa-sharp fa-solid fa-eye"><b> LIHAT DATA PEMERIKSAAN ANAK </b></i></a>
    </div><br>
    <div class="mx-auto">
        <!-- untuk memasukkan data -->
        <div class="card">
            <div class="card-header text-white bg-primary">
                FORMULIR MENAMBAH DATA PEMERIKSAAN ANAK
            </div>
            <div class="card-body">
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php
                    header("refresh:5;url=data.php");//5 : detik
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                <div class="alert alert-success" role="alert">
                     <?php echo $sukses ?>
                </div>
                <?php
                    header("refresh:5;url=data.php");
                }
                ?>
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="no_pemeriksaan" class="col-sm-2 col-form-label">No Pemeriksaan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="no_pemeriksaan" name="no_pemeriksaan" value="<?php echo $no_pemeriksaan ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="berat_badan" class="col-sm-2 col-form-label">Berat badan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tgl" name="berat_badan" value="<?php echo $berat_badan ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tinggi_badan" class="col-sm-2 col-form-label">Tinggi badan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tinggi_badanr" name="tinggi_badan" value="<?php echo $tinggi_badan ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="keluhan" class="col-sm-2 col-form-label">Keluhan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="keluhan" name="keluhan" value="<?php echo $keluhan ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="diagnosa" class="col-sm-2 col-form-label">Diagnosa</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="diagnosa" name="diagnosa" value="<?php echo $diagnosa ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="saran" class="col-sm-2 col-form-label">Saran</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="saran" name="saran" value="<?php echo $saran ?>">
                        </div>
                        <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>
