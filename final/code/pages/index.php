<?php require_once('_header.php'); ?><head>
</head>
<form method="POST" action="pages/files/editIndex.php" onsubmit="copyAndSendData()">
<input name="userDataForSaving" id="userDataForSaving" type="hidden">

</input>
<span id="editSpan"><!--BREAK-->
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

          <div class="grid_6"><p><?=$business['about'];?></p><p><br></p> </div>

          <div class="grid_6"><img src="img/history.jpg" border="3" style="border-style:inset"></div>

        </div>

</section>

<section id="history">

  <div class="anchors">

    <div class="contanchors"> <a href="#about"><img class="anchortop" alt="" src="img/toptestimonials.png"></a> <a href="#product"><img class="anchorbottom" alt="" src="img/bottomtestimonials.png"></a> </div>

  </div>

  <div id="darkfilter">

    <div class="container clearfix">

      <div class="grid_12 topquote"> <img alt="" src="img/topquote.png"> </div>

      <div class="grid_6 lefttestimonials">

        <h2><?=$business['history1'];?></h2>

        <p>- <?=$business['history1_customer'];?></p>

      </div>

      <div class="grid_6 righttestimonials">

        <h2><?=$business['history1'];?></h2>

        <p> - <?=$business['history2_customer'];?></p>

      </div>

      <div class="grid_12 bottomquote"> <img alt="" src="img/bottomquote.png"> </div>

    </div>

  </div>

</section>

<!--BREAK--></span>







<section id="product">
  <div class="anchors">
    <div class="contanchors"> <a href="#about"><img class="anchortop" alt="" src="img/toptestimonials.png" /></a> <a href="#product"><img class="anchorbottom" alt="" src="img/bottomtestimonials.png" /></a> </div>
  </div>
  <div class="container clearfix">
    <div class="grid_12 titlesection">
      <h1>Candies & Nuts</h1>
      <h2><center>Please Choose A Category to See Our Wide Variety of Candies and Nuts</center></h2><br /><br />
    </div>
    <div class="grid_12">
      <div id="options" class="clear">
      <ul id="filters" data-option-key="filter">


				<?php
					foreach($cats as $cat) {
						echo " <li class=\"orange\"><a href=\"index.php?page=product&amp;category=".$cat['id']."\"";
						echo Helper::getActive(array('category' => $cat['id']));
						echo " \>";
						echo Helper::encodeHtml($cat['name']);
						echo "</a></li>";
					}
				?>


        </ul>
      </div>
    </div>
  </div>
</section>

<section id="oursocial">
  <div class="container clearfix">
    <div class="grid_12 titlesection">
      <h1>Follow Us</h1>
    </div>
 <div class="grid_3 expand">&nbsp;</div>

    <div class="grid_4 expand"><a href="https://www.facebook.com/CandyNutShoppe" target="_blank"><img class="rotate" alt="" src="img/facebook.png" /></a></div>
    <div class="grid_4 expand"> <a href="https://plus.google.com/112874426673849076995/about?gl=us&hl=en" target="_blank"> <img class="rotate" alt="" src="img/googleplus.png"> </a> </div>
  </div>
</section>
<footer id="contacts">

        <div class="topwaves"></div>
        <div id="markers">
          <div id="bigmarker">
            <h2>Contact Us</h2>
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
          <div id="littlemarkerclose" class="rotate"> <img alt="" src="img/littlemarkerclose.png" /></div>
        </div>
        <div id="map-canvas"></div>
</footer>

<?php require_once('_footer.php'); ?>