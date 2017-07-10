<?php
//koneksi
$connect = mysql_connect('localhost','root','');
if(!$connect) {
	die('Koneksi Gagal : '. mysql_error());
}
//database
$db = mysql_select_db('db_it9', $connect);
if (!$db) {
	die ('Error : '. mysql_error());
}
?>