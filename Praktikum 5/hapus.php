<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $id = intval($id);

    $query = "DELETE FROM siswa WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: tampil.php");
        exit;
    } else {
        echo "Gagal menghapus data: " . mysqli_error($conn);
    }
} else {
    echo "ID tidak ditemukan di URL!";
}
?>

