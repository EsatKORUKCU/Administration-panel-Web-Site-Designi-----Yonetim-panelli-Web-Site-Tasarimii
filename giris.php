<?php
    session_start();
    require_once ('inc/config.php');
   
    if ($_POST) {
        $kullanici = $_POST['kullanici'];
        $sifre = (strip_tags($_POST['sifre']));
        $sifre = md5($sifre);
         
        $sorgu = $baglan->select('yonetici', ['id'])->where('kullanici', $kullanici, '=')->where('sifre', $sifre, '=')->run();

        if ($sorgu[0]['id'] > 0) { 
          $kontrol = md5("ibb"); 
          setcookie("giris",$kontrol,time()+60*60); 
          $_SESSION['yonetici'] = $sorgu[0]['id']; 
            echo "<script> window.location.href = 'panan.php'; </script>";
        } else { 
            echo "<script> alert('Hata Oluştu, Böyle Bir Kullanıcı Yok!'); window.location.href = 'giris.php'; </script>";
        }
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel Giriş</title>
    <link href="assets/css/style.css" rel="stylesheet">
  </head>
  <body style="text-align:center;padding-top:70px;background-color: #03C4EB;">

    <h2><p><i>Yönetim Paneli Hoşgeldiniz!! İşlem Yapmak İçin Lütfen Giriş Yapınız... </i></p></h2>
    <br><hr><br>
    <form action="giris.php" method="post">
        <b>Kullanıcı: </b><br>
        <input type="text" name="kullanici" size="40" required>
        <br><br>
        <b>Şifre: </b><br>
        <input type="password" name="sifre" size="40" required>
        <br><br>
        <input type="submit" value="Giriş Yap">
    </form>
  </body>
</html>