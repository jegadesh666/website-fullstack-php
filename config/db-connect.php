<?php
$servername = 'localhost';
$username = 'u268482469_jegamech666';
$password = 'Jegamech666@';
$dbname = 'u268482469_myweb';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
} catch (PDOException $e) {
    echo 'connection failed' . $e->getMessage();
}
