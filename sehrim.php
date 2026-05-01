<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Şehrim | Antalya</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Huriyenaz Sarıca</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="index.php">Hakkında</a>
                <a class="nav-link" href="sehrim.php">Şehrim</a>
                <a class="nav-link" href="ilgialanlarim.php">İlgi Alanlarım</a>
                <a class="nav-link" href="iletisim.php">İletişim</a>
                <a class="nav-link btn btn-primary text-white ms-2" href="login.php">Login</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Gözbebeğim Antalya</h2>
        
        <div id="antalyaSlider" class="carousel slide mb-5" data-bs-ride="carousel">
            <div class="carousel-inner shadow rounded">
                <div class="carousel-item active">
                    <img src="https://images.unsplash.com/photo-15420518418c7-d2a420be9917?w=800" class="d-block w-100" style="height:400px; object-fit:cover;" alt="Kaleiçi">
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1527838832702-585f23df82a7?w=800" class="d-block w-100" style="height:400px; object-fit:cover;" alt="Konyaaltı">
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1619213190883-96b026cc2382?w=800" class="d-block w-100" style="height:400px; object-fit:cover;" alt="Aspendos">
                </div>
                <div class="carousel-item">
                    <img src="https://images.unsplash.com/photo-1626244791334-a698305602ce?w=800" class="d-block w-100" style="height:400px; object-fit:cover;" alt="Düden">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#antalyaSlider" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#antalyaSlider" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h3>Antalya Hakkında</h3>
                <p>Nüfus: 2,6 Milyon (Yaklaşık)</p>
                <p>Antalya, Türkiye'nin güneyinde, Akdeniz kıyısında yer alan, turizmin başkenti olarak bilinen muhteşem bir şehirdir.</p>
            </div>
            <div class="col-md-6">
                <h3>Gezilecek Yerler</h3>
                <ul class="list-group">
                    <li class="list-group-item">Kaleiçi (Old Town)</li>
                    <li class="list-group-item">Düden ve Kurşunlu Şelaleleri</li>
                    <li class="list-group-item">Aspendos Antik Tiyatrosu</li>
                    <li class="list-group-item">Konyaaltı Plajı</li>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>