<?php
include 'koneksi.php';

if (!isset($_GET['id'])) {
    die("Error: ID tidak ditemukan di URL!");
}

$id = intval($_GET['id']); 

$result = mysqli_query($conn, "SELECT * FROM siswa WHERE id=$id");
if (!$result) {
    die("Query Error: " . mysqli_error($conn));
}

$data = mysqli_fetch_assoc($result);
if (!$data) {
    die("Data dengan ID $id tidak ditemukan!");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Data Siswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h2>Edit Data Siswa</h2>
  <form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $data['id'] ?>">
    <div class="mb-3">
      <label class="form-label">Nama Lengkap</label>
      <input type="text" name="nama" class="form-control" value="<?= $data['nama'] ?>" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Tanggal Lahir</label>
      <input type="date" name="tgl_lahir" class="form-control" value="<?= $data['tgl_lahir'] ?>" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Alamat</label>
      <input type="text" name="alamat" class="form-control" value="<?= $data['alamat'] ?>" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Asal Sekolah</label>
      <input type="text" name="asal_sekolah" class="form-control" value="<?= $data['asal_sekolah'] ?>" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Jurusan</label>
      <select name="jurusan" class="form-select">
        <option <?= ($data['jurusan']=="IPA")?"selected":"" ?>>IPA</option>
        <option <?= ($data['jurusan']=="IPS")?"selected":"" ?>>IPS</option>
        <option <?= ($data['jurusan']=="Bahasa")?"selected":"" ?>>Bahasa</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary w-100">Update</button>
    <a href="tampil.php" class="btn btn-secondary w-100 mt-2">Kembali</a>
  </form>
</div>
</body>
</html>
