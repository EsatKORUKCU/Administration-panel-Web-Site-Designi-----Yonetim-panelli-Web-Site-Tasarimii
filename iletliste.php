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
    <title>İletişim</title>
  </head>
  <body style="text-align:center;padding-top:50px;background-color:rgb(133, 238, 241);">
  
            <h2>İletişim Sayfasındasınız...</h2>
        <p><a href="panan.php"><i><u>Ana Menüye Dönmek ister misin?<i><u></a></p>
      <p><a href="anasayfa.php">Anasayfa</a> - <a href="hakkimizda.php">Hakkımızda</a> - 
     <a href="hizmetlerimiz.php">Hizmetlerimiz</a> - <a href="iletliste.php">İletişim</a> - 
    <a href="cikis.php" onclick="if (!confirm('Çıkış yapmak istediğinize emin misiniz?')) {return false;}">Çıkış Yap</a></p>
    <br><hr><br>
    <?php
        $sorgu = $baglan->select('iletisim')->orderBy('id', 'asc')->run();
        if ($baglan->rowCount() > 0) {
            echo "<table border='1' width='100%'>
            <tr>
            <td>ID</td>
            <td>adsoyad</td>
            <td>eposta</td>
            <td>konu</td>
            <td>mesaj</td>
            <td>İşlem</td>
            </tr>";

            foreach ($sorgu as $satir) { 
                echo "<tr>
                <td>$satir[id]</td>
                <td>$satir[adsoyad]</td>
                <td>$satir[eposta]</td>
                <td>$satir[konu]</td>
                <td>$satir[mesaj]</td>
                <td><a href='iletduzenle.php?id=$satir[id]'>Düzenle</a> - <a href='iletsil.php?id=$satir[id]' onclick=\"if (!confirm('Silmek istediğinize emin misiniz?')) return false;\">Sil</a></td>
                </tr>";
            }

            echo "</table>";
            echo "<p><b>Toplam ".$baglan->rowCount()." Kayıt Bulundu.</b></p>";
        } else {
            echo "<p><b>Sistemde Hiç Kayıt Bulunamadı!</b></p>";
        }
    ?>
    
  </body>
</html>