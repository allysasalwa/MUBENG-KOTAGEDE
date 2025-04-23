<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "app_kotagede";

$koneksi = mysqli_connect($host,$user,$pass,$db);
if(!$koneksi){
    die('Gagal terkoneksi');
}else{
    echo"KOneksi berhasil";
}