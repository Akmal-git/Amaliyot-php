<?php
$servername = "localhost";
$username = 'root';
$password = "Egamberdiyev"; 
$database = "amaliyot-birinchi-php";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $err) {     
    echo "Connected failed : " . $err->getMessage();
}
