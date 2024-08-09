<?php
include ('header.php');
include ('koneksi.php');
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Daftar Pesanan</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5">
        <h1>Daftar Pesanan</h1>
        <table class="table-striped table rounded" border="1">
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Durasi</th>
                <th scope="col">Jumlah Peserta</th>
                <th scope="col">Harga Paket</th>
                <th scope="col">Jumlah Tagihan</th>
                <th scope="col">Aksi</th>
            </tr>
            <?php
            $result = mysqli_query($conn, "SELECT * FROM pesanan");
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['durasi'] . "</td>";
                echo "<td>" . $row['jumlah_peserta'] . "</td>";
                echo "<td>" . $row['harga_paket'] . "</td>";
                echo "<td>" . $row['jumlah_tagihan'] . "</td>";
                echo "<td><a href='edit_pesanan.php?id=" . $row['id'] . "'>Edit</a> | <a href='hapus_pesanan.php?id=" . $row['id'] . "'>Hapus</a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>