<?php
include('koneksi.php');

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    mysqli_query($conn, "DELETE FROM pesanan WHERE id = $id");
    header('Location: daftar_pesanan.php');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hapus Pesanan</title>
</head>
<body>
    <h1>Apakah Anda yakin ingin menghapus pesanan ini?</h1>
    <form method="post">
        <button type="submit">Ya</button>
        <a href="daftar_pesanan.php">Tidak</a>
    </form>
</body>
</html>
