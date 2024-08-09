<?php
include ('koneksi.php');

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM pesanan WHERE id = $id");
$row = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Update logic here...
    header('Location: daftar_pesanan.php');
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
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    </div>
</body>

</html>