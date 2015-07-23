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
$categories = $objCatalogue->getCategories();

$objPaging = new Paging($categories, 5);
$rows = $objPaging->getRecords();

$objPaging->_url = '/admin'.$objPaging->_url;

require_once('template/_header.php'); 
?>

<h1>Categories</h1>

<p><a href="/admin/?page=categories&amp;action=add">New category</a></p>

<?php if (!empty($rows)) { ?>

<table cellpadding="0" cellspacing="0" border="0" class="tbl_repeat">
	
	<tr>
		<th>Category</th>
		<th class="col_15 ta_r">Remove</th>
		<th class="col_5 ta_r">Edit</th>
	</tr>
	
	<?php foreach($rows as $category) { ?>
	
	<tr>
		<td><?php echo Helper::encodeHtml($category['name']); ?></td>
		<td class="ta_r">
			<a href="/admin/?page=categories&amp;action=remove&amp;id=<?php echo $category['id']; ?>">Remove</a>
		</td>
		<td class="ta_r">
			<a href="/admin/?page=categories&amp;action=edit&amp;id=<?php echo $category['id']; ?>">Edit</a>
		</td>
	</tr>
	
	<?php } ?>
	
</table>

<?php echo $objPaging->getPaging(); ?>

<?php } else { ?>

	<p>There are currently no categories created.</p>

<?php } ?>

<?php require_once('template/_footer.php'); ?>





