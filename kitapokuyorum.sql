-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 10 May 2019, 11:15:26
-- Sunucu sürümü: 10.1.9-MariaDB
-- PHP Sürümü: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kitapokuyorum`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anket`
--

CREATE TABLE `anket` (
  `id` int(11) NOT NULL,
  `k_id` int(11) NOT NULL,
  `soru1` text COLLATE utf8_turkish_ci NOT NULL,
  `soru2` text COLLATE utf8_turkish_ci NOT NULL,
  `soru3` text COLLATE utf8_turkish_ci NOT NULL,
  `soru4` text COLLATE utf8_turkish_ci NOT NULL,
  `soru5` text COLLATE utf8_turkish_ci NOT NULL,
  `soru6` text COLLATE utf8_turkish_ci NOT NULL,
  `soru7` text COLLATE utf8_turkish_ci NOT NULL,
  `soru8` text COLLATE utf8_turkish_ci NOT NULL,
  `soru9` text COLLATE utf8_turkish_ci NOT NULL,
  `soru10` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `anket`
--

INSERT INTO `anket` (`id`, `k_id`, `soru1`, `soru2`, `soru3`, `soru4`, `soru5`, `soru6`, `soru7`, `soru8`, `soru9`, `soru10`) VALUES
(1, 1, 'hiç bir fikrim yok', 'Hiç bir fikrim yok', 'Fantastik', 'okumak bilgi demektir', 'kk', 'Teknolojinin ilerlemesinden dolayı', 'hiç bir fikrim yok', 'Hiç bir fikrim yok', 'kkk', 'Fantastik'),
(2, 1, 'hiç bir fikrim yok', 'Hiç bir fikrim yok', 'Fantastik', 'okumak bilgi demektir', 'kk', 'Teknolojinin ilerlemesinden dolayı', 'hiç bir fikrim yok', 'Hiç bir fikrim yok', 'kkk', 'Fantastik'),
(3, 1, 'hiç bir fikrim yok', 'Hiç bir fikrim yok', 'Fantastik', 'okumak bilgi demektir', 'kk', 'Teknolojinin ilerlemesinden dolayı', 'hiç bir fikrim yok', 'Hiç bir fikrim yok', '', 'Fantastik'),
(4, 1, 'Basit bir tasarım var', 'Hayır önermem<', 'Romantik', 'okumak bilgi demektir', 'Fahrenheit 451', 'Herkes roman sevmeye bilir.Bizim ülkemiz bu çoğunlukta', 'Öğrencilere çocuklara kitabı gerektiği için değil sevdiği için okutmayı öğretmeli', 'Korsan kitaplar yazarların emeklerinin karşılığını almasını engelliyor', 'Tess Geritssen', 'Polsiye');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kitaplar`
--

CREATE TABLE `kitaplar` (
  `id` int(11) NOT NULL,
  `kitapadi` text COLLATE utf8_turkish_ci NOT NULL,
  `yazaradi` text COLLATE utf8_turkish_ci NOT NULL,
  `kategori` text COLLATE utf8_turkish_ci NOT NULL,
  `yayinevi` text COLLATE utf8_turkish_ci NOT NULL,
  `sayfa` int(11) NOT NULL,
  `ozet` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kitaplar`
--

INSERT INTO `kitaplar` (`id`, `kitapadi`, `yazaradi`, `kategori`, `yayinevi`, `sayfa`, `ozet`) VALUES
(1, 'AŞK PEYGAMBERİ', 'NEZİHE ARAZ', 'Roman', 'özgür', 301, 'Yine tavsiye üzerine okuduğumuz ve çok etkilendiğimiz gerçek bir eser. Kitap piyasada pek bulunmuyor maalesef. Ne yapıp yapın bu kitabı elde edip okumaya çalışın. Ele alınca bırakamayacaksınız ve bizim gibi kütüphanenizin en nadide yerlerinden birine koyacaksınız. Akıcı , yıllar sonra yeni nesiller tarafından da okunup anlaşılacak, okuyan kişinin hayatına dokunacak, başucu kitabı. Yazarı rahmetle anıyoruz.\r\nwww.birazoku.com/ask-peygamberi-mevlananin-hayati uzunca bir özet ve www.kitapyurdu.com/kitap/ask-peygamberi--mevlananin-hayati/62010.html çok sayıda okur değerlendirmeleri bulabilirsiniz. \r\ntwitter.com/kitap_okumak www.facebook.com/Kitap-Okumak-%C4%B0ster-misin-327927040637181/ www.youtube.com/user/KitapOkumak/videos\r\nTanıtım Bülteninden :\r\nNİÇİN AŞK PEYGAMBERİ?\r\nMevlana´nın romanına bu ismi verişimiz kimseyi şasırmasın. İnsan kardeşlerine aşk için en sıcak, en içten, en yanık, en canlı, en tatlı, en acı, en doğru, en yakın haberleri o getirdi. Peygamber, haberci elçi demektir Mevlana en sevdiğine, yüce mürşidi Tebrizli Şems´e:\r\n"Ey aşıklar peygamberin Gönül ateşine yanmışım ben" diye sesleniyordu. Bizim yazımız bu seslenişe yüzyıllar sonra tutulmuş bir ışıktır,\r\n"Ey aşıklar peygamberi! Gönül ateşine yanmışım ben! Boğulmuşum gözyaşına! Git sor Allahını seversen! Ne tedbir gösterir sevgili! Ne çare yazar bana?\r\nMevlana kendi derdinin çaresini yine kendi yazan adamdı Onun için:\r\n"Ben hem aşk, hem aşık, hem de maşukum.\r\nBen hem aynayım, hem güzelliğim hem de o güzelliği\r\nseyreden"\r\ndiyor\r\n"Tanrıyı sevmek ve Tanrının sevgisine ermek" Mevlana bütün yaşam ilkesini kendi diliyle böyle ifade ediyordu.\r\nNezihe Araz\r\nArka Kapaktan :\r\nAşk Peygamberi ´dünya tutkusu ile´ herkesin birbirini yediği şu günlerde içimizdeki zehirlere bir panzehir, karanlıklara bir ışık, ayrılıklara bir mutluluk getirebilme umudu ile yazıldı. Yazanın, bunda, ´katiplikten´ öte bir payı yok. Mevlana: ´Aşk geldi damarlarımda kan kesildi. Beni kendimden aldı. Beni sevgiyle doldurdu. Bedenimin bütün cüzülerini sevgili kapladı. Benden kalan yalnız bir ad. Ondan ötesi hep ´O´! dedi. Bunu öğrenmek istiyordu insan kardeşlerine. Bana da! Nezihe Araz '),
(2, 'BİLİNMEYEN BİR KADININ MEKTUBU', 'AHMET CEMAL', 'Hikaye', 'İş bankası', 55, 'Kendisi ile hiç bir zaman bir araya gelmeyecek toplumun tanıdığı ünlü R.isimli erkeğe duygularını anlatmaya çalışan bir kadının mektubundan ibaret öykü. Platonik aşk üzerine yazılmış bir çok roman olsa da Zweig usta kalemi ile karşılıksız seven bir kadının iç dünyasını tüm açıklığı ile okurun gözleri önüne sermekte.\r\n\r\n\r\n\r\n Yine bir-iki saat içinde bitebilecek akıcı bir öykü.\r\njavascript:ntrTemp(); veya javascript:ntrTemp(); linklerinde bu güzel novellayı okuyup yorum yapan iki okurun sayfalarına ulaşabilirsiniz.\r\nKitaptan: *** İçim rahat ölüyorum, çünkü sen o ölümü uzaktan hissedemezsin. Ölmem sana acı verecek olsaydı eğer, o zaman ölmezdim.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nArka Kapaktan: Stefan Zweig Bilinmeyen Bir Kadının Mektubu (Brief einer Unbekannten) adlı uzun öyküsünü 1920´li yılların ilk yarısında kaleme aldı. Bilinmeyen Bir Kadının Mektubu´nun kadın kahramanını sadece uzun bir mektubun yazarı olarak tanıyoruz. Kadının hayatı boyunca sevmiş olduğu erkek için kaleme aldığı bu mektubun "gönderen"inin adı yoktur. Mektubun başında tek bir hitap vardır: "Sana, beni asla tanımamış olan sana". Kadın büyük tutkusunu hep bir "bilinmeyen" olarak, yani tek başına yaşamaya razıdır, bu aşk öyküsünde "taraflar" değil, sadece tek bir "taraf" vardır. Böylesine, gerçek anlamda aşk denilebilir mi? Zweig okurunu, bir kez daha, insan psikolojisinde eşine pek rastlanmayan bir yolculuğa davet ediyor. Bu yeni yolculuğun sonunda "mutlak aşk" kavramının şimdiye kadar bilinmeyen kıyılarına varmayı amaçlamış olması da bir ihtimal!'),
(3, 'BİR ÇÖKÜŞÜN ÖYKÜSÜ', 'STEFAN ZWEIG', '', '', 0, ''),
(4, 'BÜYÜK DÜŞÜNMENİN BÜYÜSÜ', 'DR.DAVİD J. SCHWARTZ', 'Kişisel Gelişim', 'Sistem Yayınları', 277, 'Kendinize yatırım yapın, bu kitabı okuyun. Beklediğinizin üstünde etkileyici olduğunu göreceksiniz. Gelecek nesillerimiz için kütüphanemizin en güzel raflarından birinde yer alıyor. Öneririz.\r\nwww.tolgabeyaz.net/bloggg.html#!singlearticle-view/20140109-002 linkini tıklarsanız kitapla ilgili uzun bir değerlendirme bulacaksınız.\r\nwww.facebook.com/Kitap-Okumak-%C4%B0ster-misin-327927040637181/ www.youtube.com/user/KitapOkumak/videos \r\nKitaptan :Ne olduğunuzu düşünüyorsanız osunuz.\r\nLidere saygı duymak iyidir. Ondan öğrenin. Onu gözleyin. Onu inceleyin. Ama ona tapmayın.\r\nBüyük fikir ve planlar çoğu zaman küçük fikir ve planlardan daha kolaydır (daha zor olmadıkları kesindir).\r\nBelki insanların en büyük zayıflığı kendilerini layık görmemeleridir. Yani kendini ucuza satmaktır.\r\nDostluklar satın alınamaz. Bunu denersek iki biçimde kaybederiz: Para harcamış oluruz. Kendimizi küçültmüş oluruz.'),
(5, 'DOĞMAMIŞ BİR ÇOCUĞA MEKTUP', 'ORLANA FALLACİ', 'Roman', 'Can', 123, 'Tek kelime ile muhteşem. Hayatın böyle sorgulandığı bir esere rastlamak oldukça zor. Mutlaka okumanızı ve kütüphanenizde bulundurmanızı öneririz. kitaplarimolmadanasla.blogspot.com.tr/2014/01/oriana-fallaci-dogmamis-bir-bebege.html adresinde bir kitap okurunun çok daha detaylı yorumunu okumanızı tavsiye ederiz.\r\ntwitter.com/kitap_okumak www.facebook.com/Kitap-Okumak-%C4%B0ster-misin-327927040637181/ www.youtube.com/user/KitapOkumak/videos\r\nKitaptan:***"Kadınla erkek arasında aşk dedikleri, bir mevsim. Ve bu mevsim çiçeklenme döneminde nasıl bir yeşillikler şöleniyse, solma döneminde de bir yığın çürüyen yapraktan başka bir şey değil."\r\n***Erkek doğarsan, umarım hep düşlerimde kurduğum gibi bir erkek olursun; zayıflara karşı yumuşak, küstahlara karşı sert, seni sevenlere karşı cömert, seni kullanmak isteyenlere karşı acımasız... Bir de, İsaların, onları doğuran kadının değil de, Tanrı´nın, Kutsal Ruh´un oğulları olduğunu söyleyen herkesin düşmanı olasın.\r\n***İnsan, harika bir sözcük; çünkü kadın-erkek ayrımı yapmıyor, kuyruğu olanlarla olmayanlar arasına bir sınır çizmiyor. Ayrıca, kuyruğu olanlarla olmayanları ayıran sınır bir kıl payından fazla değil. Uygulamada, gövdenin içinde başka bir varlık büyütüp büyütememe yeteneğine dayanıyor eninde sonunda. Yüreğin, beynin cinsiyeti yok. Davranışların da yok. Hiç unutma bunu. Ve sen, yüreği ve beyni olan bir kişi olarak yetişirsen, şu ya da bu biçimde -erkek ya da dişi olarak- davranman konusunda ısrar edecekler arasında ben olmayacağım.\r\nArka Kapaktan:\r\n"Senden korkuyorum. Seni hiç yokluktan zorla çekip alan, gövdeme ekleyen rastlantıdan. Seni çok beklediysem de karşılamaya asla hazır olmadım. Ama kendi kendime hep o kötü soruyu sordum: Ya doğmak hoşuna gitmezse? Ya günün birinde haykırıp suçlarsan beni: ´Sana kim dedi beni dünyaya getir diye ? Neden dünyaya getirdin beni, neden?"\r\n\r\n\r\nİtalyan yazar Oriana Fallaci böyle diyor derin izler bırakan kitabı Doğmamış Bir Çocuğa Mektup´un başlarında. Erkeğinden ayrılmış bir kadının, gebe olduğunu anladığı andan başlayarak hissettiklerini, iç dünyasında kopan fırtınaları, yaşadığı korkuları, çoşkusunu ve erincini başka hiçbir kitap bu kadar başarıyla yansıtamadı, okuru bu denli etkileyemedi. Bir kadının bedeninde filizlenen o küçüçük canlıyla, onu karnında taşıdığı 1975 yılından bu yana sayısız dile çevrilen bu çarpıcı kitap, Oriana Fallaci´nin ustalıklı ve şiirsel anlatımıyla haklı bir başarıya ulaşıyor; unutulmazlar arasında yerini alıyor.'),
(6, 'DÖRT ANLAŞMA', 'DON MİGUEL REWİZ', '', '', 0, ''),
(7, 'HEİDİ', 'JOHANNA SPYRI', '', '', 0, ''),
(8, 'KUANTUM BESLENME', 'DR.AYŞEGÜL ÇORUHLU', 'Beslenme & Diyet', 'Okuyan Us', 232, 'Beslenme üzerine yıllardır çalışmalar yapan yazarın son kitabı sağlıklı, doğru beslenme üzerine yeni bilgilerle kaleme alınmış ve bu konuda güvenilir kaynak arayan okurların ilgisine sunulmuş. Beslenme hakkında kaynak arıyorsanız yazara ve kitaplarına baş vurmayı düşünebilirsiniz.\r\njavascript:ntrTemp(); ve javascript:ntrTemp(); tıkladığınızda bu değerli çalışmanın yazarı ve içeriği hakkında oldukça detay bilgi sahibi olabilirsiniz.\r\nArka Kapaktan:\r\nNeden hastalanmayı normal kabul ediyoruz? Neden yaşlanmayı normal kabul ediyoruz? Ne kadar çok hastalık var değil mi? √ İnsülin rezistansı √ Hipoglisemi √ Tip 2 Diyabet √ Alzheimer √ Polikistik over √ Spastik kolon √ Enflamasyon √ Bel bölgesinde yaşlanma √ Fibromiyalji √ Kronik yorgunluk √ Kanser Ve elbette yaşlanma… Hiç düşündünüz mü, tüm bu hastalıkların altında aslında tek bir ortak sebep yatıyor olabilir mi? Her hastalığın başlangıcı, atomlar seviyesinde aynı olabilir mi? Yanıt içimizde, hücrelerimizde gizli! Mükemmel bir sağlığa sahip olmak, hastalıkları daha oluşmadan engellemek, uzun bir ömür için gerekli ipuçlarını öğrenmek artık mümkün. Hayat boyu üst düzey fiziksel, zihinsel ve cinsel performansa sahip olmak bir düş değil. Biyolojik olarak bir üst model insan olmanın sırrına çok yakınız… Sır içimizde, hücrelerimizde gizli! Alkali Diyet ve Tokuz Ama Açız kitaplarıyla sağlık, beslenme ve anti-aging konularında adeta bir devrim yapan Dr. Ayşegül Çoruhlu şimdi de hücrelerimizin içine giriyor ve atom altı dünyamızın kuantum biyolojisini gözler önüne seriyor. Çoruhlu, can kaynağımız, enerji motorlarımız hücrelerimizin işleyişini her okuyucunun anlayabileceği bir sadelikle ele alarak, bu motorlar için en doğru yakıtı seçme yollarını tek tek ortaya koyuyor. Hastalıklarda derdimiz ve tedavide ise dermanımız aynıdır: En iyi enerji için hücrelerimize en doğru yakıtı seçmek. Asli görevimiz budur. En doğru yakıt, hücrenin biyolojisine -eksik söyledim- hücrelerin ‘kuantum biyolojisine’ uygun olmalıdır. Çünkü bilimin geldiği son noktada artık klasik biyoloji bilgileri hücrelerimizdeki karmaşık enerji üretimini açıklamakta yetersizdir. Yeni biyoloji Kuantum Biyolojisidir. Hastalıkları ve yaşlanmayı unutun! Hastalanmak ve yaşlanmak normal değldir! Genç, sağlıklı hücrelerle uzun yıllar yaşamak normaldir. Bu kitapta anlatılanları uygulayarak sağlıklı ve uzun bir ömrün sırrını öğrenmeye hevesliyseniz 140’ıncı yaş gününüz şimdiden kutlu olsun!'),
(9, 'SAVAŞÇI', 'DOĞAN CÜCELOĞLU', '', '', 0, '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `adisoyadi` text COLLATE utf8_turkish_ci NOT NULL,
  `ceptel` int(11) NOT NULL,
  `email` text COLLATE utf8_turkish_ci NOT NULL,
  `sifre` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `adisoyadi`, `ceptel`, `email`, `sifre`) VALUES
(1, 'NERGİN', 2147483647, 'NERGİN.TIRGIT@HOTMAİL.COM', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'nergin turgut', 123456, 'nergin.turgut@hotmail.com', '2c733e1c401bc547a64818f47fc3358f'),
(3, 'esra', 2147483647, 'NERGİN.TIRGIT@HOTMAİL.COM', '2c733e1c401bc547a64818f47fc3358f'),
(4, 'şlklşk', 2147483647, 'kl', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'esra tutkal', 2147483647, 'nergin.turgut1@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'NERGİN', 2147483647, 'nergin.turgu1t@hotmail.com', '202cb962ac59075b964b07152d234b70'),
(7, 'NERGİN', 2147483647, 'nergin.turgut@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(8, 'NERGİN', 2147483647, 'nergin.turgu1t@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(9, 'NERGİN2', 2147483647, 'nergin.turgut2@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 'esra tutkalos', 2147483647, 'NERGİN.TIRGIT2@HOTMAİL.COM', 'e10adc3949ba59abbe56e057f20f883e'),
(11, 'adile naşit', 2147483647, 'nergin.turgut123@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(12, 'ışılay', 2147483647, 'ısilay@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumayorum`
--

CREATE TABLE `yorumayorum` (
  `id` int(11) NOT NULL,
  `yorumid` int(11) NOT NULL,
  `kullaniciid` int(11) NOT NULL,
  `yorum` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yorumayorum`
--

INSERT INTO `yorumayorum` (`id`, `yorumid`, `kullaniciid`, `yorum`) VALUES
(24, 4, 7, 'yani boş yorum yapıyorsun buralar sana göre değil'),
(32, 4, 7, 'evet evet bende beğeniyorum'),
(33, 4, 7, 'evet evet bende beğeniyorum'),
(34, 4, 7, 'evet evet bende beğeniyorum'),
(65, 7, 7, 'eh yani iyi gibi haklısın aslında'),
(66, 7, 7, 'simdi ne desem suç yan ben pek bu konuları anlamyıroum bu kitabı beğenenleride çözemedim doğrusu ama ne yapacağım elden bir şey gelmez'),
(67, 9, 9, 'cidden mi hadi be bende tavsiye ederim ama o kadar deüil');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yorumlar`
--

CREATE TABLE `yorumlar` (
  `yorum_id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `kitap_id` int(11) NOT NULL,
  `yorum` text COLLATE utf8_turkish_ci NOT NULL,
  `degerlendirme` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yorumlar`
--

INSERT INTO `yorumlar` (`yorum_id`, `kullanici_id`, `kitap_id`, `yorum`, `degerlendirme`) VALUES
(7, 7, 2, 'bence de harika bir kitap', 5),
(8, 7, 2, 'kötü bir puan verdim sanırım', 2),
(9, 9, 1, 'bu kitabı daha öncede duydum ve herkese tavsiye ederimm çok beğenğim bir kitap bu', 5),
(10, 9, 1, 'bu kitabım adını unuttum neydi yaa ama beğendim gerçekten güzelmiş', 4),
(11, 11, 2, 'ben adile naşit ve bu kitabı tavsiye ederim neden bilmiyorum ama kalbime çok dokundu o yüzden bu kitabı bırakmayın ve mutlaka okuyun 5 üzerinde 5 puan!!!', 5),
(13, 7, 1, 'yeni bu kaçoıncı yorum', 5),
(14, 7, 5, '1000 puan harika muhteşem bir kitap gerçekten çok fazla beğendim ve her puanı hak ediyorum gerçekten ama ne yapalım elden bu kadar iyi olması benim suçum değil :D', 5);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `anket`
--
ALTER TABLE `anket`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kitaplar`
--
ALTER TABLE `kitaplar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yorumayorum`
--
ALTER TABLE `yorumayorum`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`yorum_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `anket`
--
ALTER TABLE `anket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Tablo için AUTO_INCREMENT değeri `kitaplar`
--
ALTER TABLE `kitaplar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Tablo için AUTO_INCREMENT değeri `yorumayorum`
--
ALTER TABLE `yorumayorum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- Tablo için AUTO_INCREMENT değeri `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
