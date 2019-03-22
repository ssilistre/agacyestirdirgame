<?php include('config.php'); ?>
<?php require_once('icindekiler/head_section.php') ?>
<title><?php echo $siteadi; ?> | Profil </title>
<script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>

</head>
<body>
<!-- navbar -->
<div class="container">
<?php include('icindekiler/navbar.php') ?>
<div class="row">
    <div class="col-8">
            <div class="card border-light">
                  <div class="card-body">
                  <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Market Fırsatı</h5>
        <p class="card-text">Özel Gübre Satın Al ve Tek Seferde Bir Çok Ağaç Dik !</p>
        <a href="market.php" class="btn btn-danger">Hemen Gözat</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Görev Yap</h5>
        <p class="card-text">Daha fazla ağaç veya daha kısa sürede ağaç dikmek için görevlerin..</p>
        <a href="market.php" class="btn btn-dark">Görev Yap</a>
      </div>
    </div>
  </div>
</div><br>
<?php 
 
ob_start();
session_start();
$username=$_SESSION["agac"];
$ustbilgi="";
$altbilgi="";
$eposta="";
if(!isset($_SESSION["agac"])){
    header("Location:index.php");
}
else {
    echo "
    
    
    
    ";

    $sql="SELECT * FROM forests WHERE username ='$username'";
    $res = mysql_query($sql) or die(mysql_error());
    while($row = mysql_fetch_array($res))
    {
       $ustbilgi=$row['ustbilgi']; 
       $altbilgi=$row['altbilgi']; 
    }
}
?>
<form method="POST">
<div class="card text-center">
  <div class="card-header">
          <b> Ormanın üst kısmındaki yazı alanı:<br></b></div>
  <div class="card-body">
            <textarea name="editor1" id="editor1" rows="10" cols="80">
            <?php echo $ustbilgi; 
                 // Veritabanından verileri çekip inputların içine yazdırıyoruz. ?>
            </textarea><div class="card-header"> <b>
            Ormanın alt kısmındaki yazı alanı:</b></div>
            <textarea name="editor2" id="editor2" rows="10" cols="80">
            
            <?php echo  $altbilgi; 
                 // Veritabanından verileri çekip inputların içine yazdırıyoruz. ?>
            </textarea>
            </div>
</div>
<br>
<button type="submit" name="save" class="btn btn-primary">Bilgileri Kaydet</button>
        </form>
<?php
if (isset($_POST['save'])) {
    $ustbilgi = $_POST['editor1'];
    $altbilgi = $_POST['editor2'];


    $update = mysql_query("UPDATE `forests` SET ustbilgi='$ustbilgi', altbilgi='$altbilgi' WHERE username='$username'");
 
    if ($update)
    {
        
     header('location: profil.php');
    }
    else
    {
        echo "Hata veri tabanı kaydı yapılamadı.";
    }

}else
{
     
}

?>





<!-- içerik -->
                            </div>
                            </div>     
       
        </div>
        <?php include('icindekiler/sidebar.php') ?>
        <?php include('icindekiler/footer.php') ?>
</div> 
    </body>
</html>

<!--Semih Silistre tarafın yapılmıştır.-->
<!--
Bu Script tarafımca yazılım ssilistre.me sitesinde ücretsiz paylaşılmıştır
bu ve bunun gibi scriptleri sitemde paylaşmak isterim... Ayrıca script 
geliştirilmeye açık bir haldedir. Dileyen geliştirsin arkadaşlar-->
<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
                CKEDITOR.replace( 'editor2' );
            </script>