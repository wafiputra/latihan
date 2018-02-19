<!DOCTYPE html>
<html>
<head>
	<title>INPUT FORM</title>
</head>
<body>
	<center>
		<h1>FORM INPUT</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>No Handphone</td>
				<td><input type="text" name="nohp"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="text" name="gender"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>