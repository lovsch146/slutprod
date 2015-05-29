<?php
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
                    <li><a id="topleft" href="index.php">Hem</a></li> 
                    <li><a href="#">Populära städer</a>
                        <ul>
                            <li><a href="kapstaden.php">Kapstaden</a></li>
                            <li><a href="krygerparken.php">Krugerparken</a></li>
                        </ul>
                    </li>

                    <li><a href="om.php">Om Sydafrika </a>
                    </li>
                    <li><a id="topright" href="kontakta.php">Kontakta</a></li>
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
                            <?php echo $fetch['0']['0'] ?>                  
                        </div>

                        <div class="text2">
                            <img src="img/bil.jpg" alt="liten">
                        <?php echo $fetch['1']['0'] ?>                       
                        </div>

                        <div class="text3">
                            <img src="img/giraff.jpg" alt="liten">
                        <?php echo $fetch['2']['0']?>                           
                        </div>

                        <div class="text4">
                            <img src="img/sand.jpg" alt="liten">
                        <?php echo $fetch['3']['0']?>                           
                        </div>
                    </div>
                </article>
            </section>

            <div id="footer"><p>Denna sida är ett skolprojekt, alltså inte tillgänglig.
                    <a href="login.php" id="login">Logga in</a>
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
