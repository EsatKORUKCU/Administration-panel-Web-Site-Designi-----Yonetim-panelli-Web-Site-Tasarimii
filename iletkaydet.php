<?php
    require_once ('inc/config.php');

    $adsoyad = strip_tags($_POST['adsoyad']);
    $eposta = strip_tags($_POST['eposta']);
    $konu = strip_tags($_POST['konu']);
    $mesaj = strip_tags($_POST['mesaj']);


    if (empty($adsoyad)  || empty($eposta)) {
        echo "<script> alert('Lütfen Alanları Boş Bırakmayın!'); window.location.href = 'iletisim.php'; </script>";
    }

    $kayit = $baglan->select('iletisim', ['id'])->where('adsoyad', $adsoyad, '=')->where('eposta', $eposta, '=')->run(); 

    

    if ($kayit[0]['id'] > 0) { 
        echo "<script> alert('Hata Oluştu, Bu Kayıt Zaten Var!'); window.location.href = 'iletisim.php'; </script>";
    } else { 
        $ekle = $baglan->insert('iletisim', ['adsoyad' => $adsoyad,  'eposta' => $eposta, 'konu'=>$konu, 'mesaj' =>$mesaj ])->run(); 

        if ($baglan->rowCount() > 0) {
            echo "<script> alert('İşlem Başarılı, mesajınız iletildi!'); window.location.href = 'iletisim.php'; </script>";
        } else {
            echo "<script> alert('Hata Oluştu, mesajınız eklenemedi!'); window.location.href = 'iletisim.php'; </script>";
        }
    }
?>