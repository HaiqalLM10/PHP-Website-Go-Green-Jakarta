<h2>Tambah Data</h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Id Pendaftar</label>
		<input type="text" name="id_pendaftar" class="form-control" >
	</div>
	<div class="form-group">
		<label>Nama Pendaftar</label>
		<input type="text" name="nama_pendaftar" class="form-control" >
	</div>
	<div class="form-group">
		<label>Jenis Kelamin</label>
		<input type="text" name="jenis_pendaftar" class="form-control" >
	</div>
	<div class="form-group">
		<label>Alamat</label>
		<input type="text" name="alamat_pendaftar" class="form-control" >
	</div>
	<div class="form-group">
		<label>Status</label>
		<input type="text" name="status_pendaftar" class="form-control" >
	</div>
	<div class="form-group">
		<label>Pendidikan Terakhir</label>
		<input type="text" name="pendidikan_terakhir" class="form-control" >
	</div>
	<div class="form-group">
		<label>Tanggal Lahir</label>
		<input type="text" name="tanggal_lahir" class="form-control" >
	</div>
	<div class="form-group">
		<label>Keahlian Kerja</label>
		<input type="text" name="keahlian_kerja" class="form-control" >
	</div>
	<div class="form-group">
		<label>Keahlian bahasa</label>
		<input type="text" name="keahlian_bahasa" class="form-control" >
	</div>
	<div class="form-group">
		<label>Pengalaman Kerja</label>
		<input type="text" name="pengalaman_kerja" class="form-control" >
	</div>
	<div class="form-group">
		<label>Pengalaman Organisasi</label>
		<input type="text" name="pengalaman_organisasi" class="form-control" >
	</div>
	<div class="form-group">
		<label>Hasil Test</label>
		<input type="text" name="hasil_test" class="form-control" >
	</div>
	
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php 
if (isset($_POST['save']))
{
	  $koneksi->query("INSERT INTO karyawan(Id_karyawan,Nama_karyawan,Alamat,Status,Tanggal_lahir,Tanggal_bergabung,Jumlah_tanggungan,Jenis_kelamin) VALUES('$_POST[id]','$_POST[nama]', '$_POST[alamat]', '$_POST[status]', '$_POST[tanggal_lahir]', '$_POST[tanggal_bergabung]', '$_POST[jumlah]', '$_POST[jenis]' )");
	
echo "<script>alert('data telah disimpan');</script>";
echo "<script>location='index.php?halaman=daftar';</script>";
}


?>