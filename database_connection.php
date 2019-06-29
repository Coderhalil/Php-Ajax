<?php // veri tabanı bağlantısı
	$ip = "localhost"; //host
	$user = "root";  // host id
	$password = "";  // password local olduğu için varsayılan şifre boş
	$db = "testing"; // db adı
	
	//bağlantı
	try{
		$connect = new PDO("mysql:host=$ip;dbname=$db",$user,$password);
		
		
		//eğer hata olursa pdo nun exception komutu ile ekrana yazdırıyoruz
	}catch(PDOException $e){
		die ("Hata var");
	}
?>