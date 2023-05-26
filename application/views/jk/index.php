<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter 3 | sih4nk.com</title>
</head>
<body>
	<h2>Data Jenis Kelamin</h2>
	<a href="<?php echo site_url('jk/tambah'); ?>">Tambah Jenis Kelamin</a><br><br>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Keterangan</th>
			<th>Aksi</th>
		</tr>
		<?php 
		$no = 1;
		foreach($jk as $m){ 
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $m->ket; ?></td>
			<td>
				<a href="<?php echo site_url('jk/edit/'.$m->id); ?>">Edit</a>
				<a href="<?php echo site_url('jk/hapus/'.$m->id); ?>">Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>