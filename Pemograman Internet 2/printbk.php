<?php
include 'modelbk.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
<title>Cetak Data Buku</title>
<style>
h1 {
text-align: center;
}
table,
td,
th {
border: 1px solid #ddd;
text-align: left;
}
table {
border-collapse: collapse;
width: 100%;
}
th,
td {
padding: 15px;
}
</style>
</head>
<body>
<h1>Laporan Data Buku</h1>
<table>
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
<td><?=$data->judulbuku ?></td>
<td><?=$data->namasiswa ?></td>
<td><?=$data->Tgl_Pinjam ?></td>
<td><?=$data->Tgl_Kembali ?></td>
</tr>
<?php endforeach;
} else{ ?>
<tr>
<td colspan="9">Belum ada data pada tabel buku.</td>
</tr>
<?php } ?>
</tbody>
</table>
<script>
window.print();
</script>
</body>
</html>