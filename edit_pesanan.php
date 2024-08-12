<?php
include ("header.php");
include ('koneksi.php');

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM pesanan WHERE id = $id");
$row = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $durasi = $_POST['durasi'];
    $jumlah_peserta = $_POST['jumlah_peserta'];
    $pilihan = isset($_POST['pilihan']) ? implode(", ", $_POST['pilihan']) : '';

    // Query untuk update data
    $updateQuery = "UPDATE pesanan SET nama = '$nama', durasi = '$durasi', jumlah_peserta = '$jumlah_peserta', paket_wisata = '$pilihan' WHERE id = $id";

    if (mysqli_query($conn, $updateQuery)) {
        header('Location: daftar_pesanan.php');
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Edit Pesanan</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5">
        <h2>Edit Pesanan</h2>
        <form method="post">
            <label for="nama" class="form-check-label">Nama:</label>
            <input type="text" id="nama" name="nama" value="<?= $row['nama'] ?>" class="form-control"><br>
            <label for="durasi" class="form-check-label">Durasi (Hari):</label>
            <input type="number" id="durasi" name="durasi" value="<?= $row['durasi'] ?>" class="form-control"><br>
            <label for="jumlah_peserta" class="form-check-label">Jumlah Peserta:</label>
            <input type="number" id="jumlah_peserta" name="jumlah_peserta" value="<?= $row['jumlah_peserta'] ?>" class="form-control"><br>

            <label for="paket_wisata">Pilihan Paket:</label><br>
            <?php
            $pilihanArr = explode(", ", $row['paket_wisata']);
            ?>
            <input type="checkbox" id="penginapan" name="pilihan[]" value="Penginapan" class="form-check-input" <?= in_array('Penginapan', $pilihanArr) ? 'checked' : '' ?>> Penginapan (Rp 1.000.000)<br>
            <input type="checkbox" id="transportasi" name="pilihan[]" value="Transportasi" class="form-check-input" <?= in_array('Transportasi', $pilihanArr) ? 'checked' : '' ?>> Transportasi (Rp 1.200.000)<br>
            <input type="checkbox" id="makanan" name="pilihan[]" value="Makanan" class="form-check-input" <?= in_array('Makanan', $pilihanArr) ? 'checked' : '' ?>> Makanan (Rp 500.000)<br>
            <button type="submit" class="btn btn-primary mt-5">Update</button>
        </form>
    </div>
    <?php include ("footer.php") ?>
</body>

</html>
