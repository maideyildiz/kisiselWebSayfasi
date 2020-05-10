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
       <div>
<section> 
    <br>
	<h3>İletişim</h3>
    <table border="1" >
  <tr>
    <td >Adı, soyadı:</td>
    <td > <?php echo $_POST["adSoyad"];?></td>
        </tr>
        <tr>
        <td >Cinsiyet</td>
        <td > <?php 
            if (isset($_POST["cinsiyet"])) 
                {
                     echo $_POST["cinsiyet"];
                } ?></td>
        </tr>
      <tr>
          <td > Mail adresi:</td>
      <td > <?php echo $_POST["mail"];?></td>
        </tr>
    <tr> 
      <td > Telefon numarası:</td>
      <td  ><?php echo $_POST["tel"];?> </td>
        </tr>
    <tr>
        <td >Sevilen Yemekler:</td>
        <td ><?php 
            if (isset($_POST["yemek"])) 
                {
                     echo join($_POST["yemek"],"<br>");
                } ?></td>
        </tr>
        <tr>
            <td>Tuttuğunuz Takım:</td>
            <td ><?php echo $_POST["takim"];?> </td>
        </tr>
        <tr>
            <td > Mesajınız :</td>
            <td > <?php echo $_POST["mesaj"];?> </td>
        </tr>

</table>
</section>
           </div> 
        <script type="text/javascript" src="main.js"></script>  
    </body>


</html>