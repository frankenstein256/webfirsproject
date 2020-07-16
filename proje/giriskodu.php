<?php

include 'vtbaglanti.php';
@session_start();


$email  = @$_POST['eposta']; //ne ile giriş yapacaksan 


$sifre  = @$_POST['sifre'];


$sifre = md5($sifre);


if($_POST){
/*
function yonlendir ($adres,$saniye)
{
    echo "<meta http-equiv=\"refresh\" content=\"$saniye;URL=$adres\">";
$yon=0;
    return $yon;
} */
    if($sifre=="" || $email==""){echo "<font color=red><b>Lutfen Bos Alan Birakmayin</font>";}


    else{


    $sorgula = mysqli_query($baglanti,"SELECT * FROM kullanicilar WHERE email='".$email."' and sifre='".$sifre."'"); //seninki kayı tabşlosu


    $verisay = mysqli_num_rows($sorgula);


    if ($verisay >0){


        $_SESSION['eposta'] = $email;
	/*yonlendir("profil.php",1);*/
	header("Refresh: 3; url=profil.php"); 


    }else{


        echo "<font color=red><b>Yanlis kullanici adi veya sifre girdiniz lutfen kontrol ediniz!!</font>";


    }


}


}


?>