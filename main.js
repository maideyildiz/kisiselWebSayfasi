function kontrol(frm) 
{
    var adSoyad=frm.adSoyad.value;
    var cinsiyet =frm.cinsiyet;
    var mail = frm.mail.value;
    var tel = frm.tel.value;
    var yemek = frm.yemek;
    var takim = frm.takim;
    
    var seciliMi = false;
    var seciliMiYemek=false;
    var seciliMiTakim=false;
    
    var atpos=mail.indexOf("@");
    var dotpos=mail.lastIndexOf(".");
 
    if ( adSoyad==null || adSoyad=="")
    {
        alert("Lütfen adınızı ve soyadınızı giriniz!");
        return false;
    }
    
    for ( var i = 0; i < cinsiyet.length; i++) {
    if(cinsiyet[i].checked) {
        seciliMi = true;
        break;
    }
	}
        if(!seciliMi)   
    { 
    alert("Lütfen cinsiyetinizi seçiniz!");
        return false;
    } 
    
    
    
    if ( atpos<1 || dotpos<atpos+2 || dotpos+2>=mail.length )
    {
        alert("Geçerli email adresi giriniz!");
        return false;
    }
    
    if(tel==null || tel=="" || tel.length<11)
        {
            alert("Lütfen geçerli bir telefon numarası giriniz!")
            return false;
        }
    
    for ( var i = 0; i < yemek.length; i++) {
    if(yemek[i].checked) {
        seciliMiYemek = true;
        break;
    }
	}
        if(!seciliMiYemek)   
    { 
    alert("Lütfen yemek seçiniz!");
        return false;
    }
    
    if(takim.selectedIndex<=0)   
    { 
       alert("Lütfen takımınızı seçiniz!");
        return false;
    }
    return true;
}
