<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Login | Huriyenaz Sarıca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f4f7f6; }
        .login-container { max-width: 400px; margin-top: 100px; }
    </style>
</head>
<body>
    <div class="container login-container">
        <div class="card shadow-lg border-0">
            <div class="card-header bg-primary text-white text-center">
                <h4>Öğrenci Giriş Sistemi</h4>
            </div>
            <div class="card-body p-4">
                <form action="islem.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Kullanıcı Adı (Email)</label>
                        <input type="email" name="email" class="form-control" placeholder="b241210063@sakarya.edu.tr" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Şifre</label>
                        <input type="password" name="password" class="form-control" placeholder="b241210063" required>
                    </div>
                    <button type="submit" name="loginButon" class="btn btn-primary w-100">Giriş Yap</button>
                </form>
                <?php if(isset($_GET['hata'])): ?>
                    <div class="alert alert-danger mt-3 py-2 text-center">Hatalı Giriş!</div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>

