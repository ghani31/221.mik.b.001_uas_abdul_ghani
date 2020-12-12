<?php
include 'koneksi.php';
//ambil field
$id = $_GET['id'];
$hasil = $koneksi->query("DELETE FROM siswa
WHERE siswa.id = $id");
header('location:siswa.php');