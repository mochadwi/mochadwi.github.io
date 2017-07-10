<?php
include('config.php');
?>

<html>
<head>
	<title>Create New Account</title>
</head>
<body>
<table border="1">

<?php
$nama = $_POST['nama'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$email = $_POST['email'];

echo "<tr><td> Nama Lengkap <td>: $nama";
echo "<tr><td> Username 	<td>: $user";
echo "<tr><td> Password 	<td>: $pass";
echo "<tr><td> E-mail 		<td>: $email";

if (($nama!="") && ($user!="") && ($pass!="") && ($email!="")) 
{
	$sql="insert into username(nama_lengkap, username, password, email) values ('$nama','$user','$pass','$email')";
	$hasil=mysql_query($sql,$connect);
	if($hasil)
	{
		echo "<tr><td colspan=2>Data Telah Disimpan!";
	}
	else
	{
		echo "<tr><td colspan=2>Data gagal disimpan!";
	}
}
else
{
	echo "<tr><td colspan=2>Data Masih Kosong!";
}
?>
</table>
<p> <a href="create.php">Back</a></p>
</body>
</html>