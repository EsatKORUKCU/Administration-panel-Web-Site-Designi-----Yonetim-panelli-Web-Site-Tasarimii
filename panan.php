<?php
    session_start();
    require_once ('inc/config.php');

   
    if ($_COOKIE["a1_8"] != md5("ibb")){header("Location: giris.php");}
    if (!isset($_SESSION['yonetici'])) {header("Location: giris.php");}
    $sorgu = $baglan->select('yonetici', ['kullanici'])->where('id', $_SESSION['yonetici'], '=')->run();
    if (empty($sorgu[0]['kullanici'])) {header("Location: giris.php");}
    
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 ">
    <link href="assets/css/style.css" rel="stylesheet">
    <title>Panel Yönetim Anasayfa</title>
  </head>
  <body style="text-align:center;padding-top:50px;background-color:beige;">
  
        <h2>Lütfen Menüden Düzenlemek İstediginiz Sayfayı Seçin..</h2><br>
        <!-- <p><a href="panan.php"><i><u>Ana Menüye Dönmek ister misin?<i><u></a></p> -->
      <p><a href="anasayfa.php">Anasayfa</a> - <a href="hakkimizda.php">Hakkımızda</a> - 
     <a href="hizmetlerimiz.php">Hizmetlerimiz</a> - <a href="iletliste.php">İletişim</a> - 
    <a href="cikis.php" onclick="if (!confirm('Çıkış yapmak istediğinize emin misiniz?')) {return false;}">Çıkış Yap</a></p>
    <br><hr><br>


  </body>
</html>