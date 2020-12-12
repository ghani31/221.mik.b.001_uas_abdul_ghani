<?php  

include 'koneksi.php';
//ambil field
$nim = $_POST['nim'];
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

$hasil = $koneksi->query("INSERT INTO siswa VALUES ('', 
	'nim', 
	'$nama_lengkap', 
	'$agama', 
	'$jk', 
	'$jurusan',
	'$nama_ayah',
	'$nama_ibu',
	'$alamat',
	'$asal_sekolah',
	'$telepon',
	'$telepon_ortu')");

header('Location:siswa.php');


?>
