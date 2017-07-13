<?php
    $guestName = $_POST['name'];
    $guestAddress = $_POST['address'];
    $guestEmail = $_POST['email'];
    $guestGender = $_POST['gender'];
    $guestComment = $_POST['comment'];

    if (($guestName!="") && ($guestAddress!="") && ($guestEmail!="") &&
    ($guestGender!="") && ($guestComment!=""))
    {
        $db = new PDO('mysql:host=localhost;dbname=tubes_it9', 'root', '');
        //then much later
        try {
            getData($db);
        } catch(PDOException $ex) {
            //handle me.
        }

        $db->query("insert into buku_tamu(nama_tamu, alamat_tamu, notelp_tamu,
        pesan_tamu,tanggal_bertamu)
        
        values('$nama_tamu','$alamat_tamu','$notelp_tamu','$pesan_tamu')");
        
        if ($hasil)
        {
            echo"<tr><td colspan=2>Data telah disimpan!";
        }
        else
        {
            echo"<tr><td colspan=2>Data gagal disimpan!";
        }
    } else
    {
        echo "<tr><td colspan=2>Data masih kosong!";
    }

    function getData($db) {
        $stmt = $db->query("SELECT * FROM guest");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
?>