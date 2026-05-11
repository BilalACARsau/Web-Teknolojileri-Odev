<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Hoşgeldiniz | Bilal Acar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="d-flex align-items-center justify-content-center vh-100 bg-light">
    <div class="card shadow-lg p-5 text-center rounded-4">
        <h1 class="display-4 text-success fw-bold">Hoşgeldiniz</h1>
        <h2>Hoşgeldiniz <?php echo htmlspecialchars($_GET['no']); ?></h2>
        <div class="mt-4">
            <a href="index.html" class="btn btn-dark">Anasayfaya Dön</a>
        </div>
    </div>
</body>
</html>