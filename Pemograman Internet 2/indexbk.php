<?php
include 'modelbk.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
<title>Data Buku</title>
<style type="text/css">
body{
background: url('https://www.sopiyudin.com/wp-content/uploads/2019/08/background-buku-statistik.png') no-repeat scroll;
background-size: 100% 100%;
min-height: 700px;
}
</style>
</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<div>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><b>Perpustakaan</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="indexx.php">Peminjam</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indexbk.php">Buku</a>
      </li>
    </ul>
    </form>
  </div>
</nav>
<h1>Data Buku</h1>
<a href="createbk.php">Tambah Data</a>
<br>
<a href="printbk.php" target="_blank">Cetak Data</a>
<br><br>
<table border="1">
<thead>
<tr>
<th>No.</th>
<th>ID_Buku</th>
<th>ID_Siswa
<th>JudulBuku</th>
<th>NamaSiswa</th>
<th>DurasiPinjaman
<th>TanggalPinjaman</th>
<th>TanggalPengembalian</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php
$result = $model->tampil_data();
if ( !empty($result) ) {
foreach ($result as $data): ?>
<tr>
<td><?=$index++ ?></td>
<td><?=$data->ID_Buku ?></td>
<td><?=$data->ID_Siswa ?></td>
<td><?=$data->judulbuku ?></td>
<td><?=$data->namasiswa ?></td>
<td><?=$data->durasipinjaman ?></td>
<td><?=$data->Tgl_Pinjam ?></td>
<td><?=$data->Tgl_Kembali ?></td>
<td>
<a name="edit" id="edit"
href="editbk.php?ID_Buku=<?=$data->ID_Buku ?>">Edit</a>
<a name="hapus" id="hapus"
href="prosesbk.php?ID_Buku=<?=$data->ID_Buku ?>">Delete</a>
</td>
</tr>
<?php endforeach;
} else{ ?>
<tr>
<td colspan="9">Belum ada data pada tabel buku.</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</body>
</html>