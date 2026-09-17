<?php 

$host = "localhost";
$user = "root";
$password = "";
$database = "kelas_pplg_db";

$koneksi = mysqli_connect($host, $user, $password, $database);
if(!$koneksi){
    die ("Koneksi tidak terhubung". mysqli_connect_error());
}


?>