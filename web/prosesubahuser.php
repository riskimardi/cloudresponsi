<?php 

include "koneksi.php";

	$id  	   = $_POST['id'];

	$username  = $_POST['username'];

	$password  = $_POST['password'];

	$cpassword = $_POST['cpassword'];

		if(empty($username) || empty($password) || empty($id)){

			header("location:index1.php?mod=user&pesan=data masih kosong");

			exit;

		}		

	//query update

	mysqli_query($koneksi,"update tbuser set username='$username',password='$password' where id='$id'") or die (mysql_error());

		header("location:index1.php?mod=user&pesan=data sudah diubah");

		exit;

?>
