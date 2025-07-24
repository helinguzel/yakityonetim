<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $telefon = $_POST['telefon'];
    $eposta = $_POST['eposta'];
    $adres = $_POST['adres'];

    $sql = "INSERT INTO Musteriler (Ad, Soyad, Telefon, Eposta, Adres) VALUES ('$ad', '$soyad', '$telefon', '$eposta', '$adres')";
    if ($conn->query($sql) === TRUE) {
        echo "Yeni müşteri başarıyla eklendi!";
    } else {
        echo "Hata: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Yeni Müşteri Ekle</title>
</head>
<body>
    <h1>Yeni Müşteri Ekle</h1>
    <form method=\"POST\" action=\"\">
        <label>Ad:</label><br>
        <input type=\"text\" name=\"ad\" required><br>
        <label>Soyad:</label><br>
        <input type=\"text\" name=\"soyad\" required><br>
        <label>Telefon:</label><br>
        <input type=\"text\" name=\"telefon\"><br>
        <label>Eposta:</label><br>
        <input type=\"email\" name=\"eposta\"><br>
        <label>Adres:</label><br>
        <textarea name=\"adres\"></textarea><br><br>
        <button type=\"submit\">Ekle</button>
    </form>
</body>
</html>
