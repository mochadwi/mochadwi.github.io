<?php
    include($_SERVER['DOCUMENT_ROOT'] . "/config/database.php");
    $id = null;
    $gender = "";
    if (!empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }

    if ($id != null) {
        $db = Database::connect();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM guest WHERE id = ?";
        $q = $db->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
        if ($data['gender'] == 'l') {
            $gender = 'Laki-laki';
        } else {
            $gender = 'Perempuan';
        }

        echo '<center><h2>Konfirmasi data yang dihapus!</h2></center>';
        echo '<table border=1 align=center>';
        echo '<tr>';
            echo '<th>Nama</th>';
            echo '<td>'.$data['name'].'</td>';
        echo '</tr>';
        echo '<tr>';
            echo '<th>Alamat</th>';
            echo '<td>'.$data['address'].'</td>';
        echo '</tr>';
        echo '<tr>';
            echo '<th>Email</th>';
            echo '<td>'.$data['email'].'</td>';
        echo '</tr>';
        echo '<tr>';
            echo '<th>Jenis Kelamin</th>';
            echo '<td>'.$gender.'</td>';
        echo '</tr>';
        echo '<tr>';
            echo '<th>Pesan</th>';
            echo '<td>'.$data['comment'].'</td>';
        echo '</tr>';
        echo '<tr>';
            echo '<td><a href="javascript:history.go(-1)">Kembali</a></td>';
            echo '<td><a href="hapus.php?id='.$data['id'].'">Hapus</a></td>';
        echo '</tr>';
        echo '</table>';
    }
    // echo("id: " . $data['id']);
?>