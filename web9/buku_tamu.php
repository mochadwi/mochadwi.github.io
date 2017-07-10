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
      <td height="30" colspan="2" bgcolor="#333333"><?php include('nav.html'); ?></td>
    </tr>
    <tr>
      <td valign="top">
	  	<div class="content">
	  	<div class="cover">
		<center>Buku Tamu</center>
	  	</div>
		<form id="form" name="form" method="post" action="bukutamu_procces.php">
		  <table  border="0" align="center">
            <tr>
              <td>Nama</td>
              <td>:                
                <input type="text" name="nama" /></td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td>: 
                <input type="text" name="alamat" /></td>
            </tr>
            <tr>
              <td>No. Hp </td>
              <td> : +62
                <input type="text" name="nohp" size="10"/></td>
            </tr>
            <tr valign="top">
              <td>Pesan</td>
              <td >:                
                <textarea name="pesan" rows="4"></textarea></td>
            </tr>
            <tr valign="top">
              <td colspan="2" align="center"><input name="Send" type="submit" id="Send" value="Send" />
                <input type="reset" name="Submit2" value="Reset" /></td>
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
