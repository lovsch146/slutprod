<?php

include 'db.php';

session_start();

if (isset($_POST["userName"])) {
    $userName = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

    $sql = "SELECT * FROM `login` WHERE `userName`=:userName AND `password`=:password";

    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(":userName", $userName);
    $stmt->bindParam(":password", $password);
    $stmt->execute();
    $login = $stmt->fetchAll();
//    echo $sql;
//    var_dump($login);
}
if (!empty($login)) {
//    var_dump($login);
    $_SESSION["login"] = 1;
    $_SESSION["userName"] = $userName;
    header('Location:adminIndex.php');
} 
else{
    header('Location:login.php');
}

        
        ?>