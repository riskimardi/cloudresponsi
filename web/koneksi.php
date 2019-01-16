<?php 

$host 		= "db";

$user 		= "root";

$pass 		= "root";

$dbname 	= "cloud";

$koneksi 	= mysqli_connect($host,$user,$pass) or die ("gagal konek");

$db = mysqli_select_db($koneksi, $dbname);

?>
