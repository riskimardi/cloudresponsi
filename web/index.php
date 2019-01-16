<?php 

echo strip_tags($_GET['pesan']);

?>

<!DOCTYPE html>

<html>

<head>

  <title>LOGIN</title>

</head>

<body>

<center>

<h2 class="judul_halaman">LOGIN USER</h2>

    <form name="form1" method="post" action="proseslogin.php">

      <table width="407" border="0" class="tabel_form">

        <tr>

          <td width="115">USERNAME</td>

          <td width="276"><input type="text" name="username" id="username"></td>

        </tr>

        <tr>

          <td>PASSSWORD</td>

          <td><input type="password" name="password" id="password"></td>

        </tr>

        <tr>

          <td><input type="submit" name="simpan" id="simpan" value="SIMPAN"></td>

          <td>&nbsp;</td>

        </tr>

      </table>

    </form>

</center>

</body>

</html>
