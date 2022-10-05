<?php
try {
    $host = "localhost";
    $dbname = "short_urls";
    $user = "root";
    $pw = "";

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pw);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error is:" . $e->getMessage();
}
