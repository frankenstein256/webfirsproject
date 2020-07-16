<html>
<head>
<title> Kitap Okumak İster misin?</title>
<link rel="stylesheet" type="text/css" href="anacss.css">
</head>
<body>
<div class="buyukbanner">
<div class="enustmenu" style = "filter: alpha (opacity = 50); opacity: 0.7;">
    <ul>
      <li><a href="anasayfa.php">Anasayfa</a></li> 
      <li><a href="kitaplar.php">Kitaplar</a></li>  
	  <li><a href="makaleler.php">Makaleler</a></li> 
      <li><a href="haklimizda.php">Aklımızda</a></li>
	  <li><a href="ucresizkitap.php">Ücretsiz Kitap</a></li>
	    <li><a href="kayit.php" style="color:skyblue;">Kayıt Ol</a></li> 
      <li><a href="giris.php" style="color:skyblue;">Giriş Yap</a></li>
	  <li><a href="https://www.facebook.com"><img src="resimler/facebooklogo.png" style="margin-left:130px;"/></a><a href="https://www.gmail.com"><img src="resimler/g.png" style="margin-left:2px;"/></a><a href="https://www.instagram.com"><img src="resimler/instagramlogo.png" style="margin-left:1px;"/> </a> <a href="https://www.twitter.com"><img src="resimler/twitterlogo.png" style="margin-left:-2px;"/></a><a href="https://www.youtube.com"><img src="resimler/youtubelogo.png" style="margin-left:1px;"/></a>
    </ul>
	
   </div>
   <div class="kitapokumakistermisin">
   <input type="text" size="60" class="inputtext"><input type="button" value="Ara" class="arabutton">
   <div>
   <h1 class="icbaslik">
   <form action="" method="post">

  Yeni Üye Kaydı</h1> 
  
  <table cellspacing="2" cellpadding="2">
  <tr><td><center>Ad Soyad*</td></tr>
  <tr><td>   <input type="text" size="70" style="height:30px" name="adi" placeholder="Adınızı ve Soyadınız"></td></tr>
  <tr><td>  <center>Cep Telefonu </td></tr>
    <tr><td><input type="text" size="70" style="height:30px" name="ceptel" placeholder="cep tel giriniz" ></td></tr>
	<tr><td>  <center>E-posta Adresi </td></tr>
    <tr><td><input type="text" size="70" style="height:30px" name="eposta" placeholder="epostaniz"></td></tr>
	<tr><td>  <center>Şifre</td></tr>
    <tr><td><input type="password" size="70" style="height:30px" name="sifre" placeholder="şifreniz"></td></tr>
	<tr><td height="100"><center><input type="submit" value="KAYIT OL" style="height:30px;width:90px ;background-color:skyblue; border-radius:9px;"> </td></tr>
    

  </table>
  <?php include 'phpbaglanti.php';?>
  </form>
</div>
</body>
</html>