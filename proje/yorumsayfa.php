<html>
		<head>
		<title> yorum sayfası </title>
		</head>
		<body>
<?php
@session_start();

  $kontrol= $_SESSION['eposta'];
  	  if(!isset($kontrol))
		 header("Refresh:0; url=giris.php"); 
	 else
	 {
		 
		if(isset($_POST['gonder']))
 
		{
					///html başlangıcı
		?>	<?php 
		$kitapid= $_GET["kitapid"];
		?>
		
		<form action="yorumphpkodu.php?kitapid=<?php echo $kitapid?>" method="post">
	<div style="padding:40px; margin:50px; margin-left:300px; border:2px black solid; color:black; width:730px; height:430px;">
		
		
		<b style="font-size:20px ;margin:100px; margin-top:200px;">Değerlendirme:
		<select name="secim">
		<option value="5">ÇOK GÜZEL(5)</option>
		<option value="4">GÜZEL(4)</option>
		<option value="3">İDERE EDER(3)</option>
		<option value="2">KÖTÜ(2)</option>
		<option value="1">ÇOK KÖTÜ(1)</option>
		<option value="0">BERBAT(0)</option>
		<select>
		</b>
		<br>
		<br>
		<br>

		<b style=" font-size:20px;margin-top:200px; margin-left:110">ALINTI && YORUM: <br>
		<textarea rows="30" cols="30"  name="yorum" style= "width:300px ;height:260px; margin-left:110" ></textarea>
		<br>
	
		
		<input type="submit" value="YORUM&&ALINTI" name="gonder" style="height:30px;width:130px ;margin-left:300px;margin-top:40px;background-color:skyblue; border-radius:9px;">
			</b>
		</div>
				</form>
		
		
		<?php
		}
	 }
 

  
?>
</body>
		</html>