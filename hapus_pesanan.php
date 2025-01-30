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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Hapus Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="card shadow p-4 text-center">
        <h2 class="text-danger">Konfirmasi Hapus Pesanan</h2>
        <p>Apakah Anda yakin ingin menghapus pesanan ini?</p>
        <form method="post">
            <button type="submit" class="btn btn-danger px-4">Ya, Hapus</button>
            <a href="daftar_pesanan.php" class="btn btn-secondary px-4">Batal</a>
        </form>
    </div>
</body>
</html>
