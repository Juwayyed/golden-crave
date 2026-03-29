<?php
try {
//Host
define("HOST", "localhost");

//DB Name
define("DBNAME", "golden-crave");

//User
define("USER", "root");

//Password
define("PASS", "");

$connection = new PDO("mysql:host=".HOST.";dbname=".DBNAME."", USER, PASS);
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch ( PDOException $Exception) {
    echo $Exception->getMessage( );
}