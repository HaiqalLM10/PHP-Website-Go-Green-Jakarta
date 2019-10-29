<h2> Daftar Tabel Recruitment </h2>

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
		<?php $ambil=$koneksi->query("SELECT * FROM pelamar"); ?>
		<?php while($pecah = $ambil->fetch_assoc()) {?>
		<tr>
			<td><?php echo $pecah['Id_pendaftar']; ?></td>
			<td><?php echo $pecah['Nama_pendaftar']; ?></td>
			
			<td><?php echo $pecah['Alamat_pendaftar']; ?></td>
			<td><?php echo $pecah['Pendidikan_terakhir']; ?></td>
			<td><?php echo $pecah['Tanggal_lahir']; ?></td>
			<td><?php echo $pecah['Keahlian_kerja']; ?></td>
			<td><?php echo $pecah['Keahlian_bahasa']; ?></td>
			<td><?php echo $pecah['Pengalaman_kerja']; ?></td>
			<td><?php echo $pecah['Pengalaman_organisasi']; ?></td>
			<td><?php echo $pecah['Hasil_test']; ?></td>
			
			<td>
				<a href="index.php?halaman=hapusdata&id=<?php echo $pecah['id_member'];?>"	class="btn-danger btn">Hapus</a>
				<a href="index.php?halaman=ubahdata&id=<?php echo $pecah['id_member']; ?>" class="btn btn-warning">Ubah</a>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahdata" class="btn btn-primary">Tambah Data</a>