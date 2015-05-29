<!DOCTYPE html>
<?php
include 'db.php';

session_start();

if (isset($_POST['logout'])) {
    $_SESSION["login"] = 0;
    header ('Location: index.php');

}
?>
 <html>
    <head>
        <meta charset="UTF-8">
        <title>Logga in som administratör.</title>
    </head>
    <body>
        <?php
            echo "<form method = 'POST' action='doLogin.php'>
        <p>Användarnamn:</p> <input type = 'text' value= '' name = 'userName' required>
        <p>Lösenord:</p><input type = 'password' value= '' name = 'password' required>
        <input type = 'submit' value = 'Logga in'>
        </form>";
            
            echo "<form method = 'POST' action='index.php'>
        <br><input type = 'submit' value = 'Tillbaka till förstasidan'>
        </form>";

        ?>
    </body>
</html>
        
        