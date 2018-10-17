<!DOCTYPE html>
<html>
<head>
	<title>DataMhs</title>
</head>
<body>
	<form  action=" " method="POST">
	<table align="center" style="font-family: Verdana">
		<center><h2 style="font-family: Verdana; color: grey">Data Mahasiwa</h2></center>
		<hr style="width: 20%; height: 2%">
		<br><br>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" maxlength="50" placeholder="Nama Lengkap" style="width: 160px; height: 18px; border-radius: 10%"></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td><input type="number" name="nim" minlength="10" maxlength="10" placeholder="Nomor Id" style="width: 160px; height: 18px; border-radius: 10%"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>
				<input type="radio" name="jk" value="Laki-laki">Laki-laki<br>
				<input type="radio" name="jk" value="Perempuan">Perempuan
			</td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td>
				<select name="juru">
					<option value="Manajemen Teknologi Bisnis dan Informatika">Manajemen Teknologi Bisnis dan Informatika</option>
					<option value="Akuntansi">Akuntansi</option>
					<option value="Magister Manajemen">Magister Manajemen</option>
					<option value="Kelompok Keahlian">Kelompok Keahlian</option>
					<option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
					<option value="Administrasi Bisnis">Administrasi Bisnis</option>
					<option value="Seni Rupa Murni">Seni Rupa Murni</option>
					<option value="Kriya Tekstil dan Mode">Kriya Tekstil dan Mode</option>
					<option value="Desain Interior">Desain Interior</option>
					<option value="Desain Produk">Desain Produk</option>
					<option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
					<option value="Teknik Elektro">Teknik Elektro</option>
					<option value="Teknik Telekomunikasi">Teknik Telekomunikasi</option>
					<option value="Sistem Komputer">Sistem Komputer</option>
					<option value="Magister Elektro Komunikasi">Magister Elektro Komunikasi</option>
					<option value="Teknik Informatika">Teknik Informatika</option>
					<option value="Ilmu Komputasi">Ilmu Komputasi</option>
					<option value="Magister Teknik Informatika">Magister Teknik Informatika</option>
					<option value="Teknik Komputer">Teknik Komputer</option>
					<option value="Manajemen Pemasaran">Manajemen Pemasaran</option>
					<option value="Perhotelan">Perhotelan</option>
					<option value="Manajemen Informatika">Manajemen Informatika</option>
					<option value="Komputerisasi Akuntansi">Komputerisasi Akuntansi</option>
					<option value="Teknik Industri">Teknik Industri</option>
					<option value="Sistem Informasi">Sistem Informasi</option>
					<option value="Magister Teknik Industri">Magister Teknik Industri</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>
				<select name="fac">
					<option value="FEB">Fakultas Ekonomi dan Bisnis</option>
					<option value="FKB">Fakultas Komunikasi dan Bisnis</option>
					<option value="FIK">Fakultas Industri Kreatif</option>
					<option value="FRI">Fakultas Rekayasa Industri</option>
					<option value="FTE">Fakultas Teknik Elektro</option>
					<option value="FTI">Fakultas Teknik Informatika</option>
					<option value="FIT">Fakultas Ilmu Terapan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Asal</td>
			<td><input type="text" name="asal" style="width: 160px; height: 18px; border-radius: 10%"></td>
		</tr>
		<tr>
			<td>Motto Hidup</td>
			<td><input type="textarea" name="motto"></td>
		</tr>
		<tr>
			<td></td>
			<td style="padding-top: 10px"><center><input type="submit" name="input" value="Input Data" style="width: 80px; height: 25px; border-radius: 10%; background-color: lightgrey"></center></td>
		</tr>

 	</table>
 </form>

 <?php
 include 'konekMhs.php';
 if (isset($_POST['input'])){
     $nama=$_POST['nama'];
     $nim=$_POST['nim'];
     $jk = $_POST['jk'];
     $juru = $_POST['juru'];
     $fac = $_POST['fac'];
     $asal = $_POST['asal'];
     $moidup = $_POST['motto'];
     
   
      $sql="INSERT INTO mhsform VALUES ('$nama', '$nim', '$jk', '$juru', '$fac', '$asal', '$moidup')";
      $yun = mysqli_query($conn,$sql);
    if($yun){
    	echo "Data sudah tersimpan";
    	header('location: viewMhs.php');
    }else{
      echo "Maaf, data tidak berhasil tersimpan";
    }
		echo "<br><br><br>";
		echo "<hr>";
}

 ?>
</body>
</html>