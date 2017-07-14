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
        $sql = "DELETE FROM guest WHERE id = $id";
        $count = $db->exec($sql);
        // $count->execute(array($id));
        Database::disconnect();
    }

    if ($count > 0) {
        echo 'Berhasil menghapus data.';
        usleep(3000000);
        header("Location: bukutamu.php");
    } else {
        echo 'Gagal, menghapush!';
    }


    // echo("id: " . $data['id']);
?>