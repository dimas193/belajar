<!DOCTYPE html>
<html>
<head>
	<title>Crud || Tambah Data</title>
</head>
<body>
	<form method="POST" action="<?php echo site_url('Main/proses_tambahdata');
	?>">
	<table border="1">
		<tr>
			<td>Nama : <input type="text" name="nama"></td>
			<td>Email : <input type="text" name="email"></td>
			<td>Aktifitas : <input type="text" name="aktifitas"></td>
			<td><input type="submit" name="proses_tambahdata" value="Check In"></td>
		</tr>
	</table>
	</form>
</body>
</html>