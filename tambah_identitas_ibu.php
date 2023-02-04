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

if($op == 'delete'){
    $id         = $_GET['id'];
    $sql1       = "delete from ibu_hamil where id = '$id'";
    $q1         = mysqli_query($koneksi,$sql1);
    if($q1){
        $sukses = "BERHASIL MELAKUKAN DELETE DATA";
    }else{
        $error  = "GAGAL MELAKUKAN DELETE DATA";
    }
}
if ($op == 'edit') {
    $id           = $_GET['id'];
    $sql1         = "select * from ibu_hamil where id = '$id'";
    $q1           = mysqli_query($koneksi, $sql1);
    $r1           = mysqli_fetch_array($q1);
    $nik          = $r1['nik'];
    $nama_ibu     = $r1['nama_ibu'];
    $tgl          = $r1['tgl'];
    $tempat_lahir = $r1['tempat_lahir'];
    $pekerjaan_ibu= $r1['pekerjaan_ibu'];
    $nama_suami   = $r1['nama_suami'];
    $alamat       = $r1['alamat'];
    $agama        = $r1['agama'];
    $pekerjaan    = $r1['pekerjaan'];

    if ($nik == '') {
        $error = "Data Tidak Ditemukan";
    }
}
if (isset($_POST['simpan'])) { //untuk create
    $nik          = $_POST['nik'];
    $nama_ibu     = $_POST['nama_ibu'];
    $tgl          = $_POST['tgl'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $pekerjaan_ibu= $_POST['pekerjaan_ibu'];
    $nama_suami   = $_POST['nama_suami'];
    $alamat       = $_POST['alamat'];
    $agama        = $_POST['agama'];
    $pekerjaan    = $_POST['pekerjaan'];

    if ($nik && $nama_ibu && $tgl && $tempat_lahir && $pekerjaan_ibu && $nama_suami && $alamat && $agama && $pekerjaan) {
        if ($op == 'edit') { //untuk update
            $sql1       = "update ibu_hamil set nik = '$nik', nama_ibu = '$nama_ibu', tgl = '$tgl', tempat_lahir = '$tempat_lahir', pekerjaan_ibu = '$pekerjaan_ibu', 
            nama_suami = '$nama_suami', alamat = '$alamat', agama='$agama', pekerjaan='$pekerjaan' where id = '$id'";
            $q1         = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "DATA BERHASIL DIUPDATE";
            } else {
                $error  = "DATA GAGAL DIUPDATE";
            }
        } else { //untuk insert
            $sql1   = "insert into ibu_hamil(nik, nama_ibu, tgl, tempat_lahir, pekerjaan_ibu, nama_suami, alamat, agama, pekerjaan) values 
            ('$nik', '$nama_ibu', '$tgl', '$tempat_lahir', '$pekerjaan_ibu', '$nama_suami', '$alamat','$agama', '$pekerjaan')";
            $q1     = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses     = "SELAMAT, BERHASIL MEMASUKKAN DATA IDENTITAS IBU BARU";
            } else {
                $error      = "MAAF, GAGAL MEMASUKKAN DATA BARU";
            }
        }
    } else {
        $error = "Silahkan Memasukkan Semua Data dengan Benar";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tambah Data Identitas Ibu</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
        <tr>
			<img src="header.png" width="100%" height="50%">
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
        <a href="ibu_hamil.php" button class="btn btn-outline-primary"  type="button"><i class="fa-sharp fa-solid fa-eye"><b> LIHAT DATA IDENTITAS IBU </b></i></a>
    </div><br>
        <!-- untuk memasukkan data -->
        <div class="card">
            <div class="card-header">
            <h3><b>FORMULIR MENAMBAH DATA IDENTITAS IBU HAMIL</b></h3>
            </div>
            <div class="card-body">
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php
                    header("refresh:2;url=ibu_hamil.php");//5 : detik
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                <div class="alert alert-success" role="alert">
                     <?php echo $sukses ?>
                </div>
                <?php
                    header("refresh:2;url=ibu_hamil.php");
                }
                ?>
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nik" name="nik" value="<?php echo $nik ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama_ibu" class="col-sm-2 col-form-label">Nama Ibu Hamil</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="<?php echo $nama_ibu ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tgl" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tgl" name="tgl" value="<?php echo $tgl ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?php echo $tempat_lahir ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pekerjaan_ibu" class="col-sm-2 col-form-label">Pekerjaan Ibu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" value="<?php echo $pekerjaan_ibu ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama_suami" class="col-sm-2 col-form-label">Nama Suami</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_suami" name="nama_suami" value="<?php echo $nama_suami ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="agama" id="agama">
                                <option value="">- Pilih Agama -</option>
                                <option value="Islam" <?php if ($agama == "Islam") echo "selected" ?>>Islam</option>
                                <option value="Kristen" <?php if ($agama == "Kristen") echo "selected" ?>>Kristen</option>
                                <option value="Katholik" <?php if ($agama == "Katholik") echo "selected" ?>>Katholik</option>
                                <option value="Hindu" <?php if ($agama == "Hindu") echo "selected" ?>>Hindu</option>
                                <option value="Buddha" <?php if ($agama == "Buddha") echo "selected" ?>>Buddha</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pekerjaan" class="col-sm-2 col-form-label">Pekerjaan Suami</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?php echo $pekerjaan ?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>
