<?php
include('koneksi.php');

$nama = $_POST['nama'];
$durasi = $_POST['durasi'];
$jumlah_peserta = $_POST['jumlah_peserta'];
$pilihan = $_POST['pilihan'];

$harga_paket = 0;
if (in_array("Penginapan", $pilihan)) $harga_paket += 1000000;
if (in_array("Transportasi", $pilihan)) $harga_paket += 1200000;
if (in_array("Makanan", $pilihan)) $harga_paket += 500000;

$jumlah_tagihan = $durasi * $jumlah_peserta * $harga_paket;

$query = "INSERT INTO pesanan (nama, durasi, jumlah_peserta, harga_paket, jumlah_tagihan)
          VALUES ('$nama', '$durasi', '$jumlah_peserta', '$harga_paket', '$jumlah_tagihan')";
mysqli_query($conn, $query);

header('Location: daftar_pesanan.php');
?>
