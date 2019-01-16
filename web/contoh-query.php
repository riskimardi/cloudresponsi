<?php 

@$koneksi 	= mysql_connect("localhost","root","12123");

$db 		= mysql_select_db("dbweb");

if(!$koneksi || !$db){

	echo "Database error";

	exit;

}

//query insert

$sql = "insert into tbuser values(0,'budi','rahasia')";

mysql_query($sql);

//mysql_query("delete from tbuser where id='9'");

//$sql = "update tbuser 

//		set username='budiono' where id='11'";

//mysql_query($sql) or die(mysql_error());

$query = mysql_query("select *from tbuser");

while($data = mysql_fetch_assoc($query)){

	$user = $data['username'];

	echo $user."<br />";

}

?>
