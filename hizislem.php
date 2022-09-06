<?php
   session_start();
   require_once ('inc/config.php');
 
  
   if ($_COOKIE["a1_8"] != md5("ibb")){header("Location: giris.php");}
   if (!isset($_SESSION['yonetici'])) {header("Location: giris.php");}
   $sorgu = $baglan->select('yonetici', ['kullanici'])->where('id', $_SESSION['yonetici'], '=')->run();
   if (empty($sorgu[0]['kullanici'])) {header("Location: giris.php");}
    
    $kayitno = $_POST["id"];
    $ikon = $_POST["ikon"];
    $icerik1 = $_POST["icerik1"];
    $icerik2 = $_POST["icerik2"];
    

    if (empty($ikon) || empty($icerik1)  || $kayitno <= 0) {header("Location: hizmetlerimiz.php");} 

    $baglan->update('hizmetlerimiz', ['ikon' => $ikon,  'icerik1' => $icerik1, 'icerik2' => $icerik2])->where('id', $kayitno, '=')->run(); 

    if ($baglan->rowCount() > 0) { // Kayıt düzenlendiyse
        echo "<script> alert('Toplam ".$baglan->rowCount()." Kayıt Düzenlendi!'); window.location.href = 'hizmetlerimiz.php'; </script>";
    } else { // Kayıt düzenlenmediyse
        echo "<script> alert('Düzenleme İşlemi Başarısız!'); window.location.href = 'hizmetlerimiz.php'; </script>";
    }

?>