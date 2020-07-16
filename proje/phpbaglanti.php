<?php

@$baglanti = new mysqli('localhost', 'root', '', 'kitapokuyorum'); // Veritabanı bağlantımızı yapıyoruz.
    if(mysqli_connect_error()) //Eğer hata varsa yazdırıyoruz 
    {
        echo mysqli_connect_error();
        exit; //eğer bağlantıda hata varsa PHP çalışmasını sonlandırıyoruz.
    }

$baglanti->set_charset("utf8"); // Türkçe karakter sorunu olmaması için utf8'e çeviriyoruz.




if ($_POST) { // Sayfada post olup olmadığını kontrol ediyoruz.

    // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
    $name = $_POST['adi']; 
    $ceptel = $_POST['ceptel'];
	   $eposta = $_POST['eposta'];
		$sifrem=$_POST['sifre'];
$sifre = md5($sifrem);
$sorgu=mysqli_query($baglanti,"SELECT * FROM kullanicilar WHERE email='".$eposta."'");
$kadisorgu=mysqli_query($baglanti,"SELECT * FROM kullanicilar WHERE adisoyadi='".$name."'");
			$say=mysqli_num_rows($sorgu);
			$say2=mysqli_num_rows($kadisorgu);
		
	

    if ($name<>"" && $sifre<>"" && $eposta<>"") { 
    // Veri alanlarının boş olmadığını kontrol ettiriyoruz. Başka kontrollerde yapabilirsiniz.
        
         // Veri ekleme sorgumuzu yazıyoruz.
		//kullancı adı ve eposta kontrolü burada yapılacak
		
		
  
		if(strlen($sifre)<6)
{
	 echo "<pre>                <font color='red' size='4'>en az 6 karakter giriniz:</a></pre>";
			  
}	else{
		if($say>0)
		{
			echo "  <font color='red' size='4'>bu email adresi var</font>";
		}
		else if($say2>0)
		{
		echo "  <font color='red' size='4'>bu kullanıcı adı var</font>";

		}
		
		else
		{
        
			if ($baglanti->query("INSERT INTO kullanicilar (adisoyadi, ceptel,email,sifre) VALUES ('$name','$ceptel','$eposta','$sifre')")) 
        {
	header("Refresh: 0; url=giris.php"); 
	

	  
        }
		}
}
        
		

    }
	else
	{
			 echo "<pre>                <font color='red' size='4'>boş alan bırakma bütün alanların doldurulması zorunludur !!!</a></pre>";
		
		
	}
	
}


?>