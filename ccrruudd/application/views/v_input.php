<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo base_url(). 'crud/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
		<!-- tambah id -->
			<tr>
				<td>ID Wisata</td>
				<td><input type="text" name="ID_WST"></td>
			</tr>
			<!-- tambah nama -->
			<tr>
				<td>Nama Wisata</td>
				<td><input type="text" name="NM_WST"></td>
			</tr>
			<!-- tambah alamat -->
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="ALAMAT_WST"></td>
			</tr>
			<!-- tambah no telepon -->
			<tr>
				<td>Telepon</td>
				<td><input type="text" name="TLP_WST"></td>
			</tr>
			<tr>
				<td>
				<!-- button tambah data -->
					<input type="submit" value="Tambah">
				</td>
			</tr>
		</table>
	</form>	
</body>
</html>