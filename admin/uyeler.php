<?php include('../config.php'); ?>
<?php require_once('./icindekiler/head_section.php') ?>
<title><?php echo $siteadi; ?> | Üye Yönetimi </title>
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

    echo '
    
    

 


    ';
}

if (!$yetki >'0') {
  header("Location:index.php");
}

?>


            <div class="card border-light">
                  <div class="card-body">
                    
                <h2>Üye Yönetimi</h2>
                
                <p class="em_text">


<?php

$broinastranica = 15;
$pageNum = 1;
if(isset($_GET['page']))
{
$pageNum = $_GET['page'];
}


$redove = ($pageNum - 1) * $broinastranica;

$query = " SELECT * FROM `forests` ORDER BY `visits` DESC LIMIT $redove, $broinastranica";
$result = mysql_query($query) or die('Error, query failed');

echo '

<table class="table table-hover">
  <thead>
<tr>
<tr>
<th scope="col" abbr="Ad">Orman Bölgesi</th>
<th scope="col" abbr="Adres">Kullanıcı Adı</th>
<th scope="col" abbr="Agac">Dikilen Ağaç Sayısı</th>
<th scope="col" abbr="Agac">E-Posta Adresi</th>
<th scope="col" abbr="Agac">Dikebileceği Ağaç Sayısı</th>
<th scope="col" abbr="Agac">Yetkisi</th>
<th scope="col" abbr="Agac"> </th>
<th scope="col" abbr="Agac"> </th>
</tr>
</thead>
';

while($row = mysql_fetch_array($result))
{
echo '
<tbody>
<tr>
<td class="tabloZRFark">'.$row['name'].'</td>
<td class="tabloZRFark">'.$row['username'].'</td>
<td class="tabloZRFark"><span class="badge badge-pill badge-success">'.$row['visits'].' Ağaç </span></td>
<td class="tabloZRFark">'.$row['email'].'</td>
<td class="tabloZRFark">'.$row['agacsayisi'].'</td>
<td class="tabloZRFark">'.$row['Yetki'].'</td>
<td><a href="duzenle.php?id='.$row['id'].'" class="btn btn-primary">Düzenle</a></td>
<td><a href="sil.php?id='.$row['id'].'" class="btn btn-danger">Sil</a></td>
</tr>
</tbody>
';
}
echo '</table>';



$query = "SELECT COUNT(id) AS `numrows` FROM `forests`";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result, MYSQL_ASSOC);
$numrows = $row['numrows'];


$maxPage = ceil($numrows/$broinastranica);

$nomeranastranici = '';

for($page = 1; $page <= $maxPage; $page++)
{
if ($page == $pageNum)
{
$nomeranastranici .= " $page ";
}
else
{
$nomeranastranici .= ' <a href="'.$url.'uyeler.php?page='.$page.'">'.$page.'</a> ';
}
}






if ($pageNum > 1)
{
$page = $pageNum - 1;
$predishna = ' <a href="'.$url.'uyeler.php?page='.$page.'"> << </a> ';

$parva = ' <a href="'.$url.'uyeler.php?page=1">Ilk Sayfa</a> ';
}
else
{
$predishna = ' ';
$parva = ' ';
}

if ($pageNum < $maxPage)
{
$page = $pageNum + 1;
$sledvashta = ' <a href="'.$url.'uyeler.php?page='.$page.'"> >> </a> ';

$posledna = ' <a href="'.$url.'uyeler.php?page='.$maxPage.'">Son Sayfa</a> ';
}
else
{
$sledvashta = ' ';
$posledna = ' ';
}

echo "<br /><center>Sayfa: $parva  $predishna  $nomeranastranici  $sledvashta  $posledna</center>";
?>


</div>
                            </div>     
       
         
       
        </div>
        <?php include('./icindekiler/footer.php') ?>

    </body>
</html>