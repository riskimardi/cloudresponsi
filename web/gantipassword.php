<?php 

include "koneksi.php";

  $id = $_SESSION['id_user'];

//tampilkan dari query data yang ingin di edit

  $query = mysql_query("select *from tbuser where id='$id'");

  $data = mysql_fetch_assoc($query);

  $username = $data['username'];

  $password = $data['password'];    

    

?>

<h2 class="judul_halaman">UBAH USER</h2>

<form name="form1" method="post" action="prosesubahuser.php">

Username Anda : <b><?php echo $_SESSION['username'];?></b>

  <input type="hidden" name="id" id="id" value="<?php echo $id;?>">

  <table width="407" border="0" class="tabel_form">    

    <tr>

      <td>PASSSWORD</td>

      <td><input type="password" name="password" id="password" value="<?php echo $password;?>"></td>

    </tr>

    <tr>

      <td>KONFIRMASI </td>

      <td><input type="password" name="cpassword" id="cpassword" value="<?php echo $password;?>"></td>

    </tr>

    <tr>

      <td><input type="submit" name="simpan" id="simpan" value="SIMPAN"></td>

      <td>&nbsp;</td>

    </tr>

  </table>

</form>
