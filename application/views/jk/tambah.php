<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter 3 | sih4nk.com</title>
</head>
<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter 3 | sih4nk.com</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo site_url('jk/simpan'); ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Keterangan</td>
				<td><input type="text" name="ket"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>