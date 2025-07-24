<?php
include 'config.php';

$sql = "SELECT * FROM Musteriler";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Müşteri Listesi</title>
</head>
<body>
    <h1>Müşteri Listesi</h1>
    <table border=\"1\">
        <tr>
            <th>ID</th>
            <th>Ad</th>
            <th>Soyad</th>
            <th>Telefon</th>
            <th>Eposta</th>
            <th>Adres</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['MusteriID']; ?></td>
                <td><?php echo $row['Ad']; ?></td>
                <td><?php echo $row['Soyad']; ?></td>
                <td><?php echo $row['Telefon']; ?></td>
                <td><?php echo $row['Eposta']; ?></td>
                <td><?php echo $row['Adres']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
