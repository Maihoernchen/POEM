<?php
$servername = "localhost";
$username = "maihoernchen_admin";
$password = "Emil1@1@";

try {
  $conn = new PDO("mysql:host=$servername;port=3306;dbname=maihoernchen_users", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>