<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Genel Sayfa Düzenlemeleri */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #2c3e50;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        header .logo h1 {
            margin: 0;
            font-size: 24px;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 15px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        /* Kayıt Formu Bölümü */
        .signup-form {
            width: 100%;
            max-width: 400px;
            margin: 50px auto;
            padding: 30px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .signup-form h2 {
            text-align: center;
            font-size: 28px;
            margin-bottom: 20px;
            color: #34495e;
        }

        .signup-form label {
            display: block;
            font-size: 14px;
            color: #34495e;
            margin-bottom: 8px;
        }

        .signup-form input[type="text"],
        .signup-form input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            color: #2c3e50;
        }

        .signup-form input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .signup-form input[type="submit"]:hover {
            background-color: #2980b9;
        }

        /* Footer */
        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 15px;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">
        <h1>Yakıt İstasyonu</h1>
    </div>
    <nav>
        <ul>
            <li><a href="index.php">Anasayfa</a></li>
            <li><a href="login.php">Giriş Yap</a></li>
        </ul>
    </nav>
</header>

<section class="signup-form">
    <h2>Kayıt Ol</h2>
    <form action="login.php" method="POST">
        <label for="username">Kullanıcı Adı</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Şifre</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Kayıt Ol">
    </form>
</section>

<footer>
    <p>© 2024 Yakıt İstasyonu Yönetim Sistemi</p>
</footer>

</body>
</html>
