<?php
    require_once ('inc/config.php');

    $ikon = $_POST['ikon'];
    $icerik1 = $_POST['icerik1'];
    $icerik2 = $_POST['icerik2'];
   


    if (empty($ikon)  || empty($ikon)) {
        echo "<script> alert('Lütfen Alanları Boş Bırakmayın!'); window.location.href = 'hizmetlerimiz.php'; </script>";
    }

    $kayit = $baglan->select('hizmetlerimiz', ['id'])->where('ikon', $ikon, '=')->where('icerik1', $icerik1, '=')->run(); 

    

    if ($kayit[0]['id'] > 0) { 
        echo "<script> alert('Hata Oluştu, Bu Kayıt Zaten Var!'); window.location.href = 'hizmetlerimiz.php'; </script>";
    } else { 
        $ekle = $baglan->insert('hizmetlerimiz', ['ikon' => $ikon,  'icerik1' => $icerik1, 'icerik2'=>$icerik2,])->run(); 

        if ($baglan->rowCount() > 0) {
            echo "<script> alert('İşlem Başarılı, mesajınız iletildi!'); window.location.href = 'hizmetlerimiz.php'; </script>";
        } else {
            echo "<script> alert('Hata Oluştu, mesajınız eklenemedi!'); window.location.href = 'hizmetlerimiz.php'; </script>";
        }
    }
?>