<html lan="tr">
<head> 
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="global.css">
    <title> ~Maide YILDIZ~ </title>
</head>
    <body>
    <nav>
	<ol>
		<li><a href="hakkinda.html"> Hakkında </a></li>
        <li><a href="cv.html"> CV </a></li>
        <li><a href="benimSehrim.html"> Benim Şehrim </a></li>
        <li><a href="mirasimiz.html"> Mirasımız </a></li>
        <li><a href="iletisim.php"> İletişim </a></li>
        <li><a id="login" href="login.php"><img src="pictures/login.png" id="logo"></a></li>
	</ol>
</nav>  
        
            <br>
        <div>
            <h3>İletişim</h3></div>
<section> 
<div id="ortala">
<form onsubmit="return kontrol(this)" action="iletisim2.php" method="post">
    <fieldset>
<legend>Kişisel Bilgiler</legend>
 <p1>Adı, soyadı: <input type="text" placeholder="Adınızı ve soyadınızı giriniz!" name="adSoyad"><br></p1>
 <p1>Kadın</p1><input type="radio" name="cinsiyet" value="Kadın">
 <p1>Erkek<input type="radio" name="cinsiyet" value="Erkek"> <br>
 <p1>Email adresi:</p1> <input type="email" placeholder="Emailinizi giriniz!" name="mail" oninvalid="this.setCustomValidity('Emailinizi giriniz!')" oninput="this.setCustomValidity('')" ></p1><br>
        <p1>Telefon numarası: <input type="tel" name="tel" placeholder="Telefon numaranızı giriniz!"></p1>
    </fieldset>
    <fieldset>
        <legend>Diğer</legend>
 <p1>Sevilen Yemekler:</p1><br>
 <p1>İskender:</p1><input name="yemek[]"  type="checkbox" value="iskender"><br>
 <p1>Pideli Köfte:</p1><input name="yemek[]"  type="checkbox" value="Pideli Köfte"><br>
 <p1>Su Böreği:</p1><input name="yemek[]"  type="checkbox" value="Su Boregi"><br>
 <p1>Lahmacun:</p1><input name="yemek[]"  type="checkbox" value="Lahmacun"><br>
 <p1>Tavuk Pilav:</p1><input name="yemek[]"  type="checkbox" value="Tavuk Pilav"><br>
 <p1>Mantı:</p1><input name="yemek[]"  type="checkbox" value="Mantı"><br>
 <p1>Makarna:</p1><input name="yemek[]" type="checkbox"  value="Makarna"><br> 
        
<p1>Tuttuğunuz Takım:
<select name="takim">
<option value="Liverpool"><p1>Liverpool</p1> </option>
<option value="Galatasaray"><p1>Galatasaray</p1></option>
<option value="Beşiktaş"><p1>Beşiktaş</p1></option>
<option value="Fenerbahçe"><p1>Fenerbahçe</p1></option>
<option value="Barcelona"><p1>Barcelona</p1></option>
<option value="Paris Saint-Germain"><p1>Paris Saint-Germain</p1></option>
</select></p1><br><br>
 <p1>Mesajınız:
   <textarea name="mesaj" placeholder="Lütfen mesajınızı giriniz!" required></textarea></p1>
        <br>
        <br>
        <p1><input type="reset" value="TEMİZLE">
        <input type="submit" value="GÖNDER" ></p1>
    </fieldset>     
</form>
    </div> 
</section>
        
        
        
        

 <script type="text/javascript" src="main.js"></script>  
</body>
<br>
        <br>
</html>