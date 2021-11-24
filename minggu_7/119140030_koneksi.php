<?php
$password = "";
$nama_data_base="konosuba";

$koneksi= mysqli_connect("localhost", "root", $password, $nama_data_base);

if (!$koneksi){
    die('gagal melakukan koneksi');
}
?>