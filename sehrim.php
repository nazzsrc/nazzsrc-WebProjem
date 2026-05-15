<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Şehrim | Antalya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Bu sayfaya özel estetik dokunuşlar */
        .carousel-item img {
            border-radius: 15px;
            filter: brightness(0.9);
            transition: 0.5s;
        }
        .carousel-item img:hover {
            filter: brightness(1);
        }
        .city-card {
            background: white;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-top: -50px;
            position: relative;
            z-index: 10;
        }
        .badge-custom {
            background: #2a5298;
            color: white;
            padding: 8px 15px;
            border-radius: 50px;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">HURİYENAZ SARICA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto text-center">
                    <li class="nav-item"><a class="nav-link" href="index.php">Hakkında</a></li>
                    <li class="nav-item"><a class="nav-link" href="ozgecmis.php">Özgeçmiş</a></li>
                    <li class="nav-item"><a class="nav-link active" href="sehrim.php">Şehrim</a></li>
                    <li class="nav-item"><a class="nav-link" href="mirasimiz.php">Mirasımız</a></li>
                    <li class="nav-item"><a class="nav-link" href="ilgialanlarim.php">İlgi Alanlarım</a></li>
                    <li class="nav-item"><a class="nav-link" href="iletisim.php">İletişim</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-warning text-dark fw-bold ms-lg-3 px-4" href="login.php">LOGİN</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div id="antalyaSlider" class="carousel slide carousel-fade shadow-lg rounded-4" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#antalyaSlider" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#antalyaSlider" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#antalyaSlider" data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#antalyaSlider" data-bs-slide-to="3"></button>
            </div>
            <div class="carousel-inner rounded-4">
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-15420518418c7-d2a420be9917?auto=format&fit=crop&w=1200&q=80" class="d-block w-100" style="height:500px; object-fit:cover;" alt="Antalya Kaleiçi">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="display-5 fw-bold">Tarihin Kalbi: Kaleiçi</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1527838832702-585f23df82a7?auto=format&fit=crop&w=1200&q=80" class="d-block w-100" style="height:500px; object-fit:cover;" alt="Antalya Deniz">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="display-5 fw-bold">Akdeniz'in İncisi</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1619213190883-96b026cc2382?auto=format&fit=crop&w=1200&q=80" class="d-block w-100" style="height:500px; object-fit:cover;" alt="Aspendos">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="display-5 fw-bold">Eşsiz Mimari: Aspendos</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1626244791334-a698305602ce?auto=format&fit=crop&w=1200&q=80" class="d-block w-100" style="height:500px; object-fit:cover;" alt="Düden Şelalesi">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="display-5 fw-bold">Doğa Harikası: Düden</h2>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#antalyaSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#antalyaSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <div class="city-card text-center mb-5">
            <span class="badge-custom mb-3">Turizmin Başkenti</span>
            <h1 class="fw-bold mb-4">Gözbebeğim Antalya</h1>
            <div class="row g-4 text-start">
                <div class="col-md-7">
                    <h4 class="text-primary border-bottom pb-2">Şehir Hakkında</h4>
                    <p class="lead">Antalya, Türkiye'nin güneyinde, Akdeniz kıyısında yer alan, turizmin başkenti olarak bilinen muhteşem bir şehirdir. Hem tarihi dokusu hem de doğal güzellikleriyle dünyanın dört bir yanından gelen misafirleri büyülemektedir.</p>
                    <div class="alert alert-info">
                        <strong>Nüfus:</strong> Yaklaşık 2.6 Milyon kişiye ev sahipliği yapmaktadır.
                    </div>
                </div>
                <div class="col-md-5">
                    <h4 class="text-primary border-bottom pb-2">Mutlaka Gezilmesi Gerekenler</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">📍 <b>Kaleiçi (Old Town):</b> Dar sokaklar ve tarihi evler.</li>
                        <li class="list-group-item">🌊 <b>Düden Şelalesi:</b> Denize dökülen eşsiz doğa.</li>
                        <li class="list-group-item">🏛️ <b>Aspendos:</b> Dünyanın en iyi korunmuş antik tiyatrosu.</li>
                        <li class="list-group-item">🏖️ <b>Konyaaltı Plajı:</b> Mavi bayraklı kristal sular.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center">
        <p>&copy; 2026 Huriyenaz Sarıca - Tüm Hakları Saklıdır.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>