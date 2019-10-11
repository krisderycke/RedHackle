<?php

define('DB_SERVER', '192.168.10.10');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'redhackle');
 
/* Attempt to connect to MySQL database */
try{
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "great succes!";
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
?>