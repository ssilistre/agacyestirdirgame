<?php include('../config.php'); ?>
<?php require_once('./icindekiler/head_section.php') ?>
<title><?php echo $siteadi; ?> | Admin Panel </title>
</head>
<body>
<!-- navbar -->
<div class="container">
<?php include('./icindekiler/navbar.php') ?>
<div class="row">
    <div class="col-12">
            <div class="card border-light">
                  <div class="card-body">
<!-- içerik -->

<?php 

    $username=$_SESSION["agac"];
   
    
if(!isset($_SESSION["agac"])){
 
    echo '
    <form method="POST">
    <div class="form-group">
      <label for="exampleInputEmail1">Kullanıcı Adı:</label>
      <input type="text" class="form-control" name="kadi" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kullanıcı adı">
      </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Şifre:</label>
      <input type="password"  name="parola" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <button type="submit" name="giris" class="btn btn-primary">Giriş Yap</button>
    </form>
    
    ';
 
}
else {
  $yetki='';
  $sql = "SELECT * FROM `forests` WHERE username='$username'";
  $res = mysql_query($sql) or die(mysql_error());
    while($row = mysql_fetch_array($res))
    {
      $yetki=$row['Yetki'];
    }

    echo '
    
    


    <div class="card">
  <h5 class="card-header">Bu Script Hakkında</h5>
  <div class="card-body">
    <h5 class="card-title">Beni Mutluaka Oku</h5>
    <p class="card-text">Öncelikle bu scripti buralara kadar geliştirmiş ve geliştirmeye devam ediyor bulunmaktayım. Yani aşağıdaki butondan yeni değişiklikleri okuyabilirsin.</p>
    <a href="http://agacyetistir.ssilistre.me" class="btn btn-primary">Script Güncellemeleri Oku</a>
  </div>
</div>
      <br>

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Üye Yönetimi</h5>
        <p class="card-text">Bu sayfadan üyeleri düzenleyebilir veya silebilirsin..</p>
        <a href="uyeler.php" class="btn btn-danger">Sayfaya Git</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Github Sayfası</h5>
        <p class="card-text">Github sayfasından güncel halini indirebilirsin veya wiki sayfalarından yararlanabilirsin..</p>
        <a href="https://github.com/ssilistre/agacyetistirvedik" class="btn btn-dark">Github</a>
      </div>
    </div>
  </div>
</div>


    ';
}

if (!$yetki >'0') {
  header("Location:../index.php");
}

?>





<!-- içerik -->
                            </div>
                            </div>     
       
        </div>
        <?php include('./icindekiler/footer.php') ?>
</div> 
    </body>
</html>