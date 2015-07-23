<?php
$objCatalogue = new Catalogue();
$cats = $objCatalogue->getCategories();

$objBusiness = new Business();
$business = $objBusiness->getBusiness();
?>
<!DOCTYPE html><html lang="en"> <!--<![endif]-->
<head>
 
    <meta charset="utf-8">  
    
    <title>Candies & Nuts Shoppe</title>

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
<header id="navigationmenu">
  <div class="container clearfix">
    <div class="grid_5">
      <nav class="leftnavigation">
        <ul>
          <li><a href="#product">Product</a></li>
          <li><a href="#about">About Us</a></li>
        </ul>
      </nav>
    </div>
    <div class="grid_2 logo"><a href="#sectionslide"> <img alt="" src="img/logo.png" /> </a></div>
    <div class="grid_5">
      <nav class="rightnavigation">
        <ul>
          <li><a href="#n3">Follow Us</a></li>
          <li><a href="#n4">Contact</a></li>
        </ul>
      </nav>
    </div>
  </div>
</header>
<section id="sectionslide">
  <div class="topwaves"></div>
<div class="fullwidthbanner-container">
            <div class="fullwidthbanner">
                <ul>
                 
                <li data-transition="random" data-slotamount="15" data-masterspeed="300" data-delay="7800">       
                        <img alt="" src="img/header/signHeader.png"  >
                    </li>
                     <li data-transition="random" data-slotamount="10" data-masterspeed="300" data-delay="6100">     
                        <img alt="" src="img/header/chocolatesHeader.png" >          
                    </li>
                    <li data-transition="random" data-slotamount="15" data-masterspeed="300" data-delay="7800">       
                        <img alt="" src="img/header/VDayHeader.png"  >
                    </li>
                     <li data-transition="random" data-slotamount="15" data-masterspeed="300" data-delay="7800">       
                        <img alt="" src="img/header/mixedNutsHeader.png"  >
                    </li>
              </ul>
    </div>
  </div>
             
</section>
<section id="about">
    
        <div class="bottomwaves"></div>
        <div class="container clearfix">
          <div class="grid_12 titlesection">
            <h1>About Us</h1>
          </div>
          <div class="grid_6"><p>This is text about them.  They will write this information.</p> </div>
          <div class="grid_6"><img src="img/history.jpg" border="3" style="border-style:inset"></div>
        </div>
</section>
<section id="history">
  <div class="anchors">
    <div class="contanchors"> <a href="#about"><img class="anchortop" alt="" src="img/toptestimonials.png" /></a> <a href="#product"><img class="anchorbottom" alt="" src="img/bottomtestimonials.png" /></a> </div>
  </div>
  <div id="darkfilter">
    <div class="container clearfix">
      <div class="grid_12 topquote"> <img alt="" src="img/topquote.png" /> </div>
      <div class="grid_6 lefttestimonials">
        <h2>TEXT</h2>
        <p>TEXT</p>
      </div>
      <div class="grid_6 righttestimonials">
        <h2>This is my absolute favorite candy shoppe. I shop here for all occasions and there is always service with a smile. There's a nostalgic air to this quaint store. I recommend highly at least stopping by to browse.</h2>
        <p> - Jessica W.</p>
      </div>
      <div class="grid_12 bottomquote"> <img alt="" src="img/bottomquote.png" /> </div>
    </div>
  </div>
</section>
<section id="product">
  <div class="anchors">
    <div class="contanchors"> <a href="#about"><img class="anchortop" alt="" src="img/toptestimonials.png" /></a> <a href="#product"><img class="anchorbottom" alt="" src="img/bottomtestimonials.png" /></a> </div>
  </div>
  <div class="container clearfix">
    <div class="grid_12 titlesection">
      <h1>Candies & Nuts</h1>
    </div>
    <div class="grid_12">
      <div id="options" class="clear">
        <ul id="filters" class="option-set clearfix" data-option-key="filter">
          <li class="orange"><a href="#filter" data-option-value="*" class="selected">Show all</a></li>
				<?php 
					foreach($cats as $cat) {
						if($cat['id']%2==1)
						echo "<li class=\"navi\">";
						else
						echo "<li class=\"yellow\">";
						echo "<a href=\"#filter\" ";
						echo "data-option-value=\".".$cat['id'];
						echo Helper::getActive(array('category' => $cat['id']));
						echo "\">";
						echo Helper::encodeHtml($cat['name'])."</a></li>";
					}
				?>
        </ul>
      </div>
    </div>
    <div id="containerisotope" class="clear">
    
    
    
    
    <?php
	$objCatalogue = new Catalogue();
	$cat = 4;
	$category = $objCatalogue->getCategory($cat);
	$rows = $objCatalogue->getProducts($cat);
	if(!empty($rows)) {
			foreach($rows as $row) {
			$image = !empty($row['image']) ? 
			$objCatalogue->$row['image'] :
			"http://placehold.it/278x183";
		?>
<div class="element <?=$cat;?>" data-category="<?=$cat?>"> <a> <img alt="" class="imgwork" src="<?=$image;?>" /> </a>
        <div class="worksarrow"> <img alt="" src="img/arrow.png" /> </div>
        <h2><?=Helper::encodeHtml($row['name'], 1);?><?=Catalogue::$_currency; echo number_format($row['price'], 2); ?></h2> <p><?=Helper::shortenString(Helper::encodeHtml($row['description'])); ?></p>

        <div class="worksbottom"></div>
      </div>

<?php
			}
			
		} 
?>
<?php
$cat = 5;
	$category = $objCatalogue->getCategory($cat);
	$rows = $objCatalogue->getProducts($cat);
	if(!empty($rows)) {
			foreach($rows as $row) {
			$image = !empty($row['image']) ? 
			$objCatalogue->$row['image'] :
			"http://placehold.it/278x183";
?>
<div class="element <?=$cat;?>" data-category="<?=$cat?>"> <a> <img alt="" class="imgwork" src="<?=$image;?>" /> </a>
        <div class="worksarrow"> <img alt="" src="img/arrow.png" /> </div>
        <h2><?=Helper::encodeHtml($row['name'], 1);?><?=Catalogue::$_currency; echo number_format($row['price'], 2); ?></h2> <p><?=Helper::shortenString(Helper::encodeHtml($row['description'])); ?></p>

        <div class="worksbottom"></div>
      </div>
<?php
			}
			
		} 
?>


    </div>
  </div>
</section>
<section id="special">
  <div class="anchors">
    <div class="contanchors"> <a href="#product"><img class="anchortop" alt="" src="img/topprices.png" /></a> <a href="#oursocial"><img class="anchorbottom" alt="" src="img/bottomprices.png" /></a> </div>
  </div>
  <div class="container clearfix">
    <div class="grid_12 titlesection">
      <h1>Our Special</h1>
    </div>
    <div class="grid_3 expand">
      <div class="logoprice"> <img class="rotate" alt="" src="http://placehold.it/176x176" /> </div>
      <div class="ribbon">
        <h2>$ 10.00 - <span>TEXT</span></h2>
      </div>
      <div class="price">
        <p>TEXT.</p>
        <ul>
          <li>
            <p>TEXT</p>
          </li>
          <li>
            <p class="noborder">TEXT</p>
          </li>
        </ul>
        <p class="btn red"><a href="#">BUY NOW</a></p>
      </div>
      <div class="triangle"></div>
    </div>
    <div class="grid_3 expand">
      <div class="logoprice"> <img class="rotate" alt="" src="http://placehold.it/176x176" /> </div>
      <div class="ribbon">
        <h2>$ 10.00 - <span>TEXT</span></h2>
      </div>
      <div class="price">
        <p>TEXT.</p>
        <ul>
          <li>
            <p>TEXT</p>
          </li>
          <li>
            <p class="noborder">TEXT</p>
          </li>
        </ul>
        <p class="btn blue"><a href="#">BUY NOW</a></p>
      </div>
      <div class="triangle"></div>
    </div>
    <div class="grid_3 expand">
      <div class="logoprice"> <img class="rotate" alt="" src="http://placehold.it/176x176" /> </div>
      <div class="ribbon">
        <h2>$ 10.00 - <span>TEXT</span></h2>
      </div>
      <div class="price">
        <p>TEXT.</p>
        <ul>
          <li>
            <p>TEXT</p>
          </li>
          <li>
            <p class="noborder">TEXT</p>
          </li>
        </ul>
        <p class="btn yellow"><a href="#">BUY NOW</a></p>
      </div>
      <div class="triangle"></div>
    </div>
    <div class="grid_3 expand">
      <div class="logoprice"> <img class="rotate" alt="" src="http://placehold.it/176x176" /> </div>
      <div class="ribbon">
        <h2>$ 10.00 - <span>TEXT</span></h2>
      </div>
      <div class="price">
        <p>TEXT.</p>
        <ul>
          <li>
            <p>TEXT</p>
          </li>
          <li>
            <p class="noborder">TEXT</p>
          </li>
        </ul>
        <p class="btn green"><a href="#">BUY NOW</a></p>
      </div>
      <div class="triangle"></div>
    </div>
  </div>
</section>
<section id="oursocial">
  <div class="anchors">
    <div class="contanchors"> <a href="#special"><img class="anchortop" alt="" src="img/topprices.png" /></a> <a href="#oursocial"><img class="anchorbottom" alt="" src="img/bottomprices.png" /></a> </div>
  </div>
  <div class="container clearfix">
    <div class="grid_12 titlesection">
      <h1>Follow Us</h1>
    </div>
    <div class="grid_4 expand"> <a href="https://www.facebook.com/CandyNutShoppe" target="_blank"> <img class="rotate" alt="" src="img/facebook.png"></a></div>
    <div class="grid_4 expand"> <a href="https://plus.google.com/112874426673849076995/about?gl=us&hl=en" target="_blank"> <img class="rotate" alt="" src="img/googleplus.png"> </a> </div>
  </div>
</section>
<footer id="contacts">
        
        <div class="topwaves"></div>
        <a class="backtotop" href="#navigationmenu"> <img alt="" src="img/backtotop.png" /> </a>
        <div id="markers">
          <div id="bigmarker">
            <h2><a href="/admin" target="new">Contact Us</a></h2>
            <ul>
              <li>
                <p class="iconhome">39 E Main St Ashland, OH 44805</p>
              </li>
              <li>
                <p class="iconphone">(419) 281-2766</p>
              </li>
              <li>
                <p class="iconfax">(419) 281-2766</p>
              </li>
            </ul>
          </div>
          <div id="littlemarker" class="rotate"> <img alt="" src="img/littlemarker.png" /> </div>
          <div id="littlemarkerclose" class="rotate"> <img alt="" src="img/littlemarkerclose.png" /> </div>
        </div>
        <div id="map-canvas"></div>
</footer>
<script src="js/jquery.min.js"></script>
<script src="js/google-api.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="slide/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script src="slide/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/scroolto.js"></script>
<script src="js/settings.js"></script>
</body>  
</html>