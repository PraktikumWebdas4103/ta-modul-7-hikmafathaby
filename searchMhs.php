<?php
	echo("<h3>Pencarian Data</h3");
	mysqli_connect("loacalhost", "root", "", "mahasiwa");
	

	$command = "SELECT * FROM mhsform WHERE nim like '%$search%'";
	$hasil = mysql_query($command);
	$jumlah = mysql_num_rows($hasil);

	if($jumlah>0){
		echo("Data yang ditemukan : $jumlah<br>");
		while($data = mysql_fetch_row($hasil)){
			echo ("Nama : $data[1]<br>");
			echo ("NIM : $data[2]<br>");
		}
	}
	else{
		echo("Maaf, data tidak ditemukan.");
	}
?>
