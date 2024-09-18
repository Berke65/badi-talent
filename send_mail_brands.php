<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $ad = htmlspecialchars(trim($_POST['ad']));
    $email = htmlspecialchars(trim($_POST['email']));
    $inf = htmlspecialchars(trim($_POST['inf']));
    $budget = htmlspecialchars(trim($_POST['budget']));
    $target = htmlspecialchars(trim($_POST['target']));
    $message = htmlspecialchars(trim($_POST['message']));


    $to = "bekersoftware@gmail.com";
    

    $subject = "Yeni Marka Başvurusu";
    

    $body = "
    Ad: $ad\n
    E-posta: $email\n
    Daha önce influencer marketing çalışması yaptı mı?: $inf\n
    Yıllık influencer marketing bütçesi: $budget\n
    Hedef kitle: $target\n
    Notlar: $message
    ";


    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Mail gönderimi (Sunucuda `mail()` fonksiyonu aktifse)

               if (mail($to, $subject, $body, $headers)) {
        echo "Başvurunuz başarıyla gönderildi.";
    } else {
        echo "E-posta gönderilirken bir hata oluştu.";
    }
}
?>
