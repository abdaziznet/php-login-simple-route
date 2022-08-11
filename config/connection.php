<?php
$serverName = "ABD-LEGS7";
$dbName = "login-db";
$userName = "sa";
$password = "P@ssw0rd!";

try {
    //create PDO connection 
    $db = new PDO("sqlsrv:Server=$serverName;Database=$dbName", $userName, $password);
} catch (PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}    
