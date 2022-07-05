<?php
$host = "localhost";
$username = "root";
$password = "Nab@Jan1";
$dbname = "projet1";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connection Successfully";

} catch (PDOException $e) {
    echo "Connection failed".$e->getMessage();
}
