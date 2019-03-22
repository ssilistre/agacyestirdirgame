<?php include('config.php'); ?>
<?php require_once('icindekiler/head_section.php') ?>
<title><?php echo $siteadi; ?> | Market </title>
</head>
<body>
<!-- navbar -->
<div class="container">
<?php include('icindekiler/navbar.php') ?>
<div class="row">
    <div class="col-8">
            <div class="card border-light">
                  <div class="card-body">
<!-- içerik -->

<?php 
 
ob_start();
session_start();
$username=$_SESSION["agac"];

if(!isset($_SESSION["agac"])){
    header("Location:index.php");
}
else {
    echo "
    <strong><center>Bu sayfa henüz yapım aşamasındadır.</center></strong>


    ";
}
?>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
    <img src="https://anasponsor.com/wp-content/uploads/2015/02/sponsorol.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Sponsor Ol !</h5>
        <p class="card-text">Ödüllerimiz sponsorlarımız tarafından paylaşılmaktadır. Sizde bize katkıda bulunabilirsiniz.</p>
        <a href="#" class="btn btn-danger">Sponsor Ol</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
    <img src="https://images.ruyandagor.com/2017/04/olmus-dededen-para-almak-1808.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Para Talep Et</h5>
        <p class="card-text">1000 Ağaç 1 TL Eşittir. Yeteri Kadar ağaca sahipsen isteyebilirsin.</p>
        <a href="#" class="btn btn-success">Para Talep Et</a>
      </div>
    </div>
  </div>
</div><br>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
    <img src="http://www.gubretas.com.tr/AjaxResize.ashx?file=Files/ContentImage/Genel_icerik/Ekran_Resmi_2015-12-07_22.59.40.png&width=397&height=265" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Süper Gübre Al x10</h5>
        <p class="card-text">Süper gübre ile günde 10 ağaç dikebilirsin.</p>
        <a href="#" class="btn btn-danger">Süper Gübre Al</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
    <img src="https://www.jaxoyun.com/image/cache/catalog/Oyun%20Banner!/Ba%C5%9Fl%C4%B1ks%C4%B1z-1-1000x1000.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Random Steam Key Al</h5>
        <p class="card-text">Ücretsiz Steam Keyini Talep Et !</p>
        <a href="#" class="btn btn-dark">Steam Key Talep Et</a>
      </div>
    </div>
  </div>
</div>
<br>
<div class="card">
  <div class="card-body">
    <!-- Görev Tarafı -->
    <h3>Link.TL Görevi:</h3>
    <div class="progress">
  <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>Bu görevi tamamlayıp Fazladan 1 Kez daha ağaç dikebilirsiniz..</p><br><a href="#" class="btn btn-warning">Görevi Yap</a><br><br>
<h3>Facebook Beğeni Görevi:</h3>
    <div class="progress">
  <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>Bu görevi tamamlayıp Fazladan 1 Kez daha ağaç dikebilirsiniz..</p><br><a href="#" class="btn btn-warning">Görevi Yap</a><br><br>
<h3>Twitter Takip Görevi:</h3>
    <div class="progress">
  <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>Bu görevi tamamlayıp Fazladan 1 Kez daha ağaç dikebilirsiniz..</p><br><a href="#" class="btn btn-warning">Görevi Yap</a><br><br>
<h3>Instagram Takip Görevi:</h3>
    <div class="progress">
  <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>Bu görevi tamamlayıp Fazladan 1 Kez daha ağaç dikebilirsiniz..</p><br><a href="#" class="btn btn-warning">Görevi Yap</a><br><br>



  <!-- Görev Tarafı -->
  </div>
</div>




<!-- içerik -->
                            </div>
                            </div>     
       
        </div>
        <?php include('icindekiler/sidebar.php') ?>
        <?php include('icindekiler/footer.php') ?>
</div> 
    </body>
</html>