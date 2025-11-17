<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$asal = $_POST['asal_sekolah'];
$jurusan = $_POST['jurusan'];

$sql = "UPDATE siswa SET nama='$nama', tgl_lahir='$tgl_lahir', alamat='$alamat',
        asal_sekolah='$asal', jurusan='$jurusan' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: tampil.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
