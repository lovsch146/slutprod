<?php

define("DB_SERVER", "berzanappen.se");
define("DB_USER", "berzanap_lovisa");
define("DB_PASSWORD", "fotonörd");
define("DB_NAME", "berzanap_lovisa");
$dbh = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_SERVER . ';charset=utf8', DB_USER, DB_PASSWORD);
