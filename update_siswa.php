<?php  

include 'koneksi.php';
//ambil field
$id = $_POST['id'];
$nama_lengkap = $_POST['nama_lengkap'];
$agama = $_POST['agama'];
$jk = $_POST['jk'];
$jurusan = $_POST['jurusan'];
$nama_ayah = $_POST['nama_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$alamat = $_POST['alamat'];
$asal_sekolah = $_POST['asal_sekolah'];
$telepon = $_POST['telepon'];
$telepon_ortu = $_POST['telepon_ortu'];

$hasil = $koneksi->query("UPDATE siswa SET
siswa.nim = '$nim',
siswa.nama_lengkap = '$nama_lengkap',
siswa.agama = '$agama',
siswa.jk = '$jk',
siswa.jurusan = '$jurusan',
siswa.nama_ayah = '$nama_ayah',
siswa.nama_ibu = '$nama_ibu',
siswa.alamat = '$alamat',
siswa.asal_sekolah = '$asal_sekolah',
siswa.telepon = '$telepon',
siswa.telepon_ortu = '$telepon_ortu'
where siswa.id = $id");
header('location:siswa.php');

?>