<?php
include 'db.php';

$sql = 'SELECT * FROM `krygerparken`';

 $stmt = $dbh->prepare($sql);
 $stmt->execute();
 $fetch = $stmt->fetchAll();


 
?>
<html>
    <head>
        <title>Krugerparken</title>
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
                    <li><p>Populära städer</p>
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
                    <h1>Krugerparken</h1>
                    <div class="kapstadenbild">
                        <img id="kapstaden" src="img/krugerparken2.jpg" alt="krugerparken2">
                        <img id="kapstaden1" src="img/krugerparken3.jpg" alt="krugerparken3">

                    </div>

                    <div class="article" id="kapstaden4">
                        <img src="img/krugerparken1.jpg" alt="krugerparken1">
                        <div class="textkap">
                    <?php echo $fetch['0']['2']?>                         </div>
                    </div>

                    <div class="article" id="kapstaden2">
                        <img src="img/krugerparken4.jpg" alt="krugerparken4">
                        <div class="textkap">
                    <?php echo $fetch['1']['2']?>                         </div>
                    </div>


                </article>
            </section>
            <div id="footer"><p>Denna sida är ett skolprojekt, alltså inte tillgänglig.
                <a href="login.php" id="login">Logga in</a></p></div>




        </div>
    </body>
</html>
