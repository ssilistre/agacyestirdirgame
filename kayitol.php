<?php include('config.php'); ?>
<?php require_once('icindekiler/head_section.php') ?>
<script language="javascript" type="text/javascript">
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
<title><?php echo $siteadi; ?> | Kayıt Ol </title>
<?php 
if(isset($_SESSION["agac"])){
  header("Location:index.php");
}
?>
</head>
<body>
<div class="container">
<?php include('icindekiler/navbar.php') ?>
<div class="row">
    <div class="col-8">
    <div class="card border-light">
                  <div class="card-body">
        
          
                    
                <h2>Yeni bir orman bölgesi oluştur !</h2>
                
                <p class="em_text">

<b>Sadece Iki bilgi ile aninda ucretsiz kayit olabilirsiniz.</b><br><br>
<form method="post" action="">
<font color="#333300" size="2" >Ormaninizin Adi</font> (4-20 Karakter) <font color="#333300" size="3" >:</font> <br>
<input name="name" class="form-control" type="text" autocomplete="off" /> <br />
<font color="#333300" size="2">E-Mail Adresiniz :</font><br> 
<input name="email" class="form-control" type="text" autocomplete="off" /> <br />
<font color="#333300" size="2">Kullanıcı Adı:</font><br> 
<input name="username" class="form-control" type="text" autocomplete="off" /> <br />
<font color="#333300" size="2">Şifreniz :</font><br> 
<input name="password" class="form-control" type="password" autocomplete="off" /> <br />
<input name="register" type="submit" class="btn btn-primary" value="Kayit Ol" /><br />
</form>
<?php
if($_POST['register'])
{
echo '<br />';
echo '<font color="red">';
$name = htmlspecialchars(addslashes($_POST['name']));
$email = htmlspecialchars(addslashes($_POST['email']));
$username = htmlspecialchars(addslashes($_POST['username']));
$password = $_POST['password'];
if(empty($name) || empty($email))
{
echo 'Lütfen Bütün Alanları Eksiksiz Doldurun..

</div>
';
}
else if(strlen($name) < 4 || strlen($name) > 20)
{
echo 'Kullanici Adi 4 ila 20 karakter arasi olmalidir !';
}
else if(!preg_match("/^[_a-zA-Z0-9]+(\.[_a-zA-Z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,6})$/", $email))
{
echo 'E-Mail Adresi Gecersiz.';
}
else
{
$sql = "SELECT * FROM `forests` WHERE `name` LIKE '$name'";
$res = mysql_query($sql) or die(mysql_error());
$sql2 = "SELECT * FROM `forests` WHERE `email` LIKE '$email'";
$res2 = mysql_query($sql2) or die(mysql_error());
$sql3 = "SELECT * FROM `forests` WHERE `name` LIKE '$username'";
$res3 = mysql_query($sql3) or die(mysql_error());

if(mysql_num_rows($res) > 0)
{
echo 'Orman Adi Kullanilmaktadir.';
}
else if(mysql_num_rows($res2) > 0)
{
echo 'E-Mail Adresi Kullanilmaktadir.';
}
else if(mysql_num_rows($res3) > 0)
{
  echo 'Bu kullanıcı adı kullanılıyor.';
}
else
{
$sql4 = "INSERT INTo `forests` (`id`, `name`, `email`, `visits`, `username`, `Password`, `Yetki`, `zaman`, `agacsayisi`) VALUES ('', '$name', '$email', '', '$username', '$password', '', '', '1');";
$res5 = mysql_query($sql4) or die(mysql_error());
$sql5 = "SELECT `id` FROM `forests` WHERE `name`='$name'";
$res6 = mysql_query($sql5) or die(mysql_error());
$row6 = mysql_fetch_array($res6);
echo '<font color="green">Kayit Basariyla Tamamlandi! Asagidaki adresi arkadaslariniza gonderin !</font></font><br />Orman Adresiniz: <b><font color="#021599"><a href="'.$url.'orman.php?id='.$row6['id'].'">'.$url.'orman.php?id='.$row6['id'].'</font></b></a>';}
}
}
?>


</p>
</div></div>
			</div>
            
        <?php include('icindekiler/footer.php') ?>
</body>
</html>
 
 
<?php /*Semih Silistre tarafın yapılmıştır.-->
<!--
Bu Script tarafımca yazılım ssilistre.me sitesinde ücretsiz paylaşılmıştır
bu ve bunun gibi scriptleri sitemde paylaşmak isterim... Ayrıca script 
geliştirilmeye açık bir haldedir. Dileyen geliştirsin arkadaşlar -->		 
*/?>