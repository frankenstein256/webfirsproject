<?php
include 'vtbaglanti.php';

@session_start();

$email= $_SESSION['eposta'];
$kitapid=$_GET["kitapid"];
if(isset($_POST['gonder']))
{
	
  $sorgula = mysqli_query($baglanti,"SELECT id FROM kullanicilar WHERE email='".$email."'");
  while($kullanici=mysqli_fetch_array($sorgula))
  {
	  $idk=$kullanici["id"];
  }
  $yorum=$_POST["yorum"];
 
	$puan=$_POST["secim"];
	$baglanti->query("INSERT INTO yorumlar (kullanici_id, kitap_id,yorum,degerlendirme) VALUES ('$idk','$kitapid','$yorum','$puan')"); 
  
	header("Refresh: 1; url=kitapicerikleri.php?kitapid=$kitapid"); 
	
	}
?>