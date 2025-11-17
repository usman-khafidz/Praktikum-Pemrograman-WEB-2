<?php
$total_kelas = 9;
$kelas_x = 3;
$kelas_xi = 3;
$kelas_xii = 3;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Kelas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f3f4f6;
        }
        .card-box {
            border-radius: 15px;
            padding: 30px;
            background: white;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            text-align: center;
        }
        .count-number {
            font-size: 48px;
            font-weight: bold;
        }
        .navbar-brand {
            font-weight: bold;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand">Manajemen Kelas</a>

        <div class="navbar-nav ms-auto">
            <a class="nav-link active" href="#">Dashboard Kelas</a>
            <a class="nav-link" href="tambah_kelas.php">Tambah Kelas</a>
            <a class="nav-link" href="data_kelas.php">Data Kelas</a>
        </div>
    </div>
</nav>

<!-- Content -->
<div class="container mt-5">
    <h2 class="text-center fw-bold mb-4">Dashboard Data Kelas</h2>

    <div class="row justify-content-center g-4">

        <!-- Total Kelas -->
        <div class="col-md-3">
            <div class="card-box">
                <h5>Total Kelas</h5>
                <div class="count-number text-primary"><?= $total_kelas ?></div>
            </div>
        </div>

        <!-- Kelas X -->
        <div class="col-md-3">
            <div class="card-box">
                <h5>Kelas X</h5>
                <div class="count-number text-success"><?= $kelas_x ?></div>
            </div>
        </div>

        <!-- Kelas XI -->
        <div class="col-md-3">
            <div class="card-box">
                <h5>Kelas XI</h5>
                <div class="count-number text-warning"><?= $kelas_xi ?></div>
            </div>
        </div>

        <!-- Kelas XII -->
        <div class="col-md-3">
            <div class="card-box">
                <h5>Kelas XII</h5>
                <div class="count-number text-danger"><?= $kelas_xii ?></div>
            </div>
        </div>

    </div>

    <div class="text-center mt-4">
        <a href="tambah_kelas.php" class="btn btn-success btn-lg px-4">+ Tambah Kelas Baru</a>
        <a href="data_kelas.php" class="btn btn-primary btn-lg px-4">📂 Lihat Data Kelas</a>
    </div>

    <footer class="text-center mt-5">
        <p class="text-muted">© 2025 Sistem Kelas | by Admin</p>
    </footer>
</div>

</body>
</html>
