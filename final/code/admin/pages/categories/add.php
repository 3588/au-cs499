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
$objForm = new Form();
$objValid = new Validation($objForm);

if ($objForm->isPost('name')) {
	
	$objValid->_expected = array('name');	
	$objValid->_required = array('name');
	
	$objCatalogue = new Catalogue();
	
	$name = $objForm->getPost('name');
	
	if ($objCatalogue->duplicateCategory($name)) {
		$objValid->add2Errors('name_duplicate');
	}
	
	if ($objValid->isValid()) {
		
		if ($objCatalogue->addCategory($name)) {
		
			Helper::redirect('/admin'.Url::getCurrentUrl(array('action', 'id')).'&action=added');
			
		} else {
			Helper::redirect('/admin'.Url::getCurrentUrl(array('action', 'id')).'&action=added-failed');
		}
		
	}
	
}

require_once('template/_header.php'); 
?>

<h1>Categories :: Add</h1>

<form action="" method="post">
	
	<table cellpadding="0" cellspacing="0" border="0" class="tbl_insert">
		
		<tr>
			<th><label for="name">Name: *</label></th>
			<td>
				<?php 
					echo $objValid->validate('name'); 
					echo $objValid->validate('name_duplicate'); 
				?>
				<input type="text" name="name" id="name" 
					value="<?php echo $objForm->stickyText('name'); ?>" 
					class="fld" />
			</td>
		</tr>
				
		<tr>
			<th>&nbsp;</th>
			<td>
				<label for="btn" class="sbm sbm_blue fl_l">
					<input type="submit" id="btn" class="btn" value="Add" />
				</label>
			</td>
		</tr>
		
		
	</table>
	
</form>

<?php require_once('template/_footer.php'); ?>



