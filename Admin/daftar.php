<h2> Daftar Tabel Karyawan </h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>no</th>
			<th>Username</th>
			<th>Password</th>
			<th>Alamat</th>
					
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM member"); ?>
		<?php while($pecah = $ambil->fetch_assoc()) {?>
		<tr>
			<td><?php echo $pecah['id_member']; ?></td>
			<td><?php echo $pecah['username']; ?></td>
			
			<td><?php echo $pecah['password']; ?></td>
			<td><?php echo $pecah['alamat']; ?></td>
			
			<td>
				<a href="index.php?halaman=hapusdata&id=<?php echo $pecah['id_member'];?>"	class="btn-danger btn">Hapus</a>
				<a href="index.php?halaman=ubahdata&id=<?php echo $pecah['id_member']; ?>" class="btn btn-warning">Ubah</a>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahdata" class="btn btn-primary">Tambah Data</a>