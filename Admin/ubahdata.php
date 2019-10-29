<h2>Ubah Data</h2>
<?php 
$ambil = $koneksi->query("SELECT * FROM member WHERE id_member='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
 ?>

 <form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Id Member</label>
		<input type="text" name="id" class="form-control" value="<?php echo $pecah['id_member']; ?>">
	</div>
	<div class="form-group">
		<label>Username</label>
		<input type="text" name="nama" class="form-control" value="<?php echo $pecah['username']; ?>">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="text" name="pass" class="form-control" value="<?php echo $pecah['password']; ?>">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" name="alamat" class="form-control" value="<?php echo $pecah['alamat']; ?>">
	</div>
	<button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php 
if (isset($_POST['ubah']))
{
		$koneksi->query("UPDATE member SET id_member = '$_POST[id]', username = '$_POST[nama]', password = '$_POST[pass]', alamat = '$_POST[alamat]' WHERE id_member='$_GET[id]'");
	

	echo "<script>alert('data telah dirubah');</script>";
echo "<script>location='index.php?halaman=daftar';</script>";
}
?>