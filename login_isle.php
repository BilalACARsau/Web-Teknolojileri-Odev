<?php

$tanimli_ogrenci_no = "b251210004"; 
$tanimli_email = $tanimli_ogrenci_no . "@sakarya.edu.tr";
$tanimli_sifre = $tanimli_ogrenci_no;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $gelen_email = htmlspecialchars(trim($_POST['email']));
    $gelen_sifre = htmlspecialchars(trim($_POST['sifre']));

    
    if (empty($gelen_email) || empty($gelen_sifre)) {
        header("Location: login.html?error=bos_alan");
        exit();
    }

    
    if ($gelen_email === $tanimli_email && $gelen_sifre === $tanimli_sifre) {
        
        $ogrenci_no_parca = explode('@', $gelen_email)[0];
        
        
        header("Location: hosgeldin.php?no=" . $ogrenci_no_parca);
        exit();
    } else {
        
        header("Location: login.html?error=yanlis_bilgi");
        exit();
    }
} else {
    
    header("Location: login.html");
    exit();
}
?>