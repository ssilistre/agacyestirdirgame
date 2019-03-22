<?php include('config.php'); ?>
<?php require_once('icindekiler/head_section.php') ?>
<title><?php echo $siteadi; ?> | Anasayfa </title>
</head>
<body>
<!-- navbar -->
<div class="container">
<?php include('icindekiler/navbar.php') ?>
<div class="row">
    <div class="col-8">
            <div class="card border-light">
                  <div class="card-body">
                    
                <h2>Bölge Sıralaması</h2>
                
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
<th scope="col" abbr="Adres">Bölgenin Linki</th>
<th scope="col" abbr="Agac">Dikilen Ağaç Sayısı</th>
</tr>
</thead>
';

while($row = mysql_fetch_array($result))
{
echo '
<tbody>
<tr>
<td class="tabloZRFark">'.$row['name'].'</td>
<td class="tabloZRFark"><a href="'.$url.'orman.php?id='.$row['id'].'">'.$url.'orman.php?id='.$row['id'].'</a></td>
<td class="tabloZRFark"><span class="badge badge-pill badge-success">'.$row['visits'].' Ağaç </span></td>
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
$nomeranastranici .= ' <a href="'.$url.'siralama.php?page='.$page.'">'.$page.'</a> ';
}
}






if ($pageNum > 1)
{
$page = $pageNum - 1;
$predishna = ' <a href="'.$url.'siralama.php?page='.$page.'"> << </a> ';

$parva = ' <a href="'.$url.'siralama.php?page=1">Ilk Sayfa</a> ';
}
else
{
$predishna = ' ';
$parva = ' ';
}

if ($pageNum < $maxPage)
{
$page = $pageNum + 1;
$sledvashta = ' <a href="'.$url.'siralama.php?page='.$page.'"> >> </a> ';

$posledna = ' <a href="'.$url.'siralama.php?page='.$maxPage.'">Son Sayfa</a> ';
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
        <?php include('icindekiler/sidebar.php') ?>
        <?php include('icindekiler/footer.php') ?>
</div> 
    </body>
</html>