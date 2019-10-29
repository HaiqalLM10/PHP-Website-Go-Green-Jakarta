<?php 

$ambil = $koneksi->query("SELECT * FROM pelamar WHERE Id_pendaftar='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
// $fotohewan = $pecah['foto_hewan'];
// if (file_exists("../$fotohewan"))
// {
// 	unlink("../$fotohewan");
// }

$koneksi->query("DELETE FROM pelamar WHERE Id_pendaftar='$_GET[id]'");

echo "<script>alert('data terhapus');</script>";
echo "<script>location='index.php?halaman=daftar1';</script>";
 ?>