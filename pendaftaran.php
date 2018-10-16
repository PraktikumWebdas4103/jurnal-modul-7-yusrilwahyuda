<!DOCTYPE html>
<html>
<body><center>
	<form action="data.php" method="POST">
		<table border="1">
			<tr>
				<td><center><h2>PENDAFTARAN</h2></td>
			</tr>
			<tr>
				<td>Nama</td><td><input type="text" name="nama" placeholder="nama" required></td></tr><br><br>
			<tr>
				<td>Nim</td><td><input type="number" name="nim" placeholder="nim" required></td></tr><br><br>
  			 <tr>
			 	<td>Jenis Kelamin</td>
			 	<td><input type="radio" name="gender" value="Laki-laki" checked> Laki-laki <br>
  				<input type="radio" name="gender" value="Perempuan"> Perempuan</td><br>
  			</tr>
  			   <tr>
				<td>Prodi</td><td>
                    <select name="prodi">
                        <option value="D3 Manjemen Informatika">D3 Manajemen Informatika</option>
                        <option value="D3 Teknik Informatika">D3 Teknik Informatika</option>
                        <option value="D3 Sistem Komputer ">D3 Sistem Komputer</option>
                    </select>
                    </td>
                </tr>
            <tr>
				<td>Fakultas</td><td>
                    <select name="fakultas">
                        <option value="Fakultas Ilmu Terapan">FAKULTAS ILMU TERAPAN</option>
                        <option value="Fakultas Komunikasi Bisnis">FAKULTAS KOMUNIKASI BISNIS</option>
                        <option value="Fakultas Ekonomi Bisnis ">FAKULTAS EKONOMI BISNIS</option>
                        <option value="Fakultas Industri Kreatif">FAKULTAS INDUSTRI KREATIF</option>
                        <option value="Fakultas Rekayasa Industri">FAKULTAS REKAYASA INDUSTRI</option>
                    </select>
                    </td>
                </tr>
                <tr>
				<td>Asal</td><td><input type="text" name="asal" placeholder="asal" required></td></tr><br><br>
			<tr>
                <tr>
                	<td>Moto Hidup</td><td><textarea name="moto" required></textarea></td>
            	</tr>
				<tr>
				<td></td>
				<td><input type="submit" name="submit" value="kirim"></td>
			</tr>
		</table>
<?php
	include "koneksi.php";
	if (isset($_POST['submit'])) {
   	$nama=$_POST['nama'];
   	$nim=$_POST['nim'];
   	$jenisk=$_POST['gender'];
   	$prodi=$_POST['prodi'];
   	$fakultas=$_POST['fakultas'];
   	$asal=$_POST['asal'];
   	$moto=$_POST['moto'];
 
 	$sql="INSERT INTO `pendaftaran`(`nama`, `nim`, `jeniskelamin`, `prodi`, `fakultas`, `asal`, `motohidup`) 
      VALUES ('$nama','$nim','$jenisk','$prodi','$fakultas','$asal','$moto')";
      $save=$koneksi->query($sql);
   if($sql){
    echo "Database Masuk";
   }else{
    echo "gagal konek";
   }
}