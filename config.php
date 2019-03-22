<?php
ob_start(); 
session_start();



$db="localhost";
$kullanici ="databasekullanici";
$sifre="databasesifre";
$dataname ="databaseisim";
$disqusisim="disgusadin";
$siteadi="SİTE ADI";
$url = 'http://siteniz.com/'; // Oyunun Tam URLsi /

//Bunun altindakileri düzenlemene gerek yok aslan..
$username = "";
$parola="";
$email    = "";
$ormanadi ="";
$yetki = "";
////

mysql_connect($db,$kullanici,$sifre);
mysql_select_db($dataname) or die('Databaseye baglanilamadi.Config dosyasini eksiksiz ve dogru doldurunuz.'); 
mysql_query("SET NAMES UTF8");
$delltime = time();
mysql_query("DELETE FROM `visits` WHERE `time` <= '$delltime'");


if (isset($_POST['giris'])) {
	$kadi = $_POST["kadi"];
	$parola = $_POST["parola"];
	$bul = mysql_query("SELECT * FROM `forests` WHERE username='$kadi' AND Password='$parola'");
	$say = mysql_fetch_array($bul);
	if($say > 0 ){
	//$_SESSION["agac"] = true;
	$_SESSION["agac"] = $kadi;
//	$_SESSION["parola"] = $parola;
	//$kadi=$username;

	
	header("location:profil.php");
	
	}else{
	echo '
	
	<div class="container">
  <div class="row">
	<div class="col-12">
	<center><div class="alert alert-danger" role="alert"><font color="red"><a href="index.php">GİRİŞ BAŞARISIZ</a></font><center></div>
	
	</div>
  </div>
</div>

	
	
	';
	}
	}else{
	echo '';

	}

?>
