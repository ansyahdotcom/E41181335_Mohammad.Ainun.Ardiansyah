<!DOCTYPE html>
<html>
<head>
	<title>AKSATA</title>
</head>
<body>
	<center><h1>Daftar Wisata</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>no tlp</th>
			<!-- <th>Action</th> -->
		</tr>
		<?php 
		// $no = 1;
		// menampilkan data
		foreach($wisata as $wst){ 
		?>
		<tr>
			<!-- menampilkan id wisata -->
			<td><?php echo $wst->ID_WST ?></td>
			<!-- menampilkan nama wisata -->
			<td><?php echo $wst->NM_WST ?></td>
			<!-- alamat wisata -->
			<td><?php echo $wst->ALAMAT_WST ?></td>
			<!-- no telepon wisata -->
			<td><?php echo $wst->TLP_WST ?></td>
			<td>
				<!-- button edit -->
			    <?php echo anchor('crud/edit/'.$wst->NM_WST,'Edit'); ?>
				<!-- button hapus -->
                <?php echo anchor('crud/hapus/'.$wst->NM_WST,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>