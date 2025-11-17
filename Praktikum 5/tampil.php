<?php
include 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM siswa");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Data Pendaftaran Siswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h2>Data Pendaftaran Siswa</h2>
  <a href="form_tambah.php" class="btn btn-primary mb-3">+ Tambah Pendaftar</a>
  <table class="table table-striped table-bordered">
    <thead class="table-primary">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Asal Sekolah</th>
        <th>Jurusan</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $no = 1;
      while($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
        <td><?= $no++ ?></td>
        <td><?= $row['nama'] ?></td>
        <td><?= $row['tgl_lahir'] ?></td>
        <td><?= $row['alamat'] ?></td>
        <td><?= $row['asal_sekolah'] ?></td>
        <td><?= $row['jurusan'] ?></td>
        <td>
          <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
          <a href="hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus?')">Hapus</a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
</body>
</html>
