<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>İletişim | Denetim Paneli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="app" class="container my-5">
        <div class="card shadow p-4 border-0 rounded-4">
            <h2 class="text-center text-primary mb-4">İletişim Formu</h2>
            <form id="contactForm" action="islem.php" method="POST">
                <div class="mb-3">
                    <input type="text" name="ad" v-model="ad" class="form-control" placeholder="Adınız">
                </div>
                <div class="mb-3">
                    <input type="email" name="email" v-model="email" class="form-control" placeholder="E-posta (Örn: b24@sakarya.edu.tr)">
                </div>
                <div class="mb-3">
                    <input type="text" name="tel" v-model="tel" class="form-control" placeholder="Telefon (Sadece Rakam)">
                </div>
                <div class="mb-3">
                    <textarea name="mesaj" class="form-control" placeholder="Mesajınız"></textarea>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <button type="button" onclick="validateNative()" class="btn btn-outline-primary px-4">Native JS ile Gönder</button>
                    <button type="button" @click="validateVue" class="btn btn-primary px-4">Vue.js ile Gönder</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // NATIVE JS DENETİMİ
        function validateNative() {
            const email = document.getElementsByName('email')[0].value;
            const tel = document.getElementsByName('tel')[0].value;
            if(!email.includes('@')) { alert('Geçersiz e-mail (Native JS)'); return; }
            if(isNaN(tel)) { alert('Telefon sadece rakam olmalı (Native JS)'); return; }
            document.getElementById('contactForm').submit();
        }

        // VUE.JS DENETİMİ
        const { createApp } = Vue;
        createApp({
            data() { return { ad: '', email: '', tel: '' } },
            methods: {
                validateVue() {
                    if(!this.email || !this.ad) { alert('Boş alan bırakmayınız (Vue.js)'); }
                    else { document.getElementById('contactForm').submit(); }
                }
            }
        }).mount('#app');
    </script>
</body>
</html>