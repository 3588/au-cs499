<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Admin System</title>
<meta name="description" content="description" />
<meta name="keywords" content="keywords" />
<meta http-equiv="imagetoolbar" content="no" />
<link href="../css/admin.css" rel="stylesheet" type="text/css" />
</head>
<?php 
$objCatalogue = new Catalogue();

$srch = Url::getParam('srch');

if (!empty($srch)) {
	$products = $objCatalogue->getAllProducts($srch);
	$empty = 'There are no results matching your searching criteria.';
} else {
	$products = $objCatalogue->getAllProducts();
	$empty = 'There are currently no records.';
}

$objPaging = new Paging($products, 5);
$rows = $objPaging->getRecords();

$objPaging->_url = '/admin'.$objPaging->_url;

require_once('template/_header.php'); 
?>

<h1>Products</h1>

<form action="" method="get">
	<?php echo Url::getParams4Search(array('srch', Paging::$_key)); ?>
	<table cellpadding="0" cellspacing="0" border="0" class="tbl_insert">
	
		<tr>
			<th><label for="srch">Product:</label></th>
			<td>
				<input type="text" name="srch" id="srch" 
					value="<?php echo stripslashes($srch); ?>" class="fld" />
			</td>
			<td>
				<label for="btn_add" class="sbm sbm_blue fl_l">
					<input type="submit" id="btn_add" class="btn" value="Search" />
				</label>
			</td>
		</tr>
	
	</table>
	
</form>

<div class="dev br_td">&#160;</div>

<p><a href="/admin/?page=products&amp;action=add">New product</a></p>

<?php if (!empty($rows)) { ?>

<table cellpadding="0" cellspacing="0" border="0" class="tbl_repeat">
	
	<tr>
		<th class="col_5">Id</th>
		<th>Product</th>
		<th class="col_15 ta_r">Remove</th>
		<th class="col_5 ta_r">Edit</th>
	</tr>
	
	<?php foreach($rows as $product) { ?>
	
	<tr>
		<td><?php echo $product['id']; ?></td>
		<td><?php echo Helper::encodeHtml($product['name']); ?></td>
		<td class="ta_r">
			<a href="/admin/?page=products&amp;action=remove&amp;id=<?php echo $product['id']; ?>">Remove</a>
		</td>
		<td class="ta_r">
			<a href="/admin/?page=products&amp;action=edit&amp;id=<?php echo $product['id']; ?>">Edit</a>
		</td>
	</tr>
	
	<?php } ?>
	
</table>

<?php echo $objPaging->getPaging(); ?>

<?php 
	} else {
		echo '<p>'.$empty.'</p>';
	} 
?>

<?php require_once('template/_footer.php'); ?>





