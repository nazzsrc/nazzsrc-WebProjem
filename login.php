<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Giriş Yap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-primary d-flex align-items-center" style="height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card p-4 shadow-lg border-0 rounded-4">
                    <h3 class="text-center mb-4">Öğrenci Girişi</h3>
                    <form action="islem.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label small text-muted">Kullanıcı Adı (E-posta)</label>
                            <input type="text" name="user" class="form-control" placeholder="g2412100xx@sakarya.edu.tr">
                        </div>
                        <div class="mb-3">
                            <label class="form-label small text-muted">Şifre (Öğrenci No)</label>
                            <input type="password" name="pass" class="form-control" placeholder="g2412100xx">
                        </div>
                        <button type="submit" name="login_btn" class="btn btn-primary w-100 py-2">Giriş Yap</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>