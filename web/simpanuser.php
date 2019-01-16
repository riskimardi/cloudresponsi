)<?php 

include "koneksi.php";

	$username  = $_POST['username'];

	$password  = $_POST['password'];

	$cpassword = $_POST['cpassword'];

	$nama_file 	= $_FILES['gambar']['name'];

	$temp 		= $_FILES['gambar']['tmp_name'];

	$dir_upload = "file/".$nama_file;

		if(empty($username) || empty($password)){

			header("location:index1.php?mod=user&pesan=data masih kosong&username=$username");

			exit;

		}

		if($password != $cpassword){

			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index1.php">';
			exit;	

		}

	if(!copy($temp,"file/".$nama_file)){

			echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index1.php">';
			exit;

	}

	$simpan = mysqli_query($koneksi,"insert into tbuser values(0,'$username','$password','$dir_upload')") or die (mysql_error());

		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index1.php">';

//echo "data sudah disimpan, tunggu sebentar";

//echo '<META HTTP-EQUIV="REFRESH" CONTENT="5;URL=index1.php">';

		exit;

?>
