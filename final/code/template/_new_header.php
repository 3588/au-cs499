<?php
$objCatalogue = new Catalogue();
$cats = $objCatalogue->getCategories();

$objBusiness = new Business();
$business = $objBusiness->getBusiness();
?>
<!DOCTYPE html><html lang="en"> <!--<![endif]-->
<head>

    <meta charset="utf-8">

    <title><?=$business['name'];?></title>
<link rel="icon" href="favicon.ico" mce_href="favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="favicon.ico" mce_href="favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/isotope.css" />
    <link rel="stylesheet" type="text/css" href="slide/css/fullwidth.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="slide/rs-plugin/css/settings.css" media="screen" />
    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <![endif]-->

</head>
<body>
<header id="new_navigationmenu">
  <div class="container clearfix">
    <div class="grid_5">
      <nav class="leftnavigation">
        <ul>
          <li><a href="index.php#product" >Products</a></li>
          <li><a href="index.php#about" >About Us</a></li>
        </ul>
      </nav>
    </div>
    <div class="grid_2 logo"><a href="index.php" > <img alt="" src="img/logo.png" /></a></div>
    <div class="grid_5">
      <nav class="rightnavigation">
        <ul>
          <li><a href="index.php#oursocial" >Follow Us</a></li>
          <li><a href="index.php#contacts" >Contact</a></li>
        </ul>
      </nav>
    </div>
  </div>
</header>