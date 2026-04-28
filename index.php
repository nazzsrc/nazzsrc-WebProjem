<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkımda | Web Teknolojileri Projesi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body { font-family: 'Poppins', sans-serif; background-color: #f4f7f6; }
        .hero-section { background: linear-gradient(135deg, #2c3e50, #3498db); color: white; padding: 60px 0; border-radius: 0 0 50px 50px; }
        .profile-img { border: 5px solid white; transition: transform 0.3s; }
        .profile-img:hover { transform: scale(1.05); }
        .card { border: none; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        .feature-icon { font-size: 2rem; color: #3498db; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">B241210063</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto text-center">
                    <li class="nav-item"><a class="nav-link active px-3" href="index.php">Hakkımda</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="cv.php">Özgeçmiş</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="sehrim.php">Şehrim</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="mirasimiz.php">Mirasımız</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="ilgi-alanlarim.php">İlgi Alanlarım</a></li>
                    <li class="nav-item"><a class="nav-link px-3" href="iletisim.php">İletişim</a></li>
                    <li class="nav-item"><a class="btn btn-primary ms-lg-3 rounded-pill" href="login.php">Giriş Yap</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero-section text-center mb-5">
        <div class="container">
            <img src="profil.jpg" class="rounded-circle profile-img mb-4 shadow" width="180" height="180" alt="Profil Fotoğrafı">
            <h1 class="display-4 fw-bold">Merhaba, Ben Huriyenazz Sarıca</h1>
            <p class="lead"> Bilgisayar Mühendisi </p>
        </div>
    </header>

    <main class="container">
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="card p-4 h-100">
                    <h2 class="mb-4 text-primary">Kısa Bir Yolculuk</h2>
                    <p>Sakarya Üniversitesi Bilgisayar Mühendisliği bölümünde 2.sınıfım . Teknolojiye olan merakım, çocuk yaşlarda bilgisayarları kurcalamamla başladı ve bugün profesyonel bir tutkuya dönüştü.</p>
                    <p>Bu projede, dönem boyunca öğrendiğimiz <strong>HTML5, CSS3, JavaScript ve PHP</strong> teknolojilerini harmanlayarak modern bir web uygulaması geliştirmeyi amaçladım. Benim için web, sadece kodlardan ibaret değil; bir tasarım ve sanat alanıdır.</p>
                    
                    <h3 class="mt-4">Ne Yapıyorum?</h3>
                    <div class="row text-center mt-3">
                        <div class="col-4">
                            <div class="feature-icon">💻</div>
                            <p class="small">Frontend</p>
                        </div>
                        <div class="col-4">
                            <div class="feature-icon">⚙️</div>
                            <p class="small">Backend</p>
                        </div>
                        <div class="col-4">
                            <div class="feature-icon">📱</div>
                            <p class="small">Responsive</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card p-4 h-100">
                    <h2 class="text-primary mb-4">Hobilerim</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-transparent">📚 Teknik Kitaplar Okumak</li>
                        <li class="list-group-item bg-transparent">🎾 Tenis Oynamak</li>
                        <li class="list-group-item bg-transparent">    Kamp yapmak </li>
                        <li class="list-group-item bg-transparent">✈️ Yeni Şehirler Keşfetmek</li>
                        <li class="list-group-item bg-transparent">🎧 Podcast Dinlemek</li>
                    </ul>
                    
                    <div class="mt-4">
                        <h4 class="h6 fw-bold">Bağlantılar</h4>
                        <a href="https://github.com/nazzsrc" target="_blank" class="btn btn-outline-dark btn-sm w-100 mt-2">GitHub Profilim</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-white text-center py-4 mt-5">
        <div class="container">
            <p class="mb-0">© 2026 Web Teknolojileri Projesi - B241210063</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>