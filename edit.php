<?php
require 'koneksi.php';

$nim = $_GET['nim'];
$query = $koneksi->query("SELECT * FROM mahasiswa WHERE nim='$nim'"); //cek pake nim
$data = $query->fetch_assoc();
?>

<h1>Edit Data Mahasiswa</h1>

<form action="proses.php" method="post">

    <div class="mb-3">
        <label class="form-label">NIM</label>
        <input type="text" class="form-control" name="nim" 
               value="<?= $data['nim'] ?>" readonly>
    </div>

    <div class="mb-3">
        <label class="form-label">Nama Mahasiswa</label>
        <input type="text" class="form-control" name="nama_mhs"
               value="<?= $data['nama_mhs'] ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Tanggal Lahir</label>
        <input type="date" class="form-control" name="tgl_lahir"
               value="<?= $data['tgl_lahir'] ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <textarea class="form-control" name="alamat" rows="3"><?= $data['alamat'] ?></textarea>
    </div>

    <div>
        <input type="submit" name="ubah" value="Update" class="btn btn-primary">
        <input type="reset" value="Reset" class="btn btn-secondary">
    </div>

</form>
