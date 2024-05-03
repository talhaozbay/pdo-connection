<?php
$host = ""; // MySQL sunucu adresi
$veritabani = ""; // Kullanılacak veritabanı adı
$kullanici = ""; // MySQL kullanıcı adı
$sifre = ""; // MySQL şifre

// PDO bağlantısını oluştur
try {
    $db = new PDO("mysql:host=$host;dbname=$veritabani", $kullanici, $sifre);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Hata ayıklama modunu etkinleştir
} catch(PDOException $e) {
    echo "Bağlantı hatası: " . $e->getMessage();
    exit;
}