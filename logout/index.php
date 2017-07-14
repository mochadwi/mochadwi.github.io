<?php
    session_start();
    unset($_SESSION['username']);
    session_destroy();
    echo '<a href="../index.php">Kembali ke menu utama</a>';
    // header ("Location: index.php");
?>