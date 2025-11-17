<!DOCTYPE html>
<html>
<head>
  <title>Form Pendaftaran Siswa Baru</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h2>Pendaftaran Siswa Baru</h2>
  <form action="simpan.php" method="POST">
    <div class="mb-3">
      <label class="form-label">Nama Lengkap</label>
      <input type="text" name="nama" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Tanggal Lahir</label>
      <input type="date" name="tgl_lahir" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Alamat</label>
      <input type="text" name="alamat" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Asal Sekolah</label>
      <input type="text" name="asal_sekolah" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Jurusan Pilihan</label>
      <select name="jurusan" class="form-select">
        <option value="IPA">IPA</option>
        <option value="IPS">IPS</option>
        <option value="Bahasa">Bahasa</option>
      </select>
    </div>
    <button type="submit" class="btn btn-success">Daftar Sekarang</button>
    <a href="tampil.php" class="btn btn-secondary">Lihat Data</a>
  </form>
</div>
</body>
</html>
