<!DOCTYPE html>
<html>
<head>
	<title>Data Customer Penerbangan</title>
</head>
<link rel="stylesheet" href="<?php echo base_url(); ?>gudang/adminlte/css/style.css">
<body>
	<center><h1>Data Customer Penerbangan</h1></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>No Handphone</th>
			<th>Jenis Kelamin</th>
			<th>Email</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($customer as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?>.</td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->nohp ?></td>
			<td><?php echo $u->gender ?></td>
			<td><?php echo $u->email ?></td>
			<td>
				<a style="cursor:pointer;" onclick="href='<?php echo base_url(('index.php/crud/edit/'. $u->customer_id)); ?>'"> Ubah </a>
				<a style="cursor:pointer;" onclick="href='<?php echo base_url(('index.php/crud/hapus/'. $u->customer_id)); ?>'"> Hapus </a>

			</td>
		</tr>
		<?php } ?>
	</table>
	<center><a href='<?php echo base_url(('index.php/crud/tambah/')); ?>' class="button-primary"> Masukan Data </a></center>
</body>
</html>