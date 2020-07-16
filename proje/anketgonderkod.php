<?php
include 'vtbaglanti.php';

if($_POST)
{
	$soru1=@$_POST["secim1"];
$soru2=@$_POST["secim2"];
$soru3=@$_POST["secim3"];
$soru4=@$_POST["secim4"];
$soru5=@$_POST["okunanroman"];
$soru6=@$_POST["secim5"];
$soru7=@$_POST["secim6"];
$soru8=@$_POST["secim7"];
$soru9=@$_POST["yazar"];
$soru10=@$_POST["secim8"];
if(isset($soru1)&& isset($soru2)&& isset($soru3)&& isset($soru4)&& isset($soru5)&& isset($soru6)&& isset($soru7)&& isset($soru8)&& isset($soru9)&& isset($soru10))
{
if ($baglanti->query("INSERT INTO anket(k_id, soru1,soru2,soru3,soru4,soru5,soru6,soru7,soru8,soru9,soru10) VALUES (1,'$soru1','$soru2','$soru3','$soru4','$soru5','$soru6','$soru7','$soru8','$soru9','$soru10')")) 
        {
			echo "anket kayıt edildi sayfaya yönlendiriliyor...";
	header("Refresh: 3; url=giris.php"); 
        }
}
else
{
	echo "<font color='red' > bütün alanları işaretleyiniz";
}

}
?>