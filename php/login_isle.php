<?php
// Gerçek projede kendi numaranı buraya yazmalısın
$tanimli_ogrenci_no = "b2412100001"; 
$tanimli_email = $tanimli_ogrenci_no . "@sakarya.edu.tr";
$tanimli_sifre = $tanimli_ogrenci_no;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verileri temizleyerek alıyoruz
    $gelen_email = htmlspecialchars(trim($_POST['email']));
    $gelen_sifre = htmlspecialchars(trim($_POST['sifre']));

    // PHP tarafında boş alan kontrolü
    if (empty($gelen_email) || empty($gelen_sifre)) {
        header("Location: login.html?error=bos_alan");
        exit();
    }

    // Bilgilerin Doğruluğunu Kontrol Etme
    if ($gelen_email === $tanimli_email && $gelen_sifre === $tanimli_sifre) {
        // Mail adresinden sadece öğrenci numarasını ayıklıyoruz
        $ogrenci_no_parca = explode('@', $gelen_email)[0];
        
        // Başarılı Giriş Sayfası (Doğrudan PHP içinde HTML basıyoruz)
        echo "<!DOCTYPE html>
        <html lang='tr'>
        <head>
            <meta charset='UTF-8'>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Başarılı Giriş</title>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
        </head>
        <body class='bg-light d-flex align-items-center min-vh-100'>
            <div class='container'>
                <div class='row justify-content-center'>
                    <div class='col-md-6 text-center'>
                        <div class='alert alert-success shadow p-5 rounded-4' role='alert'>
                            <h2 class='alert-heading mb-3'>Giriş Başarılı!</h2>
                            <p class='fs-4 mb-0'>Hoşgeldiniz <strong class='text-dark'>{$ogrenci_no_parca}</strong></p>
                            <hr class='my-4'>
                            <a href='index.html' class='btn btn-success btn-lg px-5'>Ana Sayfaya Dön</a>
                        </div>
                    </div>
                </div>
            </div>
        </body>
        </html>";
    } else {
        // Bilgiler yanlışsa hata parametresiyle geri gönder
        header("Location: login.html?error=yanlis_bilgi");
        exit();
    }
} else {
    // Sayfaya URL üzerinden direkt erişmeye çalışırlarsa logine at
    header("Location: login.html");
    exit();
}
?>