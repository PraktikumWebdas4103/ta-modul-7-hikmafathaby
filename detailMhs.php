<?php
	include 'konekMhs.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>detail</title>
</head>
<body>
	<table border="3">
		<tr>
			<th>Nama</th>
			<th>NIM</th>
			<th>Jenis Kelamin</th>
			<th>Program Studi</th>
			<th>Fakultas</th>
			<th>Asal</th>
			<th>Motto Hidup</th>
			<th>Aksi</th>
		</tr>

		
		<?php
			$sql = "SELECT * FROM mhsform";
			$view = mysqli_query($sql);
			if(mysqli_num_rows($view) > 0){
				while($haha = mysqli_fetch_assoc($view)){
		?>
			<tr>
			 	<td><?php echo $haha["Nama"] ?></td>
			 	<td><?php echo $haha["NIM"] ?></td>
			 	<td><?php echo $haha["Jenis Kelamin"] ?></td>
			 	<td><?php echo $haha["Prodi"] ?></td>
			 	<td><?php echo $haha["Fakultas"] ?></td>
			 	<td><?php echo $haha["Asal"] ?></td>
			 	<td><?php echo $haha["Motto"] ?></td>
			 	<td> <a href='editMhs.php?nim=<?php echo $haha['NIM']?>'">Edit Data</a>
			</tr>
			
		<?php
		
				}
			}
		else{
			echo "Eror";
		}
			
			?>
		</body>
	</table>

</body>
</html>