<?php
include 'db.php';

$sql = 'SELECT * FROM `kapstaden`';

 $stmt = $dbh->prepare($sql);
 $stmt->execute();
 $fetch = $stmt->fetchAll();


 
?>
<html>
    <head>
        <title>Kapstaden</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="sydafrika.css">
    </head>
    <body>


        <div id="wrapper">
            <div id="header">
                <div id="bildHeader">
                    <img src="img/gepard1.png" alt="gepard">

                </div>
            </div>

            <div id="loga"></div>

            <nav>
                <ul>
                    <li><a id="topleft" href="adminIndex.php">Hem</a></li> 
                    <li><p>Populära städer</p>
                        <ul>
                            <li><a href="adminKapstaden.php">Kapstaden</a></li>
                            <li><a href="adminKrygerparken.php">Krugerparken</a></li>
                        </ul>
                    </li>

                    <li><a href="adminOm.php">Om Sydafrika </a>
                    </li>
                    <li><a id="topright" href="adminKontakta.php">Kontakta</a></li>
                </ul>
            </nav>


            <section>
                <article>
                    <h1>Kapstaden</h1>
                    <div class="kapstadenbild">
                        <img id="kapstaden" src="img/kapstaden.jpg" alt="kapstaden">
                        <img id="kapstaden1" src="img/kapstaden1.jpg" alt="kapstaden1">

                    </div>

                    <div class="article" id="kapstaden4">
                        <img src="img/kapstaden4.jpg" alt="kapstaden4">
                        <?php 
                                echo' <form method="POST" id="userForm" action="doChange.php">
                                <input type="hidden" value="p1" name="name">
                                <input type="hidden" value="kapstaden" name="tabel">
                                <textarea rows="40" cols="29" name="nyText">'.$fetch['0']['1'].'</textarea>
                            <input type="submit" name="uppdateraInd1" value="Uppdatera">
                            </form>'; 
                                    ?>
                    </div>

                    <div class="article" id="kapstaden2">
                        <img src="img/kapstaden2.jpg" alt="kapstaden2">
                        <?php 
                                echo' <form method="POST" id="userForm" action="doChange.php">
                                <input type="hidden" value="p2" name="name">
                                <input type="hidden" value="kapstaden" name="tabel">
                                <textarea rows="40" cols="29" name="nyText">'.$fetch['1']['1'].'</textarea>
                            <input type="submit" name="uppdateraInd1" value="Uppdatera">
                            </form>'; 
                                    ?>
                    </div>


                </article>
            </section>
            <!--Kolla logga ut-->
            <div id="footer"><p>Denna sida är ett skolprojekt, alltså inte tillgänglig.
                    <a href="login.php" id="login">Logga ut</a> 
                </p>

            </div>





    </body>
</html>
