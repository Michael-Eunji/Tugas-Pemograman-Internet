<!doctype html>
<html lang="en">
<head>
<title>Tambah Data Buku</title>
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
<a href="indexbk.php">Kembali</a><br><br>
<form action="prosesbk.php" method="post">
<label>ID Buku</label><br>
<input type="text" name="ID_Buku"><br>
<label>ID Siswa</label><br>
<input type="text" name="ID_Siswa"><br>
<label>Judul Buku</label><br>
<input type="text" name="judulbuku"><br>
<label>Nama Siswa</label><br>
<input type="text" name="namasiswa"><br>
<label>Durasi Pinjaman</label><br>
<input type="text" name="durasipinjaman"><br>
<label>Tanggal Pinjaman</label><br>
<input type="text" name="Tgl_Pinjam"><br>
<label>Tanggal Pengembalian</label><br>
<input type="text" name="Tgl_Kembali"><br>
<br><br>
<button type="submit" name="submit_simpan">Submit</button>
<button type="reset">Reset</button>
</form>
</body>
</html>
