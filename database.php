<?php
$servername = "localhost";
$username = 'root';
$password = "Egamberdiyev"; 
$database = "php-blog";

try {
    $coon = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $coon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $err) {
    echo "Connected failed : " . $err->getMessage();
}
