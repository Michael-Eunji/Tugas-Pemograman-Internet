<?php
include 'connection.php';
class Model extends Connection
{
public function __construct()
 {
 $this->conn = $this->get_connection();
 }
public function insert($ID_Siswa, $namasiswa, $judulbuku, $durasipinjaman)
{
 $sql = "INSERT INTO tbll_siswa (ID_Siswa, namasiswa, judulbuku, durasipinjaman) VALUES
('$ID_Siswa', '$namasiswa', '$judulbuku', '$durasipinjaman')";
$this->conn->query($sql);
}
public function tampil_data()
{
 $sql = "SELECT * FROM tbll_siswa";
 $bind = $this->conn->query($sql);
 while  ($obj = $bind->fetch_object()) {
 $baris[] = $obj;
 }
 if(!empty($baris)){
 return $baris;
 }
}
public function edit($ID_Siswa)
{
 $sql = "SELECT * FROM tbll_siswa WHERE ID_Siswa='$ID_Siswa'";
 $bind = $this->conn->query($sql);
 while ($obj = $bind->fetch_object()) {
 $baris = $obj;
 }
return $baris;
}
public function update($ID_Siswa, $namasiswa, $judulbuku, $durasipinjaman)
{
 $sql = "UPDATE tbll_siswa SET ID_Siswa='$ID_Siswa', namasiswa='$namasiswa', judulbuku='$judulbuku', durasipinjaman='$pinjaman', 
 WHERE ID_Siswa='$ID_Siswa'";
 $this->conn->query($sql);
}
public function delete($ID_Siswa)
{
 $sql = "DELETE FROM tbll_siswa WHERE ID_Siswa='$ID_Siswa'";
 $this->conn->query($sql);
}
}
