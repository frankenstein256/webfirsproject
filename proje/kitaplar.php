


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
	  ?>	
	  <li><a href="https://www.facebook.com"><img src="resimler/facebooklogo.png" style="margin-left:110px;"/></a><a href="https://www.gmail.com"><img src="resimler/g.png" style="margin-left:2px;"/></a><a href="https://www.instagram.com"><img src="resimler/instagramlogo.png" style="margin-left:1px;"/> </a> <a href="https://www.twitter.com"><img src="resimler/twitterlogo.png" style="margin-left:-2px;"/></a><a href="https://www.youtube.com"><img src="resimler/youtubelogo.png" style="margin-left:1px;"/></a>
    </ul>
	
   </div>
   <div class="kitapokumakistermisin">
   <input type="text" size="60" class="inputtext"><input type="button" value="Ara" class="arabutton">
   <div style="margin-left:-50;">
   <h1 class="icbaslik">
	KİTAP ARŞİVİ</h1>
	<b><h1><a href="anket.php" style="text-decoration:none; margin-left:250px">ANKETİ GÖR</a></h1></b>
	<?php
	include 'vtbaglanti.php';
	
	$sorgu=mysqli_query($baglanti,"select * from kitaplar");
	while($kayit=mysqli_fetch_array($sorgu))
	{
		$id=$kayit["id"];
		$kadi=$kayit["kitapadi"];
		$kyazar=$kayit["yazaradi"];
	?>
	
	<div style=" width:200px; height:250px;  border:1px gray solid; float:left;  ">
	<center><a href= "kitapicerikleri.php?kitapid=<?php echo $id ?>"><img style="width:100px; height:150px; " src="kitaplar\<?php echo $id ?>.jpg"></a>
	<h3> <?php echo $kadi?></h3>
	<h4> <?php echo $kyazar?></h4>
	</div>
	<?php 
	}
	?>
  </form>
</div>
</body>
</html>