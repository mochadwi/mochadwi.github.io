<?php
session_start();
include('config.php');
$user = $_POST['user'];
$pass = $_POST['pass'];

if(($user!="") && ($pass!="")){
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