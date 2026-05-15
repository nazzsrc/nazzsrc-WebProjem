<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>İlgi Alanlarım | API</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body onload="fetchMovies()">
    <div class="container my-5">
        <h2 class="text-center mb-5">Favori Filmlerim (OMDb API)</h2>
        <div id="movie-list" class="row g-4">
            </div>
    </div>

    <script>
        async function fetchMovies() {
            const response = await fetch('https://www.omdbapi.com/?s=batman&apikey=e0623fd0');
            const data = await response.json();
            const list = document.getElementById('movie-list');
            
            data.Search.forEach(movie => {
                list.innerHTML += `
                    <div class="col-md-3">
                        <div class="card h-100 shadow-sm border-0">
                            <img src="${movie.Poster}" class="card-img-top" style="height:350px; object-fit:cover;">
                            <div class="card-body">
                                <h6 class="card-title">${movie.Title}</h6>
                                <p class="card-text text-muted">${movie.Year}</p>
                            </div>
                        </div>
                    </div>
                `;
            });
        }
    </script>
</body>
</html>