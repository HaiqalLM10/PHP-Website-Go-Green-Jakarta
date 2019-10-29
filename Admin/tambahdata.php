<h2>Tambah Data</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Id Member</label>
		<input type="text" name="id" class="form-control">
	</div>
	<div class="form-group">
		<label>Username</label>
		<input type="text" name="nama" class="form-control">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="text" name="password" class="form-control">
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" name="alamat" class="form-control">
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php 
if (isset($_POST['save']))
{
	  $koneksi->query("INSERT INTO member(username,password,alamat) VALUES('$_POST[user]','$_POST[password]', '$_POST[alamat]')");
	
echo "<script>alert('data telah disimpan');</script>";
echo "<script>location='index.php?halaman=daftar';</script>";
}


?>