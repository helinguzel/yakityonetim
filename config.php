<?php
$servername = "localhost";
$username = "root"; // Varsayılan kullanıcı adı
$password = ""; // Varsayılan şifre (boş olabilir)
$database = "sakilla"; // Veritabanı adı

// Veritabanına bağlan
$conn = new mysqli($servername, $username, $password, $database);

// Bağlantıyı kontrol et
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}
?>
