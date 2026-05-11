<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Mesaj Detayları | Bilal Acar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow border-0 p-4">
                    <h2 class="text-center mb-4 border-bottom pb-2">Gönderilen Form Bilgileri</h2>
                    <table class="table table-striped">
                        <tr><th>Ad Soyad:</th><td><?php echo $_POST['ad_soyad'] ?? '-'; ?></td></tr>
                        <tr><th>E-posta:</th><td><?php echo $_POST['email'] ?? '-'; ?></td></tr>
                        <tr><th>Telefon:</th><td><?php echo $_POST['telefon'] ?? '-'; ?></td></tr>
                        <tr><th>Konu:</th><td><?php echo $_POST['konu'] ?? '-'; ?></td></tr>
                        <tr><th>Cinsiyet:</th><td><?php echo $_POST['cinsiyet'] ?? '-'; ?></td></tr>
                        <tr><th>Mesaj:</th><td><?php echo nl2br($_POST['mesaj'] ?? '-'); ?></td></tr>
                        <tr><th>Onay Durumu:</th><td><?php echo isset($_POST['onay']) ? 'Onaylandı' : 'Onaylanmadı'; ?></td></tr>
                    </table>
                    <a href="iletisim.html" class="btn btn-primary w-100 mt-3">Geri Dön</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>