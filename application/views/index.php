<!DOCTYPE html>
<html>
<head>
	<title>Crud</title>
</head>
<body>
	<center><a href=" <?php echo site_url('Main/tambah_data'); ?>">Tambah Data</a> </center>
	<table border="1" style="margin: 20px auto;">
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>Email</td>
		<td>Aktifitas</td>
		<td>Check-In</td>
		<td>Check-Out</td>
		<td>Aksi</td>
	</tr>

	<?php 
		$no = 1;
		foreach ($tamu as $tm) {
			
	 ?>
	 	<tr>
	 		<td><?php echo $no++; ?></td>
	 		<td><?php echo $tm->nama;?></td>
	 		<td><?php echo $tm->email; ?></td>
	 		<td><?php echo $tm->aktifitas;?></td>
	 		<td><?php echo $tm->check_in;?></td>
	 	
	 	<td>
			 <?php
			 	$tes = $tm->check_out;
			 	if($tes!=""){
			 		echo $tes;
			 	}else{
			 		echo "Belum Check-Out";
	  		} ?>

	  		</td>
	  		<td>
	  			<a href="<?php echo site_url('Main/edit/'); ?><?php echo $tm->id_bukutamu; ?>">Edit</a> || <a href="<?php echo site_url('Main/delete/'); ?><?php echo $tm->id_bukutamu; ?>">Delete</a>
	  		</td>

	  	</tr>
	  		<?php } ?>
	</table>
</body>
</html>