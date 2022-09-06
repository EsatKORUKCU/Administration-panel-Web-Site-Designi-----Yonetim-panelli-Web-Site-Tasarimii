<?php
   session_start();
   require_once ('inc/config.php');
 
  
   if ($_COOKIE["a1_8"] != md5("ibb")){header("Location: giris.php");}
   if (!isset($_SESSION['yonetici'])) {header("Location: giris.php");}
   $sorgu = $baglan->select('yonetici', ['kullanici'])->where('id', $_SESSION['yonetici'], '=')->run();
   if (empty($sorgu[0]['kullanici'])) {header("Location: giris.php");}

    $kayitno = $_GET["id"]; 

    if (empty($kayitno) || $kayitno <= 0) {header("Location: hizmetlerimiz.php");} 

    $baglan->delete('hizmetlerimiz')->where('id', $kayitno, '=')->run(); 

    if ($baglan->rowCount() > 0) { 
        echo "<script> alert('Toplam ".$baglan->rowCount()." Kayıt Silindi!'); window.location.href = 'hizmetlerimiz.php'; </script>";
    } else { // Kayıt silinmediyse
        echo "<script> alert('Silme İşlemi Başarısız!'); window.location.href = 'hizmetlerimiz.php'; </script>";
    }
?>