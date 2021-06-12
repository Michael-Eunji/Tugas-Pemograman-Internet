<?php
include 'modelbk.php';
if (isset($_POST['submit_simpan'])) {
 $ID_Buku = $_POST['ID_Buku'];
 $ID_Siswa = $_POST['ID_Siswa'];
 $judulbuku = $_POST['judulbuku'];
 $namasiswa = $_POST['namasiswa'];
 $durasipinjaman = $_POST['durasipinjaman'];
 $Tgl_Pinjam = $_POST['Tgl_Pinjam'];
 $Tgl_Kembali = $_POST['Tgl_Kembali'];
 $model = new Model();
 $model->insert($ID_Buku,$ID_Siswa, $judulbuku, $namasiswa,$durasipinjaman, $Tgl_Pinjam,$Tgl_Kembali);
header ('location : indexbk.php');
}
if (isset($_POST['submit_edit'])) {
    $ID_Buku = $_POST['ID_Buku'];
    $ID_Siswa = $_POST['ID_Siswa'];
 $judulbuku = $_POST['judulbuku'];
 $namasiswa = $_POST['namasiswa'];
 $durasipinjaman = $_POST['durasipinjaman'];
 $Tgl_Pinjam = $_POST['Tgl_Pinjam'];
 $Tgl_Kembali = $_POST['Tgl_Kembali'];
 $model = new Model();
 $model->update($ID_Buku,$ID_Siswa, $judulbuku, $namasiswa,$durasipinjaman, $Tgl_Pinjam,$Tgl_Kembali);
 header('location:indexbk.php');
}
if (isset($_GET['ID_Buku'])) {
 $ID_Buku = $_GET['ID_Buku'];
 $model = new Model();
 $model->delete($ID_Buku);
 header('location:indexbk.php');
}