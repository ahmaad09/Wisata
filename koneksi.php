<?php
$conn = mysqli_connect("localhost", "root", "", "db_wisata");

if (!$conn) {
    die("Gagal Koneksi" . mysqli_connect_error());
}
