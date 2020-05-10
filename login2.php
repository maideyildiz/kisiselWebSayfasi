<?php ob_start(); ?>
<!DOCTYPE HTML>
<html lan="tr">
<head> 
    
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="global.css">
    <title> ~Maide YILDIZ~ </title>
</head>
    <body>
<?php function kontrol($kullanici, $sifre){
    $dogruKullanici="b191210310@gmail.com";
    $dogruSifre="1234";
  if($kullanici==$dogruKullanici && $sifre==$dogruSifre)
{
   echo "<p1>HOŞGELDİN B191210310!</p1>";
}
    else{  header("Location: login.php"); ob_enf_flush();}
}            
?>
    <nav>
	<ol>
		<li><a href="index.html"> Hakkında </a></li>
        <li><a href="cv.html"> CV </a></li>
        <li><a href="benimSehrim.html"> Benim Şehrim </a></li>
        <li><a href="mirasimiz.html"> Mirasımız </a></li>
        <li><a href="iletisim.php"> İletişim </a></li>
        <li><a id="login" href="login.php"><img src="pictures/login.png" id="logo"></a></li>
	</ol>
</nav>  
        
<section> 
    <div>
        <br>
	<h3>GİRİŞ YAPTINIZ</h3>
        <?php echo kontrol($_GET["mail"],$_GET["sifre"]);?>
        </div>
</section>
    </body>


</html>
