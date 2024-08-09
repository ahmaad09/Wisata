<?php
include ('header.php');
include ('koneksi.php'); 
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Pemesanan Paket Wisata</title>
    <link rel="stylesheet" href="assets/css/pesanan.css">
    <script src="script.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5 blur">
   <div class="container p-3">
   <h2>Form Pemesanan Paket Wisata</h2>
    <form action="proses_pesanan.php" method="post" onsubmit="return validasiForm()">
        <label for="nama" class="form-check-label">Nama:</label>
        <input type="text" id="nama" name="nama" class="form-control"><br>

        <label for="durasi" class="form-check-label">Durasi (Hari):</label>
        <input type="number" id="durasi" name="durasi" class="form-control"><br>

        <label for="jumlah_peserta" class="form-check-label">Jumlah Peserta:</label>
        <input type="number" id="jumlah_peserta" name="jumlah_peserta" class="form-control"><br>

        <label for="pilihan">Pilihan Paket:</label><br>
        <input type="checkbox" id="penginapan" name="pilihan[]" value="Penginapan" class="form-check-input"> Penginapan (Rp 1.000.000)<br>
        <input type="checkbox" id="transportasi" name="pilihan[]" value="Transportasi" class="form-check-input"> Transportasi (Rp 1.200.000)<br>
        <input type="checkbox" id="makanan" name="pilihan[]" value="Makanan" class="form-check-input"> Makanan (Rp 500.000)<br>

        <button type="submit" class="btn btn-primary mt-4 p-2 pesan">Pesan</button>
    </form>
   </div>
    </div>
</body>

</html>