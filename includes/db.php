<?php

session_start();

require('./includes/functies.php');

$host = "127.0.0.1"; // of localhost
$dbname = "beer_list"; // de databanknaam
$username = "root"; // de username
$password = ""; // het wachtwoord

// de data source name
$dsn = "mysql:host=$host;dbname=$dbname";

// extra connectie opties
$options = [
   PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
   PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

// probeer een databank connectie te maken
try {
   $pdo = new PDO($dsn, $username, 
        $password, $options);
} catch (PDOException $e) {
   die("Connection failed" . $e->getMessage());
}

?>