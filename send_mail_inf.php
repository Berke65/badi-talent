<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $isim = htmlspecialchars(trim($_POST['isim']));
    $soyisim = htmlspecialchars(trim($_POST['soyisim']));
    $email = htmlspecialchars(trim($_POST['email']));
    $tel = htmlspecialchars(trim($_POST['tel']));
    $insta = htmlspecialchars(trim($_POST['insta']));
    $yt = htmlspecialchars(trim($_POST['yt']));
    $tw = htmlspecialchars(trim($_POST['tw']));
    $tiktok = htmlspecialchars(trim($_POST['tiktok']));
    $twitch = htmlspecialchars(trim($_POST['twitch']));
    $diger = htmlspecialchars(trim($_POST['diger']));
    $message = htmlspecialchars(trim($_POST['message']));


    $subject = "Yeni Influencer Başvurusu";
    $body = "
    <strong>İsim:</strong> $isim<br>
    <strong>Soyisim:</strong> $soyisim<br>
    <strong>Email:</strong> $email<br>
    <strong>Telefon:</strong> $tel<br>
    <strong>Instagram Hesabı:</strong> $insta<br>
    <strong>Youtube Hesabı:</strong> $yt<br>
    <strong>Twitter Hesabı:</strong> $tw<br>
    <strong>Tiktok Hesabı:</strong> $tiktok<br>
    <strong>Twitch Hesabı:</strong> $twitch<br>
    <strong>Diğer Hesaplar:</strong> $diger<br>
    <strong>Kendiniz Hakkında:</strong> $message
    ";


    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Mail gönderimi (Sunucuda `mail()` fonksiyonu aktifse)
    if (mail("bekersoftware@gmail.com", $subject, $body, $headers)) {
        echo "Başvurunuz başarıyla gönderildi!";
    } else {
        echo "E-posta gönderiminde bir hata oluştu.";
    }
}
?>
