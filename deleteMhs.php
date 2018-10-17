<?php
	include_once 'konekMhs.php';
	$nim = $_GET["nim"];
?>

<?php 
	$sql = "DELETE FROM mhsform WHERE nim = $nim";
	if(mysqli_query($sql)){
		header('location: viewMhs.php');
	}
	else{
      echo "Maaf, data tidak berhasil tersimpan";
    }
		echo "<br><br><br>";
		echo "<hr>";
}

 ?>