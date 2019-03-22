<?php include('../config.php'); ?>
<?php require_once('./icindekiler/head_section.php') ?>
<title><?php echo $siteadi; ?> | Site Ayarları </title>
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
    header("Location:index.php");
    
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
    echo '';
    
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