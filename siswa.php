<?php
include 'koneksi.php';
$peserta = $koneksi->query("SELECT* FROM siswa");
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- link untuk loading bootstrap.css -->
<link rel="stylesheet" href="asset/css/bootstrap.min.css">
<title>Pendaftaran Siswa Baru</title>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h1>Pendaftaran Siswa Baru</h1>
<div class="row">
<div class="col-md-12">
<h1>Daftar Peserta</h1>
<p>
<a href="logout.php" class="btn btn-primary">Logout</a>
<a href="tambah_siswa.php" class="btn btn-primary">Tambah</a>
<!-- <a href="cetak_peserta.php" class="btn btn-primary" target="_blank"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Cetak</a>
<a href="cetak_peserta_xls.php" class="btn btn-primary"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Cetak XLS</a> -->
</p>
<table class="table table-hover table-bordered">
<thead>
<tr>
<th class="text-center">No</th>
<th class="text-center">Nim</th>
<th>Nama siswa</th>
<th class="text-center">Agama</th>
<th class="text-center">JK</th>
<th>Jurusan</th>
<th>Nama Ayah</th>
<th>Nama Ibu</th>
<th>Alamat</th>
<th>Asal Sekolah</th>
<th>Telepon</th>
<th>Telepon Ortu</th>
<th class="text-center">Aksi</th>
</tr>
</thead>
<tbody>
<?php $no = 1 ?>
<?php foreach ($peserta as $row) : ?>
<tr>
<td class="text-center"><?php echo $no++ ?></td>
<td><?php echo $row['nim'] ?></td>
<td><?php echo $row['nama_lengkap'] ?></td>
<td class="text-center"><?php echo $row['agama'] ?></td>
<td class="text-center"><?php echo $row['jk'] == 'L' ? 'Laki-laki' : 'Perempuan' ?></td>
<td><?php echo $row['jurusan'] ?></td>
<td><?php echo $row['nama_ayah'] ?></td>
<td><?php echo $row['nama_ibu'] ?></td>
<td><?php echo $row['alamat'] ?></td>
<td><?php echo $row['asal_sekolah'] ?></td>
<td><?php echo $row['telepon'] ?></td>
<td><?php echo $row['telepon_ortu'] ?></td>
<td class="text-center">
<a href="edit_siswa.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
<a href="delete_siswa.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?')">Hapus</a>
</td>
</tr>
<?php  endforeach; ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<!-- script untuk loading jquery.min.js -->
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>
</body>
</html>