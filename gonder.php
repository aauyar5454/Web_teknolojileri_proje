<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Form Sonucu - Ahmet Aziz Uyar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body class="container">

    <header class="py-4 border-bottom d-flex justify-content-between align-items-center">
        <h1 class="m-0">Ahmet Aziz Uyar</h1>
        <nav>
            <a href="index.html" class="text-decoration-none me-3 text-dark">Ana Sayfa</a>
            <a href="sehrim.html" class="text-decoration-none me-3 text-dark">Şehrim</a>
            <a href="futbol.html" class="text-decoration-none me-3 text-dark">Futbol</a>
            <a href="iletisim.html" class="text-decoration-none me-3 text-dark">İletişim</a>
            <a href="login.html" class="btn btn-outline-primary">Giriş Yap</a>
        </nav>
    </header>

    <section class="py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0 text-center">Form Gönderim Detayları</h3>
                    </div>
                    <div class="card-body">
                        
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            // Senin yazdığın güvenli veri alma kısmı
                            $ad_soyad = htmlspecialchars($_POST['name'] ?? 'Belirtilmedi');
                            $email    = htmlspecialchars($_POST['email'] ?? 'Belirtilmedi');
                            $telefon  = htmlspecialchars($_POST['phone'] ?? 'Belirtilmedi');
                            $konu     = htmlspecialchars($_POST['subject'] ?? 'Belirtilmedi');
                            $cinsiyet = htmlspecialchars($_POST['gender'] ?? 'Belirtilmedi');
                            $mesaj    = htmlspecialchars($_POST['message'] ?? 'Belirtilmedi');
                            $ilgi_alanlari = isset($_POST['interest']) ? implode(", ", $_POST['interest']) : "Seçim yapılmadı";

                            // Tablo halinde yazdırma
                            echo "<table class='table table-bordered'>";
                            echo "<tr><th style='width: 30%;'>Ad Soyad</th><td>$ad_soyad</td></tr>";
                            echo "<tr><th>E-posta</th><td>$email</td></tr>";
                            echo "<tr><th>Telefon</th><td>$telefon</td></tr>";
                            echo "<tr><th>Konu</th><td>$konu</td></tr>";
                            echo "<tr><th>Cinsiyet</th><td>$cinsiyet</td></tr>";
                            echo "<tr><th>İlgi Alanları</th><td>$ilgi_alanlari</td></tr>";
                            echo "<tr><th>Mesaj</th><td>" . nl2br($mesaj) . "</td></tr>";
                            echo "</table>";

                        } else {
                            // Doğrudan erişimde hata ver
                            echo "<div class='alert alert-danger'>Lütfen formu doldurarak gönderin.</div>";
                        }
                        ?>

                        <div class="text-center mt-4">
                            <a href="iletisim.html" class="btn btn-secondary">Forma Geri Dön</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-3 text-center border-top mt-5">
        <p>2026 - Ahmet Aziz Uyar</p>
    </footer>

</body>
</html>