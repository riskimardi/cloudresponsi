<?php 

include "koneksi.php";

$id = $_GET['id'];

$hapus = mysqli_query($koneksi,"delete from tbuser where id='$id'") or die (mysql_error());

	header("location:index1.php?mod=user&pesan=data sudah dihapus");

	exit;

?>
