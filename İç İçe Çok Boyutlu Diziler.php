<!DOCTYPE html>
<html lang="tr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Çoklu Dizi</title>
</head>

<body>
	<?php
	#İşlem Sınıfım
	class DiziCoz
	{
		#Dışardan Erişimi Olmayan Dizi Çözme Fonksiyonumuz
		private function CokluBul($deger = array(), $sira, $pre)
		{
			if (is_array($deger)) {

				#Gelen $pre'ye Ekleme Yapılır
				$pre = $pre . "_____";

				for ($i = 0; $i < count($deger); $i++) {

					#gelen dizinin içinde her bir dizi olduğunu sürece bu fonksiyon çalışır
					if (is_array($deger[$i])) {

						#Her bir siraya önce ana index ile şuanki indexi birleştirir
						$kutu = $sira . "[$i]";

						#gelen veriler ile dizi olma dahilinde tekrardan veriler gönderilir işlem yapılır
						$this->CokluBul($deger[$i], $kutu, $pre);
					} else {

						#dizinin olmadığını durumlarda burası ekrana yazdırır.
						echo "<pre>" . $pre . $sira . "[$i] => " . $deger[$i] . "</pre>";
					}
				}
			} 
		}
		#BulCoz Fonksiyonum Bir Paramtere İçerir Değeri Dizidir
		public function BulCoz($dizi = array())
		{
			#Gelen Diziyi Teker Teker Bölüyorum
			for ($i = 0; $i < count($dizi); $i++) {

				#Girilen Değeri Örneğin => [1] veya [3] ' $i ' ye Göre Değişiklik Gösterir
				$sira = "[$i]"; 

				#Girilen Her Değer İçin Önüne Koyulacak İşaret
				$pre = "## "; 

				#Eğer Bir Dizi İse CokluBul Fonksiyonumuz Gider 
				if (is_array($dizi[$i])) {

					#CokluBul('Dinizin Kaçıncı Elemanı Dizi' , 'İndex NumarasI Kaç' , 'Önünde Hangi İşaret Olsun')
					$this->CokluBul($dizi[$i], $sira, $pre);
				} else {
					#Girilen Dğerler Düzenle Bir Biçimde Ekrana Yazılır.
					echo "<pre>$pre{$sira} => " . $dizi[$i] . "</pre>";
				}
			}
		}
	}
	#İç içe istenildiği kadar çoklu dizi yazılabilir
	$CokluDizi =  array(
		"JAVA", "C", "ARDUINO",

		array(
			"PHP", "HTML",

			array("CSS", "CSS3"),

			"JAVASCRIPT",

			array("NODEJS", "REACTJS")
		),

		"VISUAL BASIC", "GO",

		array(
			"RUBT", "GROOVY",

			array(
				"OBJECTIVE-C",

				array("PASCAL", "SWIFT")
			)
		),

		"MATLAB", "İSA KÖSEOĞLU"
	);
	#İşlem Yapıcağımız Sınıfımızı Çağırıyoruz
	$dizi = new DiziCoz();
	$dizi->BulCoz($CokluDizi);#BulCoz Fonksiyonumuza Diziyi Aktarıyoruz
	
	#çıktısına bakılarak istenilen değer elde edilir örneğin : $CokluDizi[3][0] istenilen dizi değeri bulunur

	#-- software developer İsa Köseoğlu | www.isakoseoglu.com --#
	?>

</body>

</html>