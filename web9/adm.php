<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="style.css"  type="text/css" />
</head>

<body>
<?php
  include('config.php');
  $sql=mysql_query("SELECT * From buku_tamu");
  $row=mysql_fetch_row($sql);        
?>
<center>
<div id="body">
  <div class="head"><?php include('head.html'); ?></div>
  <table width="100%" border="0" height="100%">
    <tr>
      <td colspan="2" bgcolor="#333333" align="right"><font color="#FFFF00"><b>Hello, Admin !!</b></font></td>
    </tr>
    <tr>
      <td valign="top">
	  	<div class="content">
	  	<div class="cover">
		<center>Hello Admin</center>
	  	</div>
      <table border="1" align="center">
		    <?php
          echo "<tr>
                <th>No
                <th>Nama Tamu
                <th>Alamat
                <th>No. Telepon
                <th>Pesan
                <th>Tanggal Bertamu
                <th>Aksi";
          if ($row) {
            $n=1;
            do {
              list ($id,$nama,$alamat,$nohp,$pesan,$tanggal)=$row;
              echo "<tr><td>$n
                        <td>$nama
                        <td>$alamat
                        <td>$nohp
                        <td>$pesan
                        <td>$tanggal
                        <td><a href='hapus.php?id=$id'>Hapus</a>";
              $n=$n+1;
            }
            while($row=mysql_fetch_row($sql));
          }
          else 
          {
            echo "<tr><td colspan=7><center> tidak ada data";
          }
        ?>
        </table>
      </div>
	  </td>
      <td valign="top" width="200" bgcolor="#CCCCCC">
        <div class="menu">
        <?php include('menu2.html'); ?>
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
  