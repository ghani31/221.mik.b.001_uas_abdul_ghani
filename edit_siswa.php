<?php
include 'koneksi.php';
$id = $_GET['id'];
$hasil = $koneksi->query("select siswa.*
from siswa
where siswa.id = '$id'");
$siswa = mysqli_fetch_assoc($hasil);
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
<h1>Edit Peserta</h1>
<form action="update_siswa.php" method="POST">
<input type="hidden" name="id" value="<?php echo $siswa['id'] ?>">

<div class="form-group">
<label for="" class="control-label">NIM</label>
<input type="text" name="nim" value="<?php echo $siswa['nim'] ?>" placeholder="Masukkan NIM" class="form-control" required>
</div>

<div class="form-group">
<label for="" class="control-label">Nama Lengkap</label>
<input type="text" name="nama_lengkap" value="<?php echo $siswa['nama_lengkap'] ?>" placeholder="Masukkan Nama lengkap" class="form-control" required>
</div>

<div class="form-group">
<label for="" class="control-label">Agama</label>
<select name="agama" class="form-control">
<option value="" selected disabled>--- Pilih Agama ---</option>
<?php $all_agama = array('Islam', 'Kristen Katolik', 'Kristen Protestan', 'Hindu', 'Budha'); ?>
<?php foreach ($all_agama as $agama) { ?>
<option value="<?php echo $agama ?>" <?php echo $agama == $siswa['agama'] ? 'selected' : '' ?>>
<?php echo $agama ?>
</option>
<?php } ?>
</select>
</div>

<div class="form-group">
<label for="">Jenis Kelamin</label>
<div class="radio">
<label>
<input type="radio" name="jk" value="L" <?php echo $siswa['jk'] == 'L' ? 'checked' : '' ?>>Laki-laki
</label>
</div>
<div class="radio">
<label>
<input type="radio" name="jk" value="P" <?php echo $siswa['jk'] == 'P' ? 'checked' : '' ?>>Perempuan
</label>
</div>
</div>

<div class="form-group">
<label for="" class="control-label">Jurusan</label>
<select name="jurusan" class="form-control">
<option value="" selected disabled>--- Pilih Jurusan ---</option>
<?php $all_jurusan = array('Manajemen Informatika & Komputer', 'Teknisi Komputer', 'Akuntansi Komputer', 'Administrasi Perkantoran'); ?>
<?php foreach ($all_jurusan as $jurusan) { ?>
<option value="<?php echo $jurusan ?>" <?php echo $jurusan == $siswa['jurusan'] ? 'selected' : '' ?>>
<?php echo $jurusan ?>
</option>
<?php } ?>
</select>
</div>

<div class="form-group">
<label for="" class="control-label">Nama Ayah</label>
<input type="text" name="nama_ayah" value="<?php echo $siswa['nama_ayah'] ?>" placeholder="Masukkan Nama Ayah" class="form-control" required>
</div>

<div class="form-group">
<label for="" class="control-label">Nama Ibu</label>
<input type="text" name="nama_ibu" value="<?php echo $siswa['nama_ibu'] ?>" placeholder="Masukkan Nama lengkap" class="form-control" required>
</div>

<div class="form-group">
<label for="" class="control-label">Alamat</label>
<input type="text" name="alamat" value="<?php echo $siswa['alamat'] ?>" placeholder="Masukkan Alamat Lengkap" class="form-control" required>
</div>

<div class="form-group">
<label for="" class="control-label">Asal Sekolah</label>
<input type="text" name="asal_sekolah" value="<?php echo $siswa['asal_sekolah'] ?>" placeholder="Masukkan Asal Sekolah" class="form-control" required>
</div>

<div class="form-group">
<label for="" class="control-label">No Handphone</label>
<input type="text" name="telepon" value="<?php echo $siswa['telepon'] ?>" placeholder="Masukkan No Handphone" class="form-control" required>
</div>

<div class="form-group">
<label for="" class="control-label">No Handphone Ortu</label>
<input type="text" name="telepon_ortu" value="<?php echo $siswa['telepon_ortu'] ?>" placeholder="Masukkan No Handphone Ortu" class="form-control" required>
</div>

<div class="form-group">
<button type="submit" class="btn btn-primary">Simpan</button>
<a href="index.php" class="btn btn-default">Kembali</a>
</div>
</form>
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