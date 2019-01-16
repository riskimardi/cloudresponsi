<?php 

session_start();

if(!isset($_SESSION['login'])){

	header("location:index.php?pesan=anda harus login terlebih dahulu");

	exit;

}

	include "koneksi.php";

	$mod = $_GET['mod'];

?>

<html>

<body>

<link rel="stylesheet" type="text/css" href="style.css" />

<div class="menu_navigasi">

	<div class="menu_left">

			<ul class="menu">

				<li><a href="">BERANDA</a></li>

				<li><a href="index1.php?mod=user">DATA USER</a></li>

			<li><a href="">PROFIL</a>

				<ul>

					<li><a href="index1.php?mod=gantipass&id=<?php echo $_SESSION['id_user'];?>">Ganti Password</a></li>

					<li><a href="logout.php">Logout</a></li>							

				</ul>

			</li>

		</ul>

	</div>	

</div>		

<div class="content">

	<?php 

		if(isset($mod)){

			if($mod == "user"){

				include "user.php";

			}else if($mod == "gantipass"){

				include "gantipassword.php";

			}else if($mod == "karyawan"){

				include "karyawan.php";

			}else{

				echo "Halaman tidak ditemukan";

			}

		}

	?>

</div>

</body>

</html>
