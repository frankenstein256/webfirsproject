
<?php include 'vtbaglanti.php';
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
	  ?><li><a href="https://www.facebook.com"><img src="resimler/facebooklogo.png" style="margin-left:110px;"/></a><a href="https://www.gmail.com"><img src="resimler/g.png" style="margin-left:2px;"/></a><a href="https://www.instagram.com"><img src="resimler/instagramlogo.png" style="margin-left:1px;"/> </a> <a href="https://www.twitter.com"><img src="resimler/twitterlogo.png" style="margin-left:-2px;"/></a><a href="https://www.youtube.com"><img src="resimler/youtubelogo.png" style="margin-left:1px;"/></a>
    </ul>
	
   </div>
   <div class="kitapokumakistermisin">
   <input type="text" size="60" class="inputtext"><input type="button" value="Ara" class="arabutton">
   <div style="margin-left:-50;">
   <h1 class="icbaslik">
	KİTAP ARŞİVİ</h1>
	<?php
	include 'vtbaglanti.php';
	$kitapid=$_GET["kitapid"];
	
	$sorgu=mysqli_query($baglanti,"SELECT * FROM kitaplar WHERE id='".$kitapid."'");
	while($kayit=mysqli_fetch_array($sorgu))
	{
	
		$kadi=$kayit["kitapadi"];
		$kyazar=$kayit["yazaradi"];
		$yayin=$kayit["yayinevi"];
		$kategori=$kayit["kategori"];
		$sayfa=$kayit["sayfa"];
		$ozet=$kayit["ozet"];
	}
	$toplampuan=0;
		$sorgu1=mysqli_query($baglanti,"SELECT * FROM yorumlar WHERE kitap_id='".$kitapid."'");
			while($kayit3=mysqli_fetch_array($sorgu1))
		{
		$toplampuan = $toplampuan+$kayit3["degerlendirme"];
		
		}
	?>
	
	<div style=" width:200px; height:250px;  border:1px gray solid; float:left ;  ">
	<center><img style="width:200px; height:300px; " src="kitaplar\<?php echo $kitapid ?>.jpg">
	</div>	<div style="width:200px; height:300px; margin-left:300px"><h3> <p style="margin-bottom:-20px;">KATEGORİ:<?php echo $kategori?></p><form action="yorumsayfa.php?kitapid=<?php echo $kitapid ?>" method="post"><input type="submit"  name="gonder" value="Yorum && Alıntı"  style="margin-left:400px; background-color:skyblue ; color:white; width:120px; height:40px ;border-radius:9px;">  </form><br> 
				YAZAR: <?php echo $kyazar?><br>
				YAYIN EVİ: <?php echo $yayin?><br>
				DİL:	Türkçe<br>
				SAYFA SAYISI: <?php echo $sayfa?> <br>
				<i><u>DEGERLENDİRME PUANI:</u></i><?php echo $toplampuan?> <br></h3></div>
				<h1><p style="margin-top:60px;"><?php echo $kadi; echo "-" ; echo $kyazar; echo "/"; echo $kategori;?></h1>
				<div style="boder:1px black solid; width:900px; margin-top:90px;height:auto; font-size:18px; ">
				<?php echo $ozet;?>
				</div>
				
			<div style="width:800px; height:auto; padding:30px; border:0px black solid">
		<?php	
			
			$sorgu1=mysqli_query($baglanti,"SELECT * FROM yorumlar WHERE kitap_id='".$kitapid."'");
		
		$sorgu1=mysqli_query($baglanti,"SELECT * FROM yorumlar WHERE kitap_id='".$kitapid."'");
		
		while($kayit1=mysqli_fetch_array($sorgu1))
		{
			$idcek= $kayit1["kullanici_id"];
			$sorgu3=mysqli_query($baglanti,"SELECT * FROM kullanicilar WHERE id='".$idcek."'");
			while($isim=mysqli_fetch_array($sorgu3))
		{
		?><h1><?php echo  $isim["adisoyadi"]; ?></h1><?php
			}
		?>
		
		<h3><?php echo $kayit1["yorum"];
		$yorumid=$kayit1["yorum_id"];
		?>
		<form action="yorumayorum.php?id=<?php echo $yorumid ?> && kitapid=<?php echo$kitapid?>" method="POST"> <input type="text" name="yorumtxt" placeholder="Yanıtla..."><input type="submit" name="yorumayorum" value="yorumla" style="height:30px;width:90px ;background-color:skyblue; border-radius:9px;"></form> 
		<?php
		$yyid=$kayit1["yorum_id"];
		$yysorgu="SELECT * FROM yorumayorum WHERE yorumid='$yyid'";
		$yys=mysqli_query($baglanti,$yysorgu);
		while($yycek=mysqli_fetch_array($yys))
		{
			$kkid=$yycek["kullaniciid"];
			$kksorgu=mysqli_query($baglanti,"SELECT * FROM kullanicilar WHERE id='$kkid'");
			while($kkadi=mysqli_fetch_array($kksorgu))
			{
			$kkad=$kkadi["adisoyadi"];	
			}
			$yyal=$yycek["yorum"];
			?><h2> <b style="margin-left:25"> <?php
			echo $kkad;
			?></h2>
			<?php
			
			echo $yyal;
		}
		
		?>
		</b>
		
		
		<hr style="height:15px;"> <?php 
	
		
		}
		?>		
	</div>
	

</div>
</body>
</html>