<?php
// Formdan gelen veriler
$email = $_POST['email'];
$password = $_POST['password'];


if ($email == "b241210023@sakarya.edu.tr" && $password == "b241210023") { [cite: 18, 22]
    // Giriş başarılı mesajı 
    echo "<h1>Hoşgeldiniz b241210023</h1>"; [cite: 19, 25]
    // 2 saniye bekleyip ana sayfaya yönlendirme
    header("Refresh: 2; url=index.html");
} else {
    // Bilgiler hatalıysa login sayfasına geri gönderir 
    header("Location: login.html");
    exit();
}
?>