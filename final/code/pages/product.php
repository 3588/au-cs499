<?php require_once('_new_header.php'); ?>
<section id="product">
  <div class="new_container clearfix">
    <div class="grid_12 titlesection">
      <h1>Candies & Nuts</h1>
    </div>
    <div class="grid_12">
      <div id="options" class="clear">
        <ul id="filters"  data-option-key="filter">
		<?php
					foreach($cats as $cat) {
						echo " <li class=\"orange\"><a href=\"index.php?page=product&amp;category=".$cat['id']."\"";
						echo Helper::getActive(array('category' => $cat['id']));
						echo ">";
						echo Helper::encodeHtml($cat['name']);
						echo "</a></li>";
					}
				?>


        </ul>
      </div>
    </div>
    <div id="containerisotope" class="clear">
    <?php
    $cat = Url::getParam('category');
	$objCatalogue = new Catalogue();
	$category = $objCatalogue->getCategory($cat);
	$rows = $objCatalogue->getProducts($cat);
;	if(!empty($rows)) {
			foreach($rows as $row) {
			$image = !empty($row['image']) ?
			$objCatalogue->_path.$row['image'] :
			$objCatalogue->_path.'unavailable.png';
			"http://placehold.it/278x183";
		?>
<div class="element <?=$cat;?>" data-category="<?=$cat?>"> <a href="index.php?page=detail&amp;category=<?php echo $category['id']; ?>&amp;id=<?php echo $row['id']; ?>#special"> <img alt="" class="imgwork" src="<?=$image;?>" /> </a>
        <div class="worksarrow"><a href="index.php?page=detail&amp;category=<?php echo $category['id']; ?>&amp;id=<?php echo $row['id']; ?>"> <img alt="" src="img/arrow.png" /></a> </div>
        <h2><?=Helper::encodeHtml($row['name'], 1);?><?=" ".Catalogue::$_currency; echo number_format($row['price'], 2); ?></h2> <p><?=Helper::shortenString(Helper::encodeHtml($row['description'])); ?></p>

        <div class="worksbottom"></div>
      </div>

<?php
			}

		}
?>





    </div>
  </div>
</section>

<center>
		<h2>&copy; <a href="" title="Candies & Nuts Shoppe" target="_blank">Candies & Nuts Shoppe 2014</a> | <a href="/admin" target="new">ADMIN</a> <!-- | <a href="/pages/files/htmleditor.php" target="new">EDITOR</a></h2>-->
</center>
<?php require_once('_footer.php'); ?>