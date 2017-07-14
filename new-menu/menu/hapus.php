<?php
    include($_SERVER['DOCUMENT_ROOT'] . "/config/database.php");
    $id = null;
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
    }
    echo("id: " . $data['id']);
?>