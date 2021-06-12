<?php
include 'model.php';
if (isset($_POST['submit_simpan'])) {
 $ID_Siswa = $_POST['ID_Siswa'];
 $namasiswa = $_POST['namasiswa'];
 $judulbuku = $_POST['judulbuku'];
 $durasipinjaman = $_POST['durasipinjaman'];
 $model = new Model();
 $model->insert($ID_Siswa, $namasiswa, $judulbuku, $durasipinjaman);
header ('location : indexx.php');
}
if (isset($_POST['submit_edit'])) {
 $ID_Siswa = $_POST['ID_Siswa'];
$namasiswa = $_POST['namasiswa'];
$judulbuku = $_POST['judulbuku'];
 $durasipinjaman = $_POST['durasipinjaman'];
 $model = new Model();
 $model->update($ID_Siswa, $namasiswa, $judulbuku, $durasipinjaman);
 header('location:indexx.php');
}
if (isset($_GET['ID_Siswa'])) {
 $ID_Siswa = $_GET['ID_Siswa'];
 $model = new Model();
 $model->delete($ID_Siswa);
 header('location:indexx.php');
}