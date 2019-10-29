<?php 

$ambil = $koneksi->query("SELECT * FROM member WHERE id_member='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
// $fotohewan = $pecah['foto_hewan'];
// if (file_exists("../$fotohewan"))
// {
// 	unlink("../$fotohewan");
// }

$koneksi->query("DELETE FROM member WHERE id_member='$_GET[id]'");

echo "<script>alert('data terhapus');</script>";
echo "<script>location='index.php?halaman=daftar';</script>";
 ?>