<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Giriş İşlemi - Ahmet Aziz Uyar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="container">
    
    <header class="py-4 border-bottom d-flex justify-content-between align-items-center">
        <h1 class="m-0">Ahmet Aziz Uyar</h1>
    </header>

    <section class="py-5 text-center">
        <?php
        // Formdan gelen verileri alıyoruz
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Bilgiler doğruysa
        if ($email == "b241210023@sakarya.edu.tr" && $password == "b241210023") {
            
            // Şık bir hoşgeldin mesajı yazdırıyoruz
            echo '<div class="alert alert-success d-inline-block shadow-sm p-4 mt-4">';
            echo '<h2 class="mb-3 text-success">Hoşgeldiniz b241210023</h2>';
            echo '<p class="m-0">Giriş başarılı, ana sayfaya yönlendiriliyorsunuz...</p>';
            echo '</div>';
            
            // 2 saniye bekleyip ana sayfaya yönlendir
            header("Refresh: 2; url=index.html");
            
        } else {
            // Bilgiler hatalıysa ekranda uyarı verip tekrar login.html sayfasına gönderiyoruz
            echo '<script>
                    alert("Kullanıcı adı veya şifre hatalı! Lütfen tekrar deneyin.");
                    window.location.href="login.html";
                  </script>';
            exit();
        }
        ?>
    </section>

</body>
</html>