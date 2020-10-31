<?php
$servername = "localhost";
$username = "battensh_eben";
$password = "Nigeria4real@";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=battensh_cu_clearance", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    // echo "Connection failed: " . $e->getMessage();
}
?>