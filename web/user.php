<?php 

session_start();

  if(!isset($_SESSION['login'])){

      header("location:index.php");

      exit;

  }

$username = $_GET['username'];

echo "Selamat datang, ".$_SESSION['username'];

?>

<h2 class="judul_halaman">TAMBAH USER</h2>

<?php if($_GET['data'] != "ok"){ ?>

    <form name="form1" method="post" action="simpanuser.php" enctype="multipart/form-data">

      <table width="407" border="0" class="tabel_form">

        <tr>

          <td width="115">USERNAME</td>

          <td width="276"><input type="text" name="username" id="username" value="<?php echo $username;?>"></td>

        </tr>

        <tr>

          <td>PASSSWORD</td>

          <td><input type="password" name="password" id="password"></td>

        </tr>

        <tr>

          <td>KONFIRMASI </td>

          <td><input type="password" name="cpassword" id="cpassword"></td>

        </tr>

        <tr>

          <td>GAMBAR </td>

          <td><input type="file" name="gambar" id="gambar"></td>

        </tr>

        <tr>

          <td><input type="submit" name="simpan" id="simpan" value="SIMPAN"></td>

          <td>&nbsp;</td>

        </tr>

      </table>

    </form>

<?php } ?>    

<h2>DATA USER</h2>

<table width="400" border="0" class="tabel_data">

  <tr>

    <th width="29">NO</th>

    <th width="234">USERNAME</th>

    <th>AKSI</th>

  </tr>

<?php 

$query = mysqli_query($koneksi, "select *from tbuser order by id desc");

  while ($data = mysqli_fetch_assoc($query)){    

    $no++;

    $id       = $data['id'];

    $username = $data['username'];    

    $gambar   = $data['gambar'];

    $link_hapus = "hapususer.php?id=$id";

    $link_ubah  = "ubahuser.php?id=$id";

?>  

  <tr>

    <td><?php echo $no;?></td>

    <td>

      <img src="<?php echo $gambar;?>" width="50" align="middle">

      <?php echo $username;?>

    </td>

    <td>

        <a href="<?php echo $link_ubah;?>">Update</a> || 

        <a href="<?php echo $link_hapus;?>">Hapus</a>

    </td>

  </tr>

<?php } ?>

</table>
