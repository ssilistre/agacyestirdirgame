<?php 
 include("../config.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz.

 $username=$_SESSION["agac"]; 
 if(!isset($_SESSION["agac"])){
     header("Location:../index.php");
    
  
 }
 else {
   $yetki='';
   $sql = "SELECT * FROM `forests` WHERE username='$username'";
   $res = mysql_query($sql) or die(mysql_error());
     while($row = mysql_fetch_array($res))
     {
       $yetki=$row['Yetki'];
     }
 
     if (!$yetki >'0') {
        header("Location:index.php");
      }else{
        if ($_GET) 
        {
                
        // id'si seçilen veriyi silme sorgumuzu yazıyoruz.
        $sil = mysql_query("DELETE FROM `forests` WHERE id =".(int)$_GET['id']);
        if ($sil)
            {
                
             header('location: uyeler.php');
            }
            else
            {
                echo "Hata veri tabanı'na ulaşılmadı";
            }
        }
     }
 }
 
 

?>



