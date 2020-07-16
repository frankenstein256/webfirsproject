

<?php 

error_reporting(E_ALL ^ E_NOTICE);
ini_set('error_reporting', E_ALL ^ E_NOTICE);
?>
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
      <li><a href="aklimizda.php">Aklımızda</a></li>
	  <li><a href="aklimizda.php">Ücretsiz Kitap</a></li>
	    <?php @session_start();
	
		$kontrol= $_SESSION['eposta'];
  	  if(!isset($kontrol)){		  ?>
	    <li><a href="kayit.php" style="color:skyblue;">Kayıt Ol</a></li> 
      <li><a href="giris.php" style="color:skyblue;">Giriş Yap</a></li>
	  <?php  }
	  
	  else {?>
	    <li><a href="profil.php" style="color:skyblue;">Üye Panel</a></li> 
      <li><a href="cikisyap.php" style="color:skyblue;">Çıkış Yap</a></li>
	  <?php
	  }  
	  ?> <li><a href="https://www.facebook.com"><img src="resimler/facebooklogo.png" style="margin-left:110px;"/></a><a href="https://www.gmail.com"><img src="resimler/g.png" style="margin-left:2px;"/></a><a href="https://www.instagram.com"><img src="resimler/instagramlogo.png" style="margin-left:1px;"/> </a> <a href="https://www.twitter.com"><img src="resimler/twitterlogo.png" style="margin-left:-2px;"/></a><a href="https://www.youtube.com"><img src="resimler/youtubelogo.png" style="margin-left:1px;"/></a>
    </ul>
	
   </div>
   <div class="kitapokumakistermisin">
   <input type="text" size="60" class="inputtext"><input type="button" value="Ara" class="arabutton">
 </div>
 </div>
  <h1 class="icbaslik">
  Ücretsiz Kitap Okumak İster Misin?</h1> 
  <p>
  <p><p>
  <p><p>
  <p><p>
  <p><p>
  <p><p>
  <p>  <p><p>
  <p><p>
  <p><p>
  <p><p>
  <p><p>
  <p>  <p><p>
  <p><p>
  <p><p>
  <p><p>
  <p><p>
  <p>  <p><p>
  <p><p>
  <p><p>
  <p><p>
  <p><p>
  <p>  <p><p>
  <p><p>
  <p><p>
  <p><p>
  <p><p>
  <p>  <p><p>
  <p><p>
  <p><p>
  <p><p>
  <p><p>
  <p style="margin-top:150px;">
  Kütüphanemize hoş geldiniz!

Kitaplarla dolu dünyamıza hoş geldiniz. Kitaplarımızı sizlerle paylaşmak bizim için büyük mutluluk.

Kitap paylaşımı için aşağıdaki yönlendirmenin size yardımcı olacağını umuyoruz.

1- Web sitemize üye olun.

2- Üye panelinize giriş yaparak telefon ve adres bilgilerinizi doğru ve eksiksiz olarak kayıt edin.

3- Youtube kanalımıza abone olun. (Youtube kanalımız için buraya tıklayın)

4- Facebook sayfamızı beğenin. (Facebook sayfamız için buraya tıklayın)

5- Youtube kanalımıza abone olduğunuz kullanıcı adınızı facebook mesaj kutumuza iletin. (Direkt mesaj kutusu kullanılmamaktadır)

6- Beğendiğiniz bir kitabın detay sayfasında "Talep Et" düğmesine tıklayarak kitap talebinde bulunun.

Kitabın kalınlığına göre 15 ile en geç 30 gün içinde kitabı okuyup bize iade etmenizi bekliyoruz.

İletişimler e-posta ve facebook sayfanız üzerinden sağlanacaktır, bu nedenle sistemdeki e-posta adresinizin ve facebook sayfanızın güncel ve kullanılabilir olduğundan emin olun.

Kargo gönderim ücretini biz, geri dönüş ücretini kitap okurlarımızın karşılamasını rica ediyoruz. PTT Kargo, bir kiloyu aşmayan kitap gönderileri için 3 TL. almaktadır.

Bugüne kadar ve bundan sonra da herhangi bir isim altında para veya başka bir talebimiz olmadı/olmayacaktır. Kendi mütevazi bütçemizle kitaplarımızı paylaşmaya çalışıyoruz.


Önemli Açıklama:
Facebook ve Youtube kanalımıza abone olmayanların kitap talebi olumsuz olarak yanıtlanmaktadır.


</body>
</html>