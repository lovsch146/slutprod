<!DOCTYPE html>
<html>
    <head>
        <title>Sydafrika</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="sydafrika.css">
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
        <!-- include Cycle plugin -->
        
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
                    <li><a href="index.php">Hem</a></li> 
                    <li><p>Populära städer</p>
                        <ul>
                            <li><a href="kapstaden.php">Kapstaden</a></li>
                            <li><a href="krygerparken.php">Krygerparken</a></li>
                        </ul>
                    </li>

                    <li><a href="om.php">Om Sydafrika </a>
                    </li>
                    <li><a href="kontakta.php">Kontakta</a></li>
                </ul>
            </nav>


            <section>
                <article>
             <form action="kontakt.php" method="post" class="mailbox">  <!--sidan skickas till sig själv--> 

                        <h1>Kontakt</h1>
                        <div class="mailbox">
                         
                             <p>
                            <label for="uname">Namn:
                                <strong title="Obligatoriskt">*</strong> <!--kontroll att det är ifyllt--> 
                            </label>
                            <input type="text" name="uname" id="uname" required placeholder="Förnamn Efternamn" />
                        </p>

                        <p>
                            <label for="umail">Mailadress:
                                <strong title="Obligatoriskt">*</strong>
                            </label>
                            <input type="email" name="umail" id="umail" required placeholder="mail@gmail.com" />
                        </p>
                            <p>
                            <label>Ärende/ämne:
                                <strong title="Obligatoriskt">*</strong> <!--kontroll att det är ifyllt--> 
                            </label>
                            <input type="text" name="usubjekt" id="usubjekt" required placeholder="Minst 5 tecken" />
                        </p>

                        <label>Meddelande:
                            <strong title="Obligatoriskt">*</strong> <!--kontroll att det är ifyllt--> 
                        </label>
                        <textarea  name="umessage" id="umessage" required placeholder="Ditt meddelande"></textarea> 

                        <br>


                        <button value="Skicka in!" onclick="alert('Tack för din fråga, jag svarar så fort jag kan! Det vill säga om du har fyllt i alla fält!')">Skicka</button>
                        </div>

                        

                    </form>
                    </article>
            </section>

             <div id="footer"><p>Denna sida är ett skolprojekt, alltså inte tillgänglig.<a href="login.php" id="login">Logga in</a>
                 </p></div>

        </div>
        

    </body>
</html>
