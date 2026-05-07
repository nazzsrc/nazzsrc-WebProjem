<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>İletişim | Huriyenaz Sarıca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Huriyenaz</a>
            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="index.php">Hakkında</a>
                <a class="nav-link" href="iletisim.php">İletişim</a>
            </div>
        </div>
    </nav>

    <div id="app" class="container mt-5 p-4 bg-white shadow rounded">
        <h2 class="mb-4">İletişim Formu</h2>
        <form id="contactForm" action="islem.php" method="POST">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Ad Soyad</label>
                    <input type="text" id="adsoyad" name="adsoyad" v-model="form.adsoyad" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>E-posta</label>
                    <input type="email" id="email" name="email" v-model="form.email" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Telefon (Sadece Rakam)</label>
                    <input type="text" id="tel" name="tel" v-model="form.tel" class="form-control">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Konu</label>
                    <select name="konu" v-model="form.konu" class="form-select">
                        <option value="Destek">Destek</option>
                        <option value="Öneri">Öneri</option>
                    </select>
                </div>
                <div class="col-12 mb-3">
                    <label>Cinsiyet: </label>
                    <input type="radio" name="cins" value="Kadin" v-model="form.cins"> Kadın
                    <input type="radio" name="cins" value="Erkek" v-model="form.cins"> Erkek
                </div>
                <div class="col-12 mb-3">
                    <input type="checkbox" v-model="form.onay" name="onay"> Bilgilerimin doğruluğunu onaylıyorum.
                </div>
            </div>

            <div class="mt-4">
                <button type="button" class="btn btn-warning" onclick="validateNative()">Native JS ile Denetle</button>
                <button type="submit" class="btn btn-success" @click.prevent="validateVue">Vue.js ile Gönder</button>
                <button type="reset" class="btn btn-danger">Temizle</button>
            </div>
        </form>
    </div>

    <script>
        // 1. NATIVE JAVASCRIPT DENETİMİ
        function validateNative() {
            const ad = document.getElementById('adsoyad').value;
            const email = document.getElementById('email').value;
            const tel = document.getElementById('tel').value;

            if (ad === "" || email === "") {
                alert("Native JS: Ad ve Email boş bırakılamaz!");
                return;
            }
            if (isNaN(tel)) {
                alert("Native JS: Telefon sadece rakam olmalı!");
                return;
            }
            alert("Native JS: Form geçerli! (Veri gönderilmedi, sadece kontrol yapıldı)");
        }

        // 2. VUE.JS DENETİMİ
        const { createApp } = Vue
        createApp({
            data() {
                return {
                    form: { adsoyad: '', email: '', tel: '', konu: 'Destek', cins: '', onay: false }
                }
            },
            methods: {
                validateVue() {
                    if (!this.form.email.includes('@')) {
                        alert("Vue.js: Geçersiz email formatı!");
                    } else if (this.form.adsoyad.length < 3) {
                        alert("Vue.js: İsim çok kısa!");
                    } else if (!this.form.onay) {
                        alert("Vue.js: Onay kutusunu işaretleyin!");
                    } else {
                        alert("Vue.js: Başarılı! Sunucuya gönderiliyor...");
                        document.getElementById('contactForm').submit();
                    }
                }
            }
        }).mount('#app')
    </script>
</body>
</html>