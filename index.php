
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
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

	<!-- banner -->
	<section class="banner">
		<h2>SELAMAT DATANG ADMIN <?php echo $_SESSION['name'];?>&nbsp;DI WEBSITE PENDATAAN POSYANDU</h2><br>
	</section>

	<!-- about -->
	<section class="about">
		<div class="container">
			<h3>ABOUT</h3>
			<p>Pos Pelayanan Keluarga Terpadu merupakan wadah pemeliharaan kesehatan yang dilakukan dari, oleh dan untuk masyarakat yang dibimbing petugas terkait. (Departemen Kesehatan RI. 2006). 
        Posyandu adalah pusat kegiatan masyarakat dalam upaya pelayanan kesehatan dan keluarga berencana.(Effendi, Nasrul. 1998: 267) 
        <strong>Tujuan dari penyelenggaraan Posyandu yaitu Menurunkan angka kematian bayi (AKB), angka kematian ibu (ibu hamil), melahirkan dan nifas.Membudayakan NKBS
Meningkatkan peran serta masyarakat untuk mengembangkan kegiatan kesehatan dan KB serta kegiatan lainnya yang menunjang untuk tercapainya masyarakat sehat sejahtera.
Berfungsi sebagai wahana gerakan reproduksi keluarga sejahtera, gerakan ketahanan keluarga dan gerakan ekonomi keluarga sejahtera.
(Bagian Kependudukan dan Biostatistik FKM USU. 2007)</strong>

	<!-- service -->
	<section class="service">
		<div class="container">
			<h3>PROGRAM POSYANDU</h3>
			<div class="box">
				<div class="col-4">
					<div class="icon"><i class="fas fa-female"></i></div>
					<h4>KESEHATAN BUMIL</h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fas fa-child"></i></i></div>
					<h4>KESEHATAN ANAK</h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fas fa-user-shield"></i></div>
					<h4>KELUARGA BERENCANA</h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fas fa-universal-access"></i></i></div>
					<h4>IMUNISASI</h4>
				</div>
        		<div class="col-4">
					<div class="icon"><i class="fas fa-user-md"></i></div>
					<h4>PEMANTAUAN STATUS GIZI</h4>
				</div>
        		<div class="col-4">
					<div class="icon"><i class="fas fa-user-nurse"></i></div>
					<h4>PENCEGAHAN DAN PENANGGULANGAN DIARE</h4>
				</div>
			</div>
		</div>
	</section>

	<!-- footer -->
	<footer>
		<div class="container">
		</div>
	</footer>


	<script type="text/javascript">
		$(document).ready(function(){
			$(".bg-loader").hide();
		})
	</script>
</body>
</html>
<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>