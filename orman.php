<?php include('config.php'); ?>
<?php require_once('icindekiler/head_section.php') ?>
<title><?php echo $siteadi; ?> | Orman Sayfası </title>
</head>
<body>
<!-- navbar -->
<div class="container">
<?php include('icindekiler/navbar.php') ?>
<div class="row">
    <div class="col-8">
            <div class="card border-light">
                  <div class="card-body">


<?php
$id = htmlspecialchars(addslashes($_GET['id']));
$sql = "SELECT `name`, `visits`,`agacsayisi`,`ustbilgi`,`altbilgi` FROM `forests` WHERE `id`='$id'";
$res = mysql_query($sql) or die(mysql_error());
if(mysql_num_rows($res) > 0)
{
$row = mysql_fetch_array($res);
$agacsayisi=$row['agacsayisi'];
$ustbilgi=$row['ustbilgi'];
$altbilgi=$row['altbilgi'];
$ip = $_SERVER['REMOTE_ADDR'];
$sql2 = "SELECT * FROM `visits` WHERE `forest_id`='$id' AND `ipadress`='$ip'";
$res2 = mysql_query($sql2) or die(mysql_error());
if(mysql_num_rows($res2) > 0)
{
echo '

'.$ustbilgi.'<br>
<div class="alert alert-danger" role="alert">
Daha önce bu orman bölgesini ziyaret edip <a href="#" class="alert-link">'. $agacsayisi.' ağaç dikmiştiniz.</a> Tekrar ağaç dikmek isterseniz 24 Saat beklemeniz gerekiyor.
</div>

';
}
else
{
$newvisits = $row['visits'] + $agacsayisi + $paketsayisi;
$time = time() + 86400;
$sql3 = "INSERT INTO `visits` (`id`, `forest_id`, `ipadress`, `time`) VALUES ('', '$id', '$ip', '$time');";
$res3 = mysql_query($sql3) or die(mysql_error());
$sql4 = "UPDATE `forests` SET `visits`='$newvisits' WHERE `id`='$id'";
$res4 = mysql_query($sql4) or die(mysql_error());
echo '
'.$ustbilgi.'<br>
<div class="alert alert-success" role="alert">
Bu bölgeye geldiğin için teşekkürler bu sayede <a href="#" class="alert-link">'.$row['name'].'</a> orman bölgesine <a href="#" class="alert-link">'. $agacsayisi.'</a> adet ağaç diktiniz.
</div>



';
}

echo '

<div id="ormanmain">
<embed id="ormanmain" src="forest.swf?feuilles='.$row['visits'].'" width="700" height="420"></div>
<br>

'.$altbilgi.'<br>


<b>Bu orman hakkında genel bilgiler:</b><br>
<b>'.$row['name'].'</b> bu orman bölgesinin sahibi.<br>
Bu bölgeye her ziyaret eden kişi '. $agacsayisi.' adet ağaç dikmektedir.<br>
Toplamda bu bölgedeki ağaç sayısı '.number_format($row['visits']).'<br>

';
}
else
{
header('location: index.php');
echo 'Bu orman bulunamadi.';

}
?>
<?php include('icindekiler/sosyalmedya.php') ?>
<?php include('icindekiler/yorumsayfasi.php') ?>
</div>
                            </div>     
       
        </div>
        
        <?php include('icindekiler/sidebar.php') ?>
        <?php include('icindekiler/footer.php') ?>
</div> 
    </body>
</html>