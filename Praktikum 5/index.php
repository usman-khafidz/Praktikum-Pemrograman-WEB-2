<?php
include 'koneksi.php';

$total = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS jumlah FROM siswa"))['jumlah'];

$ipa = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS jumlah FROM siswa WHERE jurusan='IPA'"))['jumlah'];
$ips = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS jumlah FROM siswa WHERE jurusan='IPS'"))['jumlah'];
$bahasa = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS jumlah FROM siswa WHERE jurusan='Bahasa'"))['jumlah'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard Pendaftaran Siswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Pendaftaran Siswa</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a href="dashboard.php" class="nav-link active">Dashboard</a></li>
        <li class="nav-item"><a href="form_pendaftaran.php" class="nav-link">Daftar Baru</a></li>
        <li class="nav-item"><a href="tampil.php" class="nav-link">Data Siswa</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Konten Dashboard -->
<div class="container mt-4">
  <h2 class="text-center mb-4">Dashboard Pendaftaran Siswa Baru</h2>

  <div class="row text-center">
    <div class="col-md-3">
      <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">
          <h5 class="card-title text-secondary">Total Siswa</h5>
          <h1 class="display-5 text-primary"><?= $total ?></h1>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">
          <h5 class="card-title text-secondary">Jurusan IPA</h5>
          <h1 class="display-5 text-success"><?= $ipa ?></h1>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">
          <h5 class="card-title text-secondary">Jurusan IPS</h5>
          <h1 class="display-5 text-warning"><?= $ips ?></h1>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card shadow-sm border-0 mb-4">
        <div class="card-body">
          <h5 class="card-title text-secondary">Jurusan Bahasa</h5>
          <h1 class="display-5 text-danger"><?= $bahasa ?></h1>
        </div>
      </div>
    </div>
  </div>

  <div class="text-center mt-4">
    <a href="form_pendaftaran.php" class="btn btn-success btn-lg me-2">+ Daftar Siswa Baru</a>
    <a href="tampil.php" class="btn btn-primary btn-lg">📋 Lihat Data Siswa</a>
  </div>
</div>

<footer class="text-center mt-5 text-muted">
  <p>© <?= date('Y') ?> Sistem Pendaftaran Siswa | by Admin</p>
</footer>

</body>
</html>
