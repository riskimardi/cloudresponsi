<?php 

session_start();

include "koneksi.php";

	$username  = $_POST['username'];

	$password  = $_POST['password'];	

		if(empty($username) || empty($password)){

			header("location:index.php?pesan=data masih kosong");

			exit;

		}

		

	$query_login = mysqli_query($koneksi, "select *from tbuser where username='".$username."' and password='".$password."'");

	if(mysqli_num_rows($query_login) == 0){

		header("location:index.php?pesan=login gagal");

		exit;

	}else{

		//login berhasil

		$data = mysqli_fetch_assoc($query_login);

		$username = $data['username'];

		$_SESSION['login'] 		= 1;

		$_SESSION['id_user'] 	= $data['id'];

		$_SESSION['username'] 	= $username;

		header("location:index1.php?pesan=login berhasil");

		exit;		

	}

?>
