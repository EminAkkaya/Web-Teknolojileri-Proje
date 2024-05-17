<?php
// Kullanıcının girdiği e-posta ve şifre
$userEmail = $_POST["email"]; // Formdan gelen e-posta
$userPassword = $_POST["password"]; // Formdan gelen şifre

// Doğru e-posta ve şifre
$correctEmail = "b231210066@gmail.com";
$correctPassword = "b231210066";

// E-posta ve şifre kontrolü
if ($userEmail === $correctEmail && $userPassword === $correctPassword) {
    echo "Hoşgeldiniz!";
} else {
    echo "E-posta veya şifre hatalı. Lütfen tekrar deneyin.";
    // Giriş formuna yönlendirme
    echo '<meta http-equiv="refresh" content="3;url=girissayfa.html">';
    exit;
}
?>