

<?php 

error_reporting(E_ALL ^ E_NOTICE);
ini_set('error_reporting', E_ALL ^ E_NOTICE);
?><html>
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
	  ?> <li><a href="https://www.facebook.com"><img src="resimler/facebooklogo.png" style="margin-left:130px;"/></a><a href="https://www.gmail.com"><img src="resimler/g.png" style="margin-left:2px;"/></a><a href="https://www.instagram.com"><img src="resimler/instagramlogo.png" style="margin-left:1px;"/> </a> <a href="https://www.twitter.com"><img src="resimler/twitterlogo.png" style="margin-left:-2px;"/></a><a href="https://www.youtube.com"><img src="resimler/youtubelogo.png" style="margin-left:1px;"/></a>
    </ul>
	
   </div>
   <div class="kitapokumakistermisin">
   <input type="text" size="60" class="inputtext"><input type="button" value="Ara" class="arabutton">
   <div>
</div>
</body>
</html>