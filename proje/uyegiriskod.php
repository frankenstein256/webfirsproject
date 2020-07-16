<?php
include 'vtbaglanti.php';

@session_start();


$email  = mysqli_real_escape_string(@$_POST['eposta']);


$sifre  = mysqli_real_escape_string(@$_POST['sifre']);


$sifre = md5($sifre);


if($_POST){

function yonlendir ($adres,$saniye)
{
    echo "<meta http-equiv=\"refresh\" content=\"$saniye;URL=$adres\">";
$yon=0;
    return $yon;
} 
    if($sifre=="" || $email==""){echo "<font color=red><b>Lutfen Bos Alan Birakmayin</font>";}


    else{


    $sorgula = mysqli_query("SELECT * FROM kullanicilar WHERE email='".$email."' and sifre='".$sifre."'");


    $verisay = mysqli_num_rows($sorgula);


    if ($verisay >0){


        $_SESSION['eposta'] = $email;
	yonlendir("profil.php",1);


    }else{


        echo "<font color=red><b>Yanlis kullanici adi veya sifre girdiniz lutfen kontrol ediniz!!</font>";


    }


}


}
?>