<?php
    session_start();
    require_once ('inc/ayar.php');

  
    if ($_COOKIE["a1_8"] != md5("ibb")){header("Location: giris.php");}
    if (!isset($_SESSION['yonetici'])) {header("Location: giris.php");}
    $giris = $_SESSION["yonetici"];
    $sorgu = $baglan->query("select * from yonetici where (id ='$giris' )")->fetch(PDO::FETCH_ASSOC);
    if(is_null($sorgu)) {header("Location: hakkimizda.php");}
    
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 ">
    <link href="assets/css/style.css" rel="stylesheet">
    <title>Hakkımızda</title>
  </head>
  <?php
  if ($_POST){
    $id = $_POST["id"];
    $baslik = $_POST["baslik"];
    $aciklama = $_POST["aciklama"];
   
    move_uploaded_file($_FILES['resim']['tmp_name'],"assets/img/".$_FILES['resim']['name']);
    $resim ="assets/img/".$_FILES['resim']['name'];


    $sorgu = $baglan-> prepare("update hakkimizda set baslik=?,aciklama=?,resim=? where (id=?)");
    $guncelle = $sorgu->execute(array($baslik,$aciklama,$resim,$id));
    if ($guncelle){
        echo "<script>
            alert ('Kayıt Düzenlendi!');
            window.location.href ='hakkimizda.php';
            </script>";
    }
}

// Verilerin Düzenleme İçin Çekilmesi
$sorgu = $baglan->query("select * from hakkimizda")->fetch(PDO::FETCH_ASSOC);
?>
  
  <body style="text-align:center;padding-top:30px;background-color: rgb(54, 48, 141);">
  
        <h2>Hakkımızda Sayfasındasınız...</h2>
        <p><a href="panan.php"><i><u>Ana Menüye Dönmek ister misin?<i><u></a></p>
      <p><a href="anasayfa.php">Anasayfa</a> - <a href="hakkimizda.php">Hakkımızda</a> - 
     <a href="hizmetlerimiz.php">Hizmetlerimiz</a> - <a href="iletliste.php">İletişim</a> - 
    <a href="cikis.php" onclick="if (!confirm('Çıkış yapmak istediğinize emin misiniz?')) {return false;}">Çıkış Yap</a></p>
    <hr><br>
    <form action="hakkimizda.php" method="post" enctype="multipart/form-data">
     
     <b>Başlık</b><br>
     <input type="text" name="baslik" style="width:80%;" value="<?php echo $sorgu["baslik"]; ?>"><br><br>

     <b>Resim</b><br>
     <input type="file" name="resim" accept="jpg,jpeg,png"> <br><br><br>

     <b>İçerik</b><br>
     <textarea name="aciklama" rows="12" style="width:80%;"><?php echo $sorgu["aciklama"]; ?></textarea><br><br>

     <input type="hidden" name="id" value="<?php echo $sorgu["id"]; ?>">
     <input type="submit" value="Kaydet">


 </form>

  </body>
</html>