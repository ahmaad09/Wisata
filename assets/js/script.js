function validasiForm() {
    var nama = document.getElementById('nama').value;
    var durasi = document.getElementById('durasi').value;
    var jumlah_peserta = document.getElementById('jumlah_peserta').value;

    if (nama == "" || durasi == "" || jumlah_peserta == "") {
        alert("Data form pemesanan harus terisi!");
        return false;
    }

    return true;
}
