<?php
include('header.php');  // Memuat header
include('koneksi.php'); // Memuat koneksi ke database

// Proses data form ketika form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $nama = $_POST['nama'];
    $durasi = $_POST['durasi'];
    $jumlah_peserta = $_POST['jumlah_peserta'];
    $pilihan = isset($_POST['pilihan']) ? implode(", ", $_POST['pilihan']) : ''; // Menggabungkan pilihan menjadi string jika ada

    // Query untuk memasukkan data pesanan
    $query = "INSERT INTO pesanan (nama, durasi, jumlah_peserta, pilihan) 
              VALUES ('$nama', '$durasi', '$jumlah_peserta', '$pilihan')";

    if ($coon->query($query) === TRUE) {
        echo "Pemesanan berhasil!";
    } else {
        echo "Error: " . $coon->error;
    }
}
?>

<div class="container mt-5 blur">
    <div class="container p-3">
        <h2>Form Pemesanan Paket Wisata</h2>
        <form action="proses_pesanan.php" method="post" onsubmit="return validasiForm()">
            <label for="nama" class="form-check-label">Nama:</label>
            <input type="text" id="nama" name="nama" class="form-control" required><br>

            <label for="durasi" class="form-check-label">Durasi (Hari):</label>
            <input type="number" id="durasi" name="durasi" class="form-control" required><br>

            <label for="jumlah_peserta" class="form-check-label">Jumlah Peserta:</label>
            <input type="number" id="jumlah_peserta" name="jumlah_peserta" class="form-control" required><br>

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
