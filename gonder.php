<?php
// Form verilerinin POST edilip edilmediğini kontrol etme
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Verileri alma bölümü 
    $ad_soyad = htmlspecialchars($_POST['name'] ?? 'Belirtilmedi');
    $email    = htmlspecialchars($_POST['email'] ?? 'Belirtilmedi');
    $telefon  = htmlspecialchars($_POST['phone'] ?? 'Belirtilmedi');
    $konu     = htmlspecialchars($_POST['subject'] ?? 'Belirtilmedi');
    $cinsiyet = htmlspecialchars($_POST['gender'] ?? 'Belirtilmedi');
    $mesaj    = htmlspecialchars($_POST['message'] ?? 'Belirtilmedi');
    
    // İlgi Alanları birden fazla seçim olabileceği için dizi olarak geliyor
    $ilgi_alanlari = isset($_POST['interest']) ? implode(", ", $_POST['interest']) : "Seçim yapılmadı";

    //  Gelen  verilerin düzenli bir şekilde ekrana yazdırılması 
    echo "<!DOCTYPE html>
    <html lang='tr'>
    <head>
        <meta charset='UTF-8'>
        <title>Form Sonucu</title>
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
        <style>
            body { background-color: #f8f9fa; padding-top: 50px; }
            .result-card { max-width: 600px; margin: auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='result-card'>
                <h2 class='text-center text-primary mb-4'>Form Gönderim Detayları</h2>
                <table class='table table-bordered'>
                    <tr><th>Ad Soyad</th><td>$ad_soyad</td></tr>
                    <tr><th>E-posta</th><td>$email</td></tr>
                    <tr><th>Telefon</th><td>$telefon</td></tr>
                    <tr><th>Konu</th><td>$konu</td></tr>
                    <tr><th>Cinsiyet</th><td>$cinsiyet</td></tr>
                    <tr><th>İlgi Alanları</th><td>$ilgi_alanlari</td></tr>
                    <tr><th>Mesaj</th><td>" . nl2br($mesaj) . "</td></tr>
                </table>
                <div class='text-center mt-4'>
                    <a href='index.html' class='btn btn-secondary'>Geri Dön</a>
                </div>
            </div>
        </div>
    </body>
    </html>";

} else {
    // Sayfaya doğrudan erişilmeye çalışılırsa ana sayfaya yönlendirme
    header("Location: index.html");
    exit();
}
?>