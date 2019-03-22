<?php include('../config.php'); ?>
<?php require_once('./icindekiler/head_section.php') ?> 
<title><?php echo $siteadi; ?> | Üye Düzenle </title>
<script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
</head>
<body>
<!-- navbar -->
<div class="container">
<?php include('./icindekiler/navbar.php') ?>
<div class="row">
    <div class="col-12">
            <div class="card border-light">
                  <div class="card-body">
<?php 
$username=$_SESSION["agac"]; 
if(!isset($_SESSION["agac"])){
    header("Location:../index.php");
   
 
}else{
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






 $sql="SELECT * FROM forests WHERE id =".(int)$_GET['id'];
 $res = mysql_query($sql) or die(mysql_error());
 while($row = mysql_fetch_array($res))
 {
    $ormanadi=$row['name']; 
    $kadi=$row['username']; 
    $sifre=$row['Password']; 
    $email=$row['email']; 
    $yetki2=$row['Yetki']; 
    $agacsayisi=$row['agacsayisi']; 
    $visits=$row['visits']; 
    $ustbilgi=$row['ustbilgi']; 
    $altbilgi=$row['altbilgi']; 
 }

}
}


?>
                  <!-- üye düzenleme -->
                  <form method="POST">  
  <div class="form-group">
    <label for="formGroupExampleInput">Orman Adı:</label>
    <input type="text" name="ormanadi" class="form-control" id="ormanadi" placeholder="Example input" value="<?php echo $ormanadi;?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Kullanıcı Adı:</label>
    <input type="text" name="kadi" class="form-control" id="kadi" placeholder="Another input" value="<?php echo $kadi;?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Mail Adresi:</label>
    <input type="text" name="email" class="form-control" id="email" placeholder="Another input" value="<?php echo $email;?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Yetkisi (0=Yetkisiz 1=Admin):</label>
    <input type="text" name="Yetki" class="form-control" id="Yetki" placeholder="Another input" value="<?php echo $yetki2;?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Tek Seferde Dikebileceği Ağaç Sayısı:</label>
    <input type="text" name="agacsayisi" class="form-control" id="agacsayisi" placeholder="Another input" value="<?php echo $agacsayisi;?>">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Toplam Ağaç Sayısı:</label>
    <input type="text" name="visits" class="form-control" id="visits" placeholder="Another input" value="<?php echo $visits;?>">
  </div>
  <div class="card-header"> <b>
            Ormanın üst kısmındaki yazı alanı:</b></div>
  <textarea name="editor1" id="editor1" rows="10" cols="80">
            <?php echo $ustbilgi;?>
            </textarea><div class="card-header"> <b>
            Ormanın alt kısmındaki yazı alanı:</b></div>
            <textarea name="editor2" id="editor2" rows="10" cols="80">
            
            <?php echo $altbilgi;?>
            </textarea><br>
            <button type="submit" name="guncelle" class="btn btn-primary">Bilgileri Kaydet</button>
</form>
 <!-- üye düzenleme -->
 <?php
if (isset($_POST['guncelle'])) {
    $ustbilgi = $_POST['editor1'];
    $altbilgi = $_POST['editor2'];
    $ormanadi=$_POST['ormanadi'];
    $kadi=$_POST['kadi'];
    $email=$_POST['email'];
    $yetki2=$_POST['Yetki'];
    $agacsayisi=$_POST['agacsayisi'];
    $visits=$_POST['visits'];


    $update = mysql_query("UPDATE `forests` SET ustbilgi='$ustbilgi', altbilgi='$altbilgi' , name='$ormanadi', email='$email', username='$kadi',Yetki='$yetki2',agacsayisi='$agacsayisi',visits='$visits' WHERE id =".(int)$_GET['id']);
 
    if ($update)
    {
        
     header('location: uyeler.php');
    }
    else
    {
        echo "Hata veri tabanı kaydı yapılamadı.";
    }

}else
{
     
}

?>
 </div>
                            </div>     
       
        </div>
        <?php include('./icindekiler/footer.php') ?>
</div> <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
                CKEDITOR.replace( 'editor2' );
            </script>
    </body>
</html>
