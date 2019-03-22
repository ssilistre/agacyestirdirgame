<div class="card">
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #aeff04;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.php"><?php echo $siteadi; ?> </a>

  <div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Anasayfa</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="index.php#nasilcalir">Nasıl Çalışır ?</a>
      </li>
      <!--Kayıt Ol Linki -->
      <?php
     $username=$_SESSION["agac"];
    if(!isset($_SESSION["agac"])){
      echo ' <li class="nav-item">
      <a class="nav-link" href="kayitol.php">Kayıt Ol</a>
      </li>
     
      ';
    } ?>
     
      <li class="nav-item">
      <a class="nav-link" href="siralama.php">EN Listesi</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="market.php">Market</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Arama Yap.." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ara</button>
    </form>
  </div>
</nav>
<div class="jumbotron botron-flujumid" style="">
    <h1 class="display-4">
    <h1><img src="https://image.flaticon.com/icons/svg/346/346246.svg" width="63" height="63" />&nbsp;Ağa&ccedil; Dik &Uuml;lkeyi Kurtar</h1>
    </h1>
    <p class="lead">
    <?php
     $username=$_SESSION["agac"];
    if(!isset($_SESSION["agac"])){
      echo '
      <b>Selam güzel insan</b>, orman yetiştiriciliğine hoşgeldin. Hemen görevleri tamamla bölgeni genişlet hediyeleri kazan..
      ';
    }
    else {
        $sorgu = "select * from `forests` where username='$username'";
        $getir =  mysql_query($sorgu) or die('Error, query failed');

        while($row = mysql_fetch_array($getir))
          {
          echo '<div>
          '.$username.' hoşgeldin toplam ağaç sayın : <span class="badge badge-pill badge-success">'.$row['visits'].' Ağaç </span><br>

          Arkadaşlarına gönderebileceğin link: <b><a href="'.$url.'orman.php?id='.$row['id'].'">'.$url.'orman.php?id='.$row['id'].'</a></b>
          </div>
         
          ';
        }

        
    }
    
    ?>
    </p>
  </div>
  <?php
  $username=$_SESSION["agac"];
  ?>