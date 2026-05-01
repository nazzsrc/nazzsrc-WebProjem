<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>İlgi Alanlarım | API</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Huriyenaz Sarıca</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="index.php">Hakkında</a>
                <a class="nav-link" href="ozgecmis.php">Özgeçmiş</a>
                <a class="nav-link" href="sehrim.php">Şehrim</a>
                <a class="nav-link" href="mirasimiz.php">Mirasımız</a>
                <a class="nav-link" href="ilgialanlarim.php">İlgi Alanlarım</a>
                <a class="nav-link" href="iletisim.php">İletişim</a>
                <a class="nav-link btn btn-primary text-white ms-2" href="login.php">Login</a>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="mb-4">İlgi Alanlarım: Favori Filmlerim (API)</h2>
        <p>Aşağıdaki bilgiler OMDb API aracılığıyla gerçek zamanlı çekilmektedir:</p>
        
        <div id="film-container" class="row g-4">
            <div class="text-center">Yükleniyor...</div>
        </div>
    </div>

    <script>
        // Ücretsiz bir film API'sinden veri çekme (Batman filmleri örneği)
        async function fetchMovies() {
            const container = document.getElementById('film-container');
            try {
                const response = await fetch('https://www.omdbapi.com/?s=batman&apikey=fc1fef96');
                const data = await response.json();
                
                container.innerHTML = ''; // Yükleniyor yazısını sil
                
                data.Search.slice(0, 4).forEach(movie => {
                    container.innerHTML += `
                        <div class="col-md-3">
                            <div class="card h-100 shadow-sm">
                                <img src="${movie.Poster}" class="card-img-top" alt="${movie.Title}">
                                <div class="card-body">
                                    <h5 class="card-title">${movie.Title}</h5>
                                    <p class="card-text text-muted">${movie.Year}</p>
                                </div>
                            </div>
                        </div>
                    `;
                });
            } catch (error) {
                container.innerHTML = 'API verisi çekilirken bir hata oluştu.';
            }
        }

        fetchMovies();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

