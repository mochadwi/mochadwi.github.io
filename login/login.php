<?php
    session_start(); // init session
    include($_SERVER['DOCUMENT_ROOT'] . "/config/database.php");
    $username = $_POST['username'];
    $password = sha1($_POST['password']);

    if (($username != "") && ($password != ""))
    {
        $db = Database::connect();
        $sql = "SELECT * FROM user WHERE username = ? AND password = ?";
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $q = $db->prepare($sql);
        $q->execute(array($username, $password));
        $data = $q->fetch(PDO::FETCH_ASSOC);

        // try {
        //     $query->execute(array($username));
        // } catch(PDOException $ex) {
        //     // if error persisted
        //     die($ex->getMessage());  
        // }
        
        // header("Location: form.html");
        if (($data['username'] == $username) && ($data['password'] == $password))
        {
            $_SESSION['username'] = $username;
            // header("location: ../index.php");
            echo "<center>Berhasil login</center>";
            echo '<center><a href="../index.php" target="_parent">Ke halaman utama</a></center>';
        }
        else
        {
            echo "<center>Username atau password salah!<center>";
        }

        Database::disconnect();
    } else
    {
        echo "<center>Jangan masukkan data kosong!</center>";
    }
?>