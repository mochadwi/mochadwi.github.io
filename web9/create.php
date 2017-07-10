<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="style.css"  type="text/css" />
</head>

<body>
<center>
<div id="body">
  <div class="head"><?php include('head.html'); ?></div>
  <table width="100%" border="0" height="100%">
    <tr>
      <td colspan="2" bgcolor="#333333"><div class="nav"><?php include('nav.html'); ?></div></td>
    </tr>
    <tr>
      <td valign="top">
	  	<div class="content">
	  	<div class="cover">
		<center>Create New Account</center>
	  	</div>
		<form id="form" name="form" method="post" action="create_procces.php">
		<table align="center"  border="0" height="100%">
          <tr>
            <td>Nama Lengkap </td>
            <td>
              : <input type="text" name="nama" />
            </td>
          </tr>
          <tr>
            <td>Username</td>
            <td>
              : <input type="text" name="user" />
            </td>
          </tr>
          <tr>
            <td>Password</td>
            <td>: <input type="password" name="pass" />
            </td>
          </tr>
          <tr>
            <td>E-Mail</td>
            <td>: <input name="email" type="text" id="email" />
            </td>
          </tr>
          <tr>
            <td colspan="2" align="center">
			  <input name="Create" type="submit" id="Create" value="Create" />
              <input type="reset" name="Reset" value="Reset" />
            </td>
            </tr>
        </table>
	  	</form>            
		</div>
	  </td>
      <td valign="top" width="200" bgcolor="#CCCCCC">
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