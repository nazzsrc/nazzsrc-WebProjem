<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>İşlem Sonucu | Huriyenaz Sarıca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-5">
    <div class="container bg-white p-4 shadow rounded">
        <?php
        // 1. LOGIN KONTROLÜ
        if (isset($_POST['loginButon'])) {
            $email = $_POST['email'];
            $pass = $_POST['password'];

            if ($email == "b241210063@sakarya.edu.tr" && $pass == "b241210063") {
                echo "<div class='alert alert-success'><h2>Hoşgeldiniz b241210063</h2></div>";
                echo "<p>Giriş işleminiz başarıyla gerçekleşti.</p>";
                echo "<a href='index.php' class='btn btn-primary'>Ana Sayfaya Dön</a>";
            } else {
                header("Location: login.php?hata=1");
                exit();
            }
        } 
        
        // 2. İLETİŞİM FORMU VERİLERİNİ YAZDIRMA
        else if (isset($_POST['adsoyad'])) {
            echo "<h2>Form Gönderim Detayları</h2><hr>";
            echo "<p><strong>Ad Soyad:</strong> " . htmlspecialchars($_POST['adsoyad']) . "</p>";
            echo "<p><strong>E-posta:</strong> " . htmlspecialchars($_POST['email']) . "</p>";
            echo "<p><strong>Telefon:</strong> " . htmlspecialchars($_POST['tel']) . "</p>";
            echo "<p><strong>Konu:</strong> " . htmlspecialchars($_POST['konu']) . "</p>";
            echo "<p><strong>Cinsiyet:</strong> " . (isset($_POST['cins']) ? $_POST['cins'] : 'Belirtilmedi') . "</p>";
            echo "<p><strong>Mesaj:</strong> " . htmlspecialchars($_POST['mesaj']) . "</p>";
            echo "<br><a href='index.php' class='btn btn-secondary'>Ana Sayfaya Dön</a>";
        } 
        
        else {
            echo "<h2>Hatalı Erişim!</h2>";
            echo "<a href='index.php' class='btn btn-danger'>Ana Sayfaya Dön</a>";
        }
        ?>
    </div>
</body>
</html>




