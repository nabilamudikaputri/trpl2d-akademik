<h2>List Data Mahasiswa</h2>

<table class="table table-bordered">
  <thead class="table-primary">
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIM</th>
      <th scope="col">Nama Mahasiswa</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>

  <tbody>
    <?php 
    require 'koneksi.php';
    $tampil = $koneksi->query("SELECT * FROM mahasiswa");
    $no = 1;

    while ($data = $tampil->fetch_assoc()) {
    ?>
        <tr>
            <th scope="row"><?= $no ?></th>
            <td><?= $data['nim'] ?></td>
            <td><?= $data['nama_mhs'] ?></td>
            <td><?= $data['tgl_lahir'] ?></td>
            <td><?= $data['alamat'] ?></td>
            <td>
                <a href="index.php?nim=<?= $data['nim'] ?>&page=edit" class="btn btn-warning btn-sm">Edit</a>
                <a href="proses.php?nim=<?= $data['nim'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
    <?php 
        $no++; 
    } 
    ?>
  </tbody>
</table>
<a href='index.php?page=create' class='btn btn-primary mb-3'>Input Data Mahasiswa</a>