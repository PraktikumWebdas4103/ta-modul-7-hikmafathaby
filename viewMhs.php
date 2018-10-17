<?php include_once 'konekMhs.php';
?>
<?php 
	$sql = "SELECT * FROM mhsform";
	$view = mysqli_query($conn,$sql);
	foreach ($view as $haha) {
		# code...
					
	?>

<!DOCTYPE html>
<html>
<head>
	<title>viewMhs</title>
</head>
<body bgcolor="lightgrey">
	
		
	<center>
		<table border="3" style="width: 30%; height: 10%">
			<td>
				<form action="searchMhs.php" method="GET">
				<input type="text" name="search" placeholder="Cari berdasarkan NIM">
				<input type="submit" name="submit" value="Search">
			</td>
			<tr>
				<td colspan="2" align="center" style="padding-top: 20px"><h3>Data Mahasiwa</h3></td>
			</tr>	
			<tr>
				<th>Nama</th>
				<th>NIM</th>
				<th>Aksi</th>
			</tr>
        
			<tr>				
				<td align="center">
					<?php echo $haha['Nama']; ?></td>
				<td align="center">
					<?php echo $haha['NIM']; ?></td>
				<td> <a href="deleteMhs.php?nim=<?php echo $haha['NIM']?>">Delete</a> <br>
                <a href="detailMhs.php?nim=<?php echo $haha['NIM']?>">Detail</a></td>
            </tr>
				
	<?php } ?>
			
		</table>
		</form>
		</body>
		</html>