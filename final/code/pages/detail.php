<?php require_once('_new_header.php'); ?>
<section id="product">
  <div class="new_container clearfix">
    <div class="grid_12 titlesection">
      <h1>Candies & Nuts</h1>
    </div>
    <div class="grid_12">
      <div id="options" class="clear">




        <ul id="filters" data-option-key="filter">


				<?php
					foreach($cats as $cat) {
						echo " <li class=\"orange\"><a href=\"index.php?page=product&amp;category=".$cat['id']."\"";
						echo Helper::getActive(array('category' => $cat['id']));
						echo " >";
						echo Helper::encodeHtml($cat['name']);
						echo "</a></li>";
					}
				?>


        </ul>
      </div>
    </div>
    <div id="containerisotope" class="clear">






    </div>
  </div>
</section>
<?php
$id = Url::getParam('id');

if (!empty($id)) {

	$objCatalogue = new Catalogue();
	$product = $objCatalogue->getProduct($id);

	if (!empty($product)) {

		$category = $objCatalogue->getCategory($product['category']);
		$image = !empty($product['image']) ?
			'media/catalogue/'.$product['image'] :
			null;
	}

?>
<section id="special">
  <div class="container clearfix">
    <div class="grid_12 titlesection">
      <h1><?=$category['name']?></h1>
    </div>
<div class="grid_2 expand"></div>
    <div class="grid_4 expand">
      <div class="logoprice"> <img class="rotate" alt="" src="<?=$image?>" /> </div>
      <div class="ribbon">
        <h2>$<?=$product['price']?></h2>
      </div>
      <div class="price">
        <P></P>
        <ul>
          <li>
            <p><font color="#FFFFFF"><?=$product['name']?></p></font>
          </li>
          <li>
            <p class="noborder"><font color="#FFFFFF"><?=$product['description']?></p></font>
          </li>
        </ul>
      </div>
      <div class="triangle"></div>
    </div>

    <div class="grid_4  expand">
    <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'candiesnutsshoppe'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>

</div>

  </div>
</section>
<br/><br/>
<center>
		<h2>&copy; <a href="index.php" title="Candies & Nuts Shoppe" target="_blank">Candies & Nuts Shoppe</a>  2014 | <a href="admin" target="new">ADMIN</a></h2></center>
<?php }require_once('_footer.php'); ?>