<?php
	include('config.php');
	$nama =$_POST['nama'];
	$alamat =$_POST['alamat'];
	$nohp =$_POST['nohp'];
	$pesan =$_POST['pesan'];
	
	if(($nama!="") && ($alamat!="") && ($nohp!="") && ($pesan!="")) {
		$sql=mysql_query("INSERT into buku_tamu(nama,alamat,no_hp,pesan,tanggal) values('$nama','$alamat','$nohp','$pesan',now())");
		if($sql) {
			echo "data telah disimpan";
		} else {
			echo "data gagal disimpan";
		}
	}
	else
	{
		echo " data masih kosong";
	}
?>