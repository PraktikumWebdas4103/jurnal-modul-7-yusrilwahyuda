<?php
	$nimhapus=$_GET['nim'];

	include 'koneksi.php';

	$sql="DELETE FROM `pendaftaran` WHERE `nim`=$nimhapus";
	$delete=$koneksi->query($sql);
	if (mysqli_affected_rows($koneksi)>0) {
		header('Location:data.php');
	}

?>