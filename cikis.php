<?php
    session_start();
    setcookie("giris","",time()-1);
    session_destroy();
    echo "<script> window.location.href = 'giris.php'; </script>";
?>