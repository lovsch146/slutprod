<?php
include 'db.php';

session_start();

        $nyText = filter_input(INPUT_POST, 'nyText', FILTER_SANITIZE_SPECIAL_CHARS);
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $tabel = filter_input(INPUT_POST, 'tabel', FILTER_SANITIZE_SPECIAL_CHARS);
        
        $sql = "UPDATE `$tabel` SET `nyText`=:nyText WHERE `name`=:name";

        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(":nyText", $nyText);
        $stmt->bindParam(":name", $name);
        $stmt->execute();     
 
    header('Location: admin'.$tabel.'.php');
    ?>