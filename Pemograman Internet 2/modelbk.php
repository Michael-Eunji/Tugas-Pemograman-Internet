<?php
include 'connection.php';
class Model extends Connection
{
public function __construct()
 {
 $this->conn = $this->get_connection();
 }
 
public function insert($ID_Buku,$ID_Siswa, $judulbuku, $namasiswa,$durasipinjaman, $Tgl_Pinjam, $Tgl_Kembali)
{
  $sql = "INSERT INTO tblll_bk (ID_Buku,ID_Siswa, judulbuku, namasiswa,durasipinjaman, Tgl_Pinjam,Tgl_Kembali) VALUES
('$ID_Buku','$ID_Siswa' '$judulbuku', '$namasiswa','$durasipinjaman' '$Tgl_Pinjam','$Tgl_Kembali')";
$this->conn->query($sql);
}
public function tampil_data()
{
 $sql = "SELECT * FROM tblll_bk";
 $bind = $this->conn->query($sql);
 while  ($obj = $bind->fetch_object()) {
 $baris[] = $obj;
 }
 if(!empty($baris)){
 return $baris;
 }
}
public function edit($ID_Buku)
{
 $sql = "SELECT * FROM tblll_bk WHERE ID_Buku='$ID_Buku'";
 $bind = $this->conn->query($sql);
 while ($obj = $bind->fetch_object()) {
 $baris = $obj;
 }
 return $baris;
}
public function update($ID_Buku,$ID_Siswa, $judulbuku, $namasiswa,$durasipinjaman, $Tgl_Pinjam, $Tgl_Kembali)
{
$sql = "UPDATE tblll_bk SET ID_Buku='$ID_Buku',ID_Siswa='$ID_Siswa' judulbuku='$judulbuku', namasiswa='$namasiswa',durasipinjaman='$durasipinjaman',Tgl_Pinjam='$Tgl_Pinjam',Tgl_Kembali='$Tgl_Kembali'
WHERE ID_Buku='$ID_Buku'";
 $this->conn->query($sql);
}
public function delete($ID_Buku)
{
 $sql = "DELETE FROM tblll_bk WHERE ID_Buku='$ID_Buku'";
 $this->conn->query($sql);
}
}
