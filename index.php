<?php
  session_start();
  $msg = ">> Login here <<";
  $dir = "login";

  if (isset($_SESSION['username'])) {
    $msg = ">> Logout here <<";
    $dir = "logout";
    $session = $_SESSION['username'];
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="chrome=1" http-equiv="X-UA-Compatible">
    <title>(Tugas Besar APLIKASI IT-9) E-Learning - Metode pembelajaran interaktif</title>
    <link href="./stylesheets/main.css" rel="stylesheet">
  </head>
  <body class="page-home">
    <div class="home-header">
      <div class="inner">
        <h1>E-Learning</h1>
        <p class="subtitle">Sebenarnya apa itu E-learning? Berikut saya rangkum beberapa platform yang 
          mengusung tema pembelajaran interaktif dan online.</p>
        <p class="subtitle">
          <?php
            echo '<a class="login" href="'.$dir.'/">'.$msg.'</a>';
          ?>
        </p>
      </div>
    </div>
    <div class="home-generator-list">
      <div class="inner">
        <a class="home-generator-card" href="./new-menu/menu/home.html">
          <img alt="Made with Code! http://learntocodewith.me/" class="generator-image" src="./img/made_with_code.gif" />
          <div class="generator-title">
            Menu
          </div>
          <div class="generator-description">
            Penjelasan lebih dalam mengenai apa itu E-learning
          </div>
        </a>
        <a class="home-generator-card" href="./new-menu/bio/home.html">
          <img alt="App shortcut icon generator" class="generator-image" src="./img/mochadwi.jpg">
          <div class="generator-title">
            Tentang saya
          </div>
          <div class="generator-description">
            Berikut hal-hal menarik yang dapat kamu ketahui!
          </div>
        </a> 
        <?php
          if (!isset($session)) {
            echo '
            <a class="home-generator-card is-external" href="./new-menu/feedback/home.html">
              <img alt="Android Icon Animator" class="generator-image" src="./img/big_bang_theory.gif">
              <div class="generator-title">
                Feedback
              </div>
              <div class="generator-description">
                Silakan beri komentar kamu ya~
                pada menu berikut
              </div>
            </a>';
          } else {
            echo '
            <a class="home-generator-card" href="./new-menu/admin/home.html">
              <img alt="List" class="generator-image" src="./assets/list.jpg" />
              <div class="generator-title">
                Buku Tamu
              </div>
              <div class="generator-description">
                Menu daftar pengunjung (admin only)
              </div>
            </a>';
          }
        ?>
      </div>
    </div>
    <div class="home-footer">
      <div class="inner">
        Created by <a href="#">10116122 IT9 Mochamad Iqbal Dwi Cahyo</a>.
      </div>
    </div>
  </body>
</html>