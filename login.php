<!DOCTYPE HTML>
<html lan="tr">
<head> 
    
    <meta charset="utf-8">
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="global.css">
    <title> ~Maide YILDIZ~ </title>
</head>
    <body>
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
	<h3>GİRİŞ YAP</h3>
        <br>
        <form action="login2.php" method="get">
    <p1>Kullanıcı Adı: <input type="email" placeholder="Emailinizi giriniz!" name="mail" oninvalid="this.setCustomValidity('Emailinizi giriniz!')" oninput="this.setCustomValidity('')" required ></p1><br>
    <p1>Şifre: <input type="password" name="sifre" required></p1>
                <p1><input type="submit" value="GÖNDER"></p1>
            </form>
        </div>
</section>
    </body>



</html>