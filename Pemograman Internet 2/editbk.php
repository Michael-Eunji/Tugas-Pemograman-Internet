<?php
$ID_Buku = $_GET['ID_Buku'];
include 'modelbk.php';
$model = new Model();
$data = $model->edit($ID_Buku);
?>
<!doctype html>
<html lang="en">
<head>
<title>Edit Data Buku</title>
<style type="text/css">
body{
background: url('https://www.sopiyudin.com/wp-content/uploads/2019/08/background-buku-statistik.png') no-repeat scroll;
background-size: 100% 100%;
min-height: 700px;
}
</style>
</head>
<body>
<h1>Edit Data Buku</h1>
<a href="indexbk.php">Kembali</a><br><br>
<form action="prosesbk.php" method="post">
<label>ID_Buku</label><br>
<input type="text" name="ID_Buku" value="<?php echo $data->ID_Buku ?>"><br>
<label>ID_Siswa</label><br>
<input type="text" name="ID_Siswa" value="<?php echo $data->ID_Siswa ?>"><br>
<label>Judul Buku</label><br>
<input type="text" name="judulbuku" value="<?php echo $data->judulbuku ?>"><br>
<label>Nama Siswa</label><br>
<input type="text" name="namasiswa" value="<?php echo $data->namasiswa ?>"><br>
<label>Durasi Peminjaman</label><br>
<input type="text" name="durasipinjaman" value="<?php echo $data->durasipinjaman ?>"><br>
<label>Tanggal Pinjaman</label><br>
<input type="text" name="Tgl_Pinjam" value="<?php echo $data->Tgl_Pinjam ?>"><br>
<label>Tanggal Pengembalian</label><br>
<input type="text" name="Tgl_Kembali" value="<?php echo $data->Tgl_Kembali ?>"><br>
<br><br>
<button type="submit" name="submit_edit">Submit</button>
</form>
</body>
</html>