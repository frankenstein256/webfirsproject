<?php
include 'vtbaglanti.php';

@session_start();

$email= $_SESSION['eposta'];
$yorumid=$_GET["id"];
$kitapid=$_GET["kitapid"];

$emailsorgu="SELECT * FROM kullanicilar WHERE email='$email'";
		$esorgu=mysqli_query($baglanti,$emailsorgu);
		while($ek=mysqli_fetch_array($esorgu))
		{
			$ekid=$ek["id"];
		}
		if(isset($_POST["yorumayorum"]))
		{

			$yorumayorumal=$_POST["yorumtxt"];
						
			$ysorgu="INSERT INTO yorumayorum(yorumid,kullaniciid,yorum) VALUES('$yorumid','$ekid','$yorumayorumal')";
			mysqli_query($baglanti,$ysorgu);
			
			header("Location:kitapicerikleri.php?kitapid=$kitapid");
			
		}
?>