<?php
$ID_Siswa= $_GET['ID_Siswa'];
include 'model.php';
$model = new Model();
$data = $model->edit($ID_Siswa);
?>
<!doctype html>
<html lang="en">
<head>
<title>Edit Data Peminjam</title>
<style type="text/css">
body{
background: url('https://www.sopiyudin.com/wp-content/uploads/2019/08/background-buku-statistik.png') no-repeat scroll;
background-size: 100% 100%;
min-height: 700px;
}
</style>
</head>
<body>
<h1>Edit Data Peminjam</h1>
<a href="indexx.php">Kembali</a><br><br>
<form action="proses.php" method="post">
<label>ID_Siswa</label><br>
<input type="text" name="ID_Siswa" value="<?php echo $data->ID_Siswa ?>"><br>
<label>Nama Siswa</label><br>
<input type="text" name="namasiswa" value="<?php echo $data->namasiswa ?>"><br>
<label>Judul Buku</label><br>
<input type="text" name="judulbuku" value="<?php echo $data->judulbuku ?>"><br>
<label>Durasi Pinjaman</label><br>
<input type="text" name="durasipinjaman" value="<?php echo $data->durasipinjaman ?>"><br>
<br><br>
<button type="submit" name="submit_edit">Submit</button>
</form>
</body>
</html>
