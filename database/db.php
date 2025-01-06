<?php
$host = 'localhost'; // Ganti dengan host database Anda
$db = 'db_lapor_park'; // Ganti dengan nama database Anda
$user = 'username'; // Ganti dengan username database Anda
$pass = 'password'; // Ganti dengan password database Anda

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
?>