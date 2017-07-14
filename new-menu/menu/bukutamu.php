<?php
    include($_SERVER['DOCUMENT_ROOT'] . "/config/database.php");

    $db = Database::connect();
    $sql = "SELECT * FROM guest";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>(Tugas Besar HTML) E-Learning - Metode pembelajaran interaktif</title>
  <link href="../../stylesheets/main.css" rel="stylesheet">
</head>
  <body class="page-launcher-icon-generator form-field-drop-target">
    <div class="main-container">
      <div class="outputs-panel show-grid">
        <label class="checkbox" id="grid-toggle-container">Menu ini hanya tersedia untuk admin</label>
        <div class="outputs-items">
          <div class="outputs-main">
            <div class="outputs-image-block">
              <div class="outputs-label">
                <?php
                    try {
                        $result = $db->query($sql);
                        echo '<table border=1>';
                        echo '<tr>';
                        echo '<th>Name</th>';
                        echo '<th>Address</th>';
                        echo '<th>Email</th>';
                        echo '<th>Gender</th>';
                        echo '<th>Comments</th>';
                        echo '<th>Berkunjung pada</th>';
                        echo '<th>Aksi</th>';
                        echo '</tr>';
                        foreach ($result as $row) {
                        // while ($row = $q->fetch_assoc()) {
                          $gender = '';
                          if ($row['gender'] == 'l') $gender = 'Laki-laki';
                          else $gender = 'Perempuan';
                            echo '<tr>';
                                echo '<td>'. $row['name'] . '</td>';
                                echo '<td>'. $row['address'] . '</td>';
                                echo '<td>'. $row['email'] . '</td>';
                                echo '<td>'. $gender . '</td>';
                                echo '<td>'. $row['comment'] . '</td>';
                                echo '<td>'. $row['visit'] . '</td>';
                                echo '<td><a href="konfirmasi.php?id='.$row['id'].'">Hapus</a></td>';
                            echo '</tr>';
                        }
                        echo '</table>';
                    } catch(PDOException $ex) {
                        // if error persisted
                        die($ex->getMessage());
                    }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body> 
</html>