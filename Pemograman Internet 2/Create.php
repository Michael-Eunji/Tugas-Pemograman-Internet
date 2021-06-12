<!doctype html>
<html lang="en">
<head>
<title>Tambah Peminjam</title>
<style type="text/css">
body{
background: url('https://www.sopiyudin.com/wp-content/uploads/2019/08/background-buku-statistik.png') no-repeat scroll;
background-size: 100% 100%;
min-height: 700px;
}
</style>
</head>
<body>
<h1>Tambah</h1>
<a href="indexx.php">Kembali</a><br><br>
<form action="proses.php" method="post">
<label>ID Siswa</label><br>
<input type="text" name="ID_Siswa"><br>
<label>Nama Siswa</label><br>
<input type="text" name="namasiswa"><br>
<label>Judul Buku</label><br>
<input type="text" name="judulbuku"><br>
<label>Durasi Peminjaman</label><br>
<input type="text" name="durasipinjaman"><br>
<br><br>
<button type="submit" name="submit_simpan">Submit</button>
<button type="reset">Reset</button>
</form>
</body>
</html>
