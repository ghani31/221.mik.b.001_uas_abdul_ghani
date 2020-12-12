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
<h1>Formulir Pendaftaran Siswa Baru</h1>
<div class="row">
<div class="col-md-12">
<h1>Tambah Peserta</h1>
<form action="insert_siswa.php" method="POST">

<div class="form-group">
<label for="nim" class="control-label">NIM</label>
<input type="text" name="nim" placeholder="Masukkan NIM" class="form-control" required>
</div>

<div class="form-group">
<label for="" class="control-label">Nama Lengkap</label>
<input type="text" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" class="form-control" required>
</div>

<div class="form-group">
<label for="" class="control-label">Agama</label>
<select name="agama" class="form-control">
<option value="" selected disabled>--- Pilih Agama ---</option>
<?php $all_agama = array('Islam', 'Kristen Katolik', 'Kristen Protestan', 'Hindu', 'Budha'); ?>
<?php foreach ($all_agama as $agama) { ?>
<option value="<?php echo $agama ?>">
<?php echo $agama ?>
</option>
<?php } ?>
</select>
</div>

<div class="form-group">
<label for="">Jenis Kelamin</label>
<div class="radio">
<label>
<input type="radio" name="jk" value="L">Laki-laki
</label>
</div>
<div class="radio">
<label>
<input type="radio" name="jk" value="P">Perempuan
</label>
</div>
</div>

<div class="form-group">
<label for="" class="control-label">Jurusan</label>
<select name="jurusan" class="form-control">
<option value="" selected disabled>--- Pilih Jurusan ---</option>
<?php $all_jurusan = array('Manajemen Informatika & Komputer', 'Teknisi Komputer', 'Akuntansi Komputer', 'Administrasi Perkantoran'); ?>
<?php foreach ($all_jurusan as $jurusan) { ?>
<option value="<?php echo $jurusan ?>">
<?php echo $jurusan ?>
</option>
<?php } ?>
</select>
</div>

<div class="form-group">
<label for="" class="control-label">Nama Ayah</label>
<input type="text" name="nama_ayah" placeholder="Masukkan Nama Ayah" class="form-control" required>
</div>

<div class="form-group">
<label for="" class="control-label">Nama Ibu</label>
<input type="text" name="nama_ibu" placeholder="Masukkan Nama Ibu" class="form-control" required>
</div>

<div class="form-group">
<label for="" class="control-label">Alamat</label>
<textarea name="alamat" placeholder="Masukkan Alamat Lengkap" class="form-control" required></textarea>
</div>

<div class="form-group">
<label for="" class="control-label">Asal Sekolah</label>
<input type="text" name="asal_sekolah" placeholder="Masukkan Asal Sekolah" class="form-control" required>
</div>


<div class="form-group">
<label for="" class="control-label">Nomer Hanphone</label>
<input type="text" name="telepon" placeholder="Masukkan No Handphone" class="form-control" required>
</div>

<div class="form-group">
<label for="" class="control-label">Nomer Hanphone Ortu</label>
<input type="text" name="telepon_ortu" placeholder="Masukkan No Handphone Ortu" class="form-control" required>
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
