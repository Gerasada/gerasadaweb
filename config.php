<?php

$host = "127.0.0.1";
$username = "root";
$password = "";
$database = "image_upload_form";

$pdo = new PDO('mysql:host=' . $host . ';dbname=' . $database, $username, $password);

if (!$pdo) {
    die("Failed to connect with database.");
}