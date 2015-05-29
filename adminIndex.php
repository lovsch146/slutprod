<?php
session_start();
if($_SESSION["login"] == 1){


include 'db.php';

$sql = 'SELECT * FROM `index`';

 $stmt = $dbh->prepare($sql);
 $stmt->execute();
 $fetch = $stmt->fetchAll();

?>

<html>
    <head>
        <title>Hem</title>
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
                    <div class="slideshow">
                        <ul>
                            <li><img src="img/giraffslideshow.jpg" alt="slideshow1" height="450"></li>
                            <li><img src="img/vattenslideshow.jpg" alt="slideshow2"></li>
                            <li><img src="img/zebraslideshow.jpg" alt="slideshow3"></li>
                            <li><img src="img/bergslideshow.jpg" alt="slideshow4"></li>
                            <li><img src="img/dimmaslideshow.jpg" alt="slideshow5"></li>
                        </ul>

                    </div>

                    <div class="text">
                        <div class="text1">
                            <img src="img/elefant.jpg" alt="liten">
                            <?php 
                                echo' <form method="POST" id="userForm" action="doChange.php">
                                <input type="hidden" value="p1" name="name">
                                <input type="hidden" value="index" name="tabel">
                                <textarea rows="40" cols="28" name="nyText">'.$fetch['0']['0'].'</textarea>
                            <input type="submit" name="uppdateraInd1" value="Uppdatera">
                            </form>'; 
                                    ?>
                        </div>

                        <div class="text2">
                            <img src="img/bil.jpg" alt="liten">
                           <?php
                            echo'<form method="POST" id="userForm" action="doChange.php">
                                <input type="hidden" value="p2" name="name">
                                <input type="hidden" value="index" name="tabel">
                                <textarea rows="40" cols="28" name="nyText">'.$fetch['1']['0'].'</textarea>
                            <input type="submit" name="uppdateraInd2" value="Uppdatera">
                            </form>'; 
                                    ?>
                        </div>

                        <div class="text3">
                            <img src="img/giraff.jpg" alt="liten">
                            <?php
                            echo'<form method="POST" id="userForm" action="doChange.php">
                                <input type="hidden" value="p3" name="name">
                                <input type="hidden" value="index" name="tabel">
                                <textarea rows="40" cols="28" name="nyText">'.$fetch['2']['0'].'</textarea>
                            <input type="submit" name="uppdateraInd3" value="Uppdatera">
                            </form>';
                            ?>
                        </div>

                        <div class="text4">
                            <img src="img/sand.jpg" alt="liten">
                            <?php
                            echo '<form method="POST" id="userForm" action="doChange.php">
                                <input type="hidden" value="p4" name="name">
                                <input type="hidden" value="index" name="tabel">
                                <textarea rows="40" cols="27" name="nyText">'.$fetch['3']['0'].'</textarea>
                                <input type="submit" name="uppdateraInd4" value="Uppdatera">
                            </form>';
                            ?>
                        </div>
                    </div>
                    <!--hej-->
                </article>
            </section>
            <!--Kolla logga ut-->
            <div id="footer"><p>Denna sida är ett skolprojekt, alltså inte tillgänglig.
                    <a href="doLogOut.php" id="login">Logga ut</a> 
                </p>

            </div>
            </div>

        


        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script src="http://unslider.com/unslider.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.slideshow').unslider();
            });
        </script>
    </body>

</html>
<?php

}
else{
    header('Location:index.php');
}