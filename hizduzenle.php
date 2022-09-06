<?php
  session_start();
  require_once ('inc/config.php');

 
  if ($_COOKIE["a1_8"] != md5("ibb")){header("Location: giris.php");}
  if (!isset($_SESSION['yonetici'])) {header("Location: giris.php");}
  $sorgu = $baglan->select('yonetici', ['kullanici'])->where('id', $_SESSION['yonetici'], '=')->run();
  if (empty($sorgu[0]['kullanici'])) {header("Location: giris.php");}

    $kayitno = $_GET["id"]; 

    if (empty($kayitno) || $kayitno <= 0) {header("Location: hizmetlerimiz.php");} 

    $sorgu = $baglan->select('hizmetlerimiz')->where('id', $kayitno, '=')->run(); 
    if ($baglan->rowCount() <= 0) {header("Location: hizmetlerimiz.php");} 
    foreach ($sorgu as $satir) {$veriler = $satir;} 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hizmetlerimiz Düzenleme</title>
    <link href="assets/css/style.css" rel="stylesheet">

  </head>
  <body style="text-align:center;padding-top:50px;background-color:rgb(240, 238, 125);">
            <h2>Hizmetlerimiz Düzenleme Sayfasındasınız...</h2>
        <p><a href="panan.php"><i><u>Ana Menüye Dönmek ister misin?<i><u></a></p>
      <p><a href="anasayfa.php">Anasayfa</a> - <a href="hakkimizda.php">Hakkımızda</a> - 
     <a href="hizmetlerimiz.php">Hizmetlerimiz</a> - <a href="iletliste.php">İletişim</a> - 
    <a href="cikis.php" onclick="if (!confirm('Çıkış yapmak istediğinize emin misiniz?')) {return false;}">Çıkış Yap</a></p>
    <br><hr><br>
    <form action="hizislem.php" method="post">
        <b>İkon</b><br>
        <input type="text" name="ikon" size="80" style="width:65%;" value="<?php echo $veriler['ikon']; ?>" required>
        <br><br>
        <b>icerik1</b><br>
        <input type="text" name="icerik1" style="width:65%;" size="80" value="<?php echo $veriler['icerik1']; ?>" required>
        <br><br>
        <b>icerik2</b><br>
        <input type="text" name="icerik2" style="width:65%;" size="80" value="<?php echo $veriler['icerik2']; ?>" required>
        <br><br>
        <input type="hidden" name="id" value="<?php echo $veriler['id']; ?>">
        <input type="submit" value="Kaydet">
    </form>
  </body>
</html>