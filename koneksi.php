<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "db_posyandu";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { //koneksi
    die("Tidak bisa terkoneksi ke database");
}