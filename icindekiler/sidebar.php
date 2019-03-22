<?php session_start(); ?>
<div class="col-4">
    <?php 

    $username=$_SESSION["agac"];
   
    
if(!isset($_SESSION["agac"])){
 
   echo '
   <div class="card border-light" style="max-width: 25rem;">
   <div class="card-header">Üye Girişi</div>
   <div class="card-body">
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
     </div>
     </div>
   
   ';
 
}
else {
  $eposta='';
  $default = "";
  $yetki='';
  $sql = "SELECT * FROM `forests` WHERE username='$username'";
  $res = mysql_query($sql) or die(mysql_error());
    while($row = mysql_fetch_array($res))
    {
      
    $eposta=$row['email'];
    $yetki=$row['Yetki'];
    }
    $boyut=75;
    $gravatar = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $eposta ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $boyut;
    echo '
    <div class="border-light" style="max-width: 25rem;">
    <div class="card-header">Hoşgeldiniz sayın '.$username.' </div>
    <div class="card-body text-dark">
      <p class="card-text">
      <img src="'.$gravatar.'" alt="" />
      <li class=""> <a href=profil.php>Profil</a><br></li>
      <li class="">  <a href=market.php>Market</a><br></li>
      <li class=""> <a href=cikis.php>Güvenli Çıkış</a></li>
      </p>
    </div>
    </div>
    ';
}

if ($yetki >'0') {
  echo '
  <li class="">  <a href=admin/>Admin Paneli</a><br></li>
  ';
}

?>
         <br>
      <div class="border-light" style="max-width: 25rem;">
    <div class="card-header">Enler Listesi</div>
    <div class="card-body text-dark">
   <?php $sql12="SELECT * FROM `forests` ORDER BY `visits` DESC LIMIT 5";
    $res12 = mysql_query($sql12) or die(mysql_error());
    while($row = mysql_fetch_array($res12))
    {
      
      echo ' <ul class="list-group list-group-flush">
      <li class="list-group-item"><img src="https://image.flaticon.com/icons/svg/861/861151.svg" width="18" height="18" /> <a href="'.$url.'orman.php?id='.$row['id'].'">'.$row['name'].'</a></li></ul>';
     
    }

    ?>

    </div>
    <br>
      <div class="border-light" style="max-width: 25rem;">
    <div class="card-header">Sponsor Alanı</div>
    <div class="card-body text-dark">
      <p class="card-text">
      <img src="http://3.bp.blogspot.com/-JVJ1oAR9ycI/VcdWMuYkS7I/AAAAAAAAAQU/VnPSrtYiqZM/s1600/dinamit.jpg" alt="" width="252" height="250" />
      
      </p>
    </div></div>
</div>
<br>
</div>
