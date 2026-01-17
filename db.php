<?php
$servername = "sql304.infinityfree.com";
$username = "if0_40924350";
$password = "123Bini456";
$dbname = "if0_40924350_fana_news";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
