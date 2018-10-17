<?php
	include_once 'konekMhs.php';
	$nim = $_GET["nim"];
?>

<?php
	$sql = mysqli_query($conn, "SELECT * FROM mhsform WHERE nim = '$nim'");
	$haha = mysqli_fetch_assoc($sql);
		if(isset($_POST['upload'])){
		 $nama		= $_POST['nama'];
		 $nim		= $_POST['nim'];
		 $jk		= $_POST['jk'];
		 $juru		= $_POST['juru'];
		 $fac 		= $_POST['fac'];
		 $asal 		= $_POST['asal'];
		 $moidup 	= $_POST['motto'];
		 $sql = "UPDATE mhsform SET"; 

?>