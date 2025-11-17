<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$asal = $_POST['asal_sekolah'];
$jurusan = $_POST['jurusan'];

$sql = "INSERT INTO siswa (nama, tgl_lahir, alamat, asal_sekolah, jurusan)
        VALUES ('$nama', '$tgl_lahir', '$alamat', '$asal', '$jurusan')";

if (mysqli_query($conn, $sql)) {
    header("Location: tampil.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
