<?php
session_start();

// Form gönderimi varsa, SESSION değişkenlerini ayarla
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['fuel_type'] = isset($_POST['fuel_type']) ? $_POST['fuel_type'] : '';
    $_SESSION['fuel_quantity'] = isset($_POST['fuel_quantity']) ? $_POST['fuel_quantity'] : '';
    $_SESSION['sales'] = isset($_POST['sales']) ? $_POST['sales'] : '';
}

// SESSION değerlerini kontrol ederek değişkenleri ata
$fuel_type = isset($_SESSION['fuel_type']) ? $_SESSION['fuel_type'] : '';
$fuel_quantity = isset($_SESSION['fuel_quantity']) ? $_SESSION['fuel_quantity'] : '';
$sales = isset($_SESSION['sales']) ? $_SESSION['sales'] : '';
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetim Paneli</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <div class="logo">
        <h1>Yakıt İstasyonu</h1>
    </div>
    <nav>
        <ul>
            <li><a href="index.php">Anasayfa</a></li>
            <li><a href="login.php">Çıkış Yap</a></li>
        </ul>
    </nav>
</header>

<section class="form-section">
    <h2>Yakıt Yönetimi</h2>
    <form method="POST" action="dashboard.php">
        <label for="fuel_type">Yakıt Türü:</label>
        <select id="fuel_type" name="fuel_type" required>
            <option value="Benzin" <?php if ($fuel_type === "Benzin") echo "selected"; ?>>Benzin</option>
            <option value="Dizel" <?php if ($fuel_type === "Dizel") echo "selected"; ?>>Dizel</option>
            <option value="LPG" <?php if ($fuel_type === "LPG") echo "selected"; ?>>LPG</option>
        </select>

        <label for="fuel_quantity">Mevcut Yakıt Miktarı (litre):</label>
        <input type="number" id="fuel_quantity" name="fuel_quantity" value="<?php echo htmlspecialchars($fuel_quantity); ?>" required>

        <label for="sales">Satış Tutarı (TL):</label>
        <input type="number" id="sales" name="sales" value="<?php echo htmlspecialchars($sales); ?>" required>

        <input type="submit" value="Verileri Kaydet">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <div class="result">
            <h3>Kaydedilen Bilgiler</h3>
            <p><strong>Yakıt Türü:</strong> <?php echo htmlspecialchars($fuel_type); ?></p>
            <p><strong>Mevcut Yakıt Miktarı:</strong> <?php echo htmlspecialchars($fuel_quantity); ?> litre</p>
            <p><strong>Satış Tutarı:</strong> <?php echo htmlspecialchars($sales); ?> TL</p>
        </div>
    <?php endif; ?>
</section>

<footer>
    <p>© 2024 Yakıt İstasyonu Yönetim Sistemi</p>
</footer>

</body>
</html>
