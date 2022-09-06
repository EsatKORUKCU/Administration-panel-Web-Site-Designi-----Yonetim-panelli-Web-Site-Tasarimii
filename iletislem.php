<?php
   session_start();
   require_once ('inc/config.php');
 
  
   if ($_COOKIE["a1_8"] != md5("ibb")){header("Location: giris.php");}
   if (!isset($_SESSION['yonetici'])) {header("Location: giris.php");}
   $sorgu = $baglan->select('yonetici', ['kullanici'])->where('id', $_SESSION['yonetici'], '=')->run();
   if (empty($sorgu[0]['kullanici'])) {header("Location: giris.php");}

    $adsoyad = $_POST["adsoyad"];
    $eposta = $_POST["eposta"];
    $konu = $_POST["konu"];
    $mesaj = $_POST["mesaj"];
    $kayitno = $_POST["id"];

    if (empty($adsoyad) || empty($eposta) || empty($konu)|| empty($mesaj) || $kayitno <= 0) {header("Location: iletliste.php");} 

    $baglan->update('iletisim', ['adsoyad' => $adsoyad, 'eposta' => $eposta, 'konu' => $konu, 'mesaj' => $mesaj])->where('id', $kayitno, '=')->run();

    if ($baglan->rowCount() > 0) { 
        echo "<script> alert('Toplam ".$baglan->rowCount()." Kayıt Düzenlendi!'); window.location.href = 'iletliste.php'; </script>";
    } else { 
        echo "<script> alert('Düzenleme İşlemi Başarısız!'); window.location.href = 'iletliste.php'; </script>";
    }

?>