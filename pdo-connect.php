<?php
$host = ""; // MySQL sunucu adresi
$database = ""; // Kullanılacak veritabanı adı
$username = ""; // MySQL kullanıcı adı
$password = ""; // MySQL şifre

// PDO bağlantısını oluştur
try {
    $db = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Hata ayıklama modunu etkinleştir
} catch(PDOException $e) {
    echo "Bağlantı hatası: " . $e->getMessage();
    exit;
}