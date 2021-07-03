<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";

try {
$pdo = new PDO("mysql:host=$servername;dbname=sima", $username, $password);

} catch(PDOException $e) {
echo "no se pudo realizar :( " . $e->getMessage();
}
?>