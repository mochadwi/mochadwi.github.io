<?php
    include($_SERVER['DOCUMENT_ROOT'] . "/config/database.php");
    // include(__DIR__ . "/config/database.php");
    $guestName = $_POST['name'];
    $guestAddress = $_POST['address'];
    $guestEmail = $_POST['email'];
    $guestGender = $_POST['gender'];
    $guestComment = $_POST['comment'];

    if (($guestName!="") && ($guestAddress!="") && ($guestEmail!="") &&
    ($guestGender!="") && ($guestComment!=""))
    {
        $db = Database::connect();
        $sql = 'INSERT INTO guest (name, address, email, gender, comment, visit) VALUES(?, ?, ?, ?, ?, NOW())';
        // $sql = "SELECT * FROM guest";
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $db->prepare($sql);

        try {
            $query->execute(array($guestName, $guestAddress, $guestEmail, $guestGender,
                                $guestComment));
        } catch(PDOException $ex) {
            // if error persisted
            die($ex->getMessage());  
        }
        
        // header("Location: form.html");

        if ($query)
        {
            echo "<center>Terima kasih telah memberi saran :)</center>";
        }
        else
        {
            echo "<center>Sedang ada masalah, coba lagi nanti!<center>";
        }

        Database::disconnect();
    } else
    {
        echo "<center>Jangan masukkan data kosong!</center>";
    }
?>