<html>
<head>
<title>Untitled Document</title>
<link rel="stylesheet" href="style.css"  type="text/css" />
</head>

<body>
<center>
<div id="body">
  <div class="head"><?php include('head.html'); ?></div>
  <table width="100%" border="0" height="100%">
    <tr>
      <td height="30" colspan="2" bgcolor="#333333"><?php include('nav.html'); ?></td>
    </tr>
    <tr>
      <td valign="top">
	  	<div class="content">
	  	<div class="cover">
		<center>Login Administrator</center>
	  	</div>
		
		<form id="form1" name="form1" method="post" action="">
		 <table align="center">
		 <tr>
            <td>Username</td>
            <td>: <input type="text" name="user" />            </td>
          </tr>
          <tr>
            <td>Password</td>
            <td>:
              <input name="pass" type="text" id="pass" /></td>
          </tr>
		  <tr>
            <td colspan="2" align="center">
			  <input name="Login" type="submit" id="Login" value="Login" />
              <input type="reset" name="Reset" value="Reset" />            </td>
            </tr>
          </table>
		</form>
    <?php
$user = $_POST['user'];
$pass = $_POST['pass'];

if(isset($user) && isset($pass)){
  $sql = mysql_query("select * from username where username='$user' and password='$pass'");
  $rows = mysql_num_rows($sql);
  if($rows == 0) {
    $message = "GAGAL LOGIN ! Username atau Password anda SALAH";

  }
  else {
    do {
      $_SESSION['username']=$_POST['username'];
      header('location:adm.php');
    }
    while($row=mysql_fetch_row($sql));
  }
}
?>
	  	</div>
	  </td>
      <td valign="top"  width="200" bgcolor="#CCCCCC">
        <div class="menu">
        <?php include('menu.html'); ?>
        </div></td>
    </tr>
  </table>
  <div class="footer">
    <div align="center"><?php include('footer.php'); ?></div>
  </div>
</div>
</center>
</body>
</html>
