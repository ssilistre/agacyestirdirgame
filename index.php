<?php include('config.php'); ?>
<?php require_once('icindekiler/head_section.php') ?>
<title><?php echo $siteadi; ?> | Anasayfa </title>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
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

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/orman1.png" class="card-img-top" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./images/orman2.png" class="card-img-top" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><br>
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Hediyeleri Gör</h5>
        <p class="card-text"><p><img src="https://image.flaticon.com/icons/svg/1594/1594933.svg" width="25" height="25" />&nbsp; Hediyelerin yanında tema vakfı tarafından sana &ouml;zel hazırlanan sertifikayıda kazan.</p></p>
        <a href="market.php" class="btn btn-danger">Hediyelere Git</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Hemen Sisteme Katıl !</h5>
        <p class="card-text"><p><img src="https://image.flaticon.com/icons/svg/1628/1628399.svg" width="25" height="25" />&nbsp;Farklı bir &ccedil;ok &ouml;d&uuml;l&uuml;m&uuml;zden yararlanmak i&ccedil;in hemen sisteme katıl arkadaşlarını davet et daha fazla kazan.</p></p>
        <a href="kayitol.php" class="btn btn-success">Kayıt Ol</a>
      </div>
    </div>
  </div>
</div>
<br>
<div class="card" id="nasilcalir">
  <h5 class="card-header"><strong>Bu Sistem Nasıl &Ccedil;alışır ?</strong></h5>
  <div class="card-body">
    <p class="card-text">

    <p><img alt="" src="http://www.tema.org.tr/folders/14966/categorial1images/23/TemaLogo_Jpg.jpg" style="height:82px; width:200px" /></p>

<ul>
	<li>Her <strong>100 ağa&ccedil;</strong> dikimi yap &ouml;d&uuml;lleri kazan.&nbsp;</li>
	<li>24 Saat&#39;de <strong>1</strong> kez ağa&ccedil; dikebilirsin.</li>
	<li>Daha fazla ağa&ccedil; dikmek i&ccedil;in orman linkini arkadaşlarınla paylaş.</li>
	<li>G&ouml;revleri yap ağa&ccedil; dikimini <strong>1</strong> den 5 e katla.&nbsp;</li>
	<li>Market&#39;den G&uuml;bre Satın al <strong>1</strong> yerine 10 ağa&ccedil; dik.</li>
</ul>

<h5 class="card-title"><strong>100 Ağa&ccedil; bana ne kazandırır ?</strong></h5>

<ul>
	<li>Tema vakfına sizin yerinize ağa&ccedil; dikimi yapıyoruz.</li>
	<li>Her 100 ağa&ccedil; i&ccedil;in bizden kazandığınız &ouml;d&uuml;ller mevcut.</li>
</ul>  
    </p>
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