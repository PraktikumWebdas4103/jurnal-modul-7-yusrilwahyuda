<?php
	include "koneksi.php";
	$query="SELECT * FROM `pendaftaran`";
	$select=$koneksi->query($query);
?>
<center>
<form action="" method="POST">
	<input type="submit" name="input" value="Input Data"><input type="search" name="cari" value="NIM"><input type="submit" name="submit" value="Cari">
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Nim</th>
			<th>Aksi</th>
		</tr>
		<?php if(mysqli_num_rows($select)>0){
			$no =1;
			while ($data = mysqli_fetch_array($select)) {
			 ?>
			 <tr>
			 	<td><?php echo $data['nama'];?></td>
			 	<td><?php echo $data['nim'];?></td>
			 	<td><a href="delete.php">Delete</td>
			 </tr>
			 <?php $no++; } ?>
			<?php } ?>
		</table>
	</form>
</center>