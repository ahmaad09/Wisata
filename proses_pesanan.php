<?php
include('header.php');  
include('koneksi.php');  

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $durasi = $_POST['durasi'];
    $jumlah_peserta = $_POST['jumlah_peserta'];
    $pilihan = isset($_POST['pilihan']) ? $_POST['pilihan'] : [];

    // Daftar harga paket
    $harga_paket = [
        "Penginapan" => 1000000,
        "Transportasi" => 1200000,
        "Makanan" => 500000
    ];

    // Menghitung jumlah tagihan berdasarkan pilihan paket
    $jumlah_tagihan = 0;
    $pilihan_str = "";

    if (!empty($pilihan)) {
        foreach ($pilihan as $pilih) {
            $jumlah_tagihan += $harga_paket[$pilih] ?? 0;
        }
        $pilihan_str = implode(", ", $pilihan);
    }

    // Query untuk memasukkan data pesanan ke database
    $query = "INSERT INTO pesanan (nama, durasi, jumlah_peserta, pilihan, jumlah_tagihan) 
              VALUES ('$nama', '$durasi', '$jumlah_peserta', '$pilihan_str', '$jumlah_tagihan')";

    if ($conn->query($query) === TRUE) {
        echo "<script>alert('Pemesanan berhasil!'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
