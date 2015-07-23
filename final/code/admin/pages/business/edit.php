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
$objBusiness = new Business();
$business = $objBusiness->getBusiness();

if (!empty($business)) {

	$objForm = new Form();
	$objValid = new Validation($objForm);
	
	if ($objForm->isPost('name')) {
	
		$objValid->_expected = array(
			'name',
			'address',
			'telephone',
			'email',
			'website',
			'about',
			'history1',
			'history1_customer',
			'history2',
			'history2_customer'
		);
		
		$objValid->_required = array(
			'name',
			'address',
			'telephone',
			'email',
			'about',
			'history1',
			'history1_customer',
			'history2',
			'history2_customer'
		);
		
		$objValid->_special = array(
			'email' => 'email'
		);
		
		$vars = $objForm->getPostArray($objValid->_expected);
		
		if ($objValid->isValid()) {
			if ($objBusiness->updateBusiness($vars)) {
				Helper::redirect('../admin'.Url::getCurrentUrl(array('action', 'id')).'&action=edited');
			} else {
				Helper::redirect('../admin'.Url::getCurrentUrl(array('action', 'id')).'&action=edited-failed');
			}
		}
		
	}
		
	require_once('template/_header.php'); 
?>
	
	<h1>Business</h1>
	
	<form action="" method="post">
		<table cellpadding="0" cellspacing="0" border="0" class="tbl_insert">
			
			<tr>
				<th><label for="name">Name: *</label></th>
				<td>
					<?=$objValid->validate('name'); ?>
					<input type="text" name="name"
						id="name" class="fld" 
						value="<?=$objForm->stickyText('name', $business['name']); ?>" />
				</td>
			</tr>
			
			<tr>
				<th><label for="address">Address: *</label></th>
				<td>
					<?=$objValid->validate('address'); ?>
					<textarea name="address" id="address" class="tar" 
						cols="" rows=""><?=$objForm->stickyText('address', $business['address']); ?></textarea>
				</td>
			</tr>
			
			<tr>
				<th><label for="telephone">Telephone: *</label></th>
				<td>
					<?=$objValid->validate('telephone'); ?>
					<input type="text" name="telephone"
						id="telephone" class="fld" 
						value="<?=$objForm->stickyText('telephone', $business['telephone']); ?>" />
				</td>
			</tr>
			
			<tr>
				<th><label for="email">Email: *</label></th>
				<td>
					<?=$objValid->validate('email'); ?>
					<input type="text" name="email"
						id="email" class="fld" 
						value="<?=$objForm->stickyText('email', $business['email']); ?>" />
				</td>
			</tr>
			
			<tr>
				<th><label for="website">Website:</label></th>
				<td>
					<?=$objValid->validate('website'); ?>
					<input type="text" name="website"
						id="website" class="fld" 
						value="<?=$objForm->stickyText('website', $business['website']); ?>" />
				</td>
			</tr>
			
			
            <tr>
				<th><label for="about">about: *</label></th>
				<td>
					<?=$objValid->validate('about'); ?>
					<textarea name="about" id="about" class="tar" rows="5"><?=$objForm->stickyText('about', $business['about']); ?></textarea>
				</td>
			</tr>
            <tr>
				<th><label for="history1">history: *</label></th>
				<td>
					<?=$objValid->validate('history1'); ?>
					<textarea name="history1" id="history1" class="tar" rows="5"><?=$objForm->stickyText('history1', $business['history1']); ?></textarea>
				</td>
			</tr>
            <tr>
				<th><label for="history1_customer">customer: *</label></th>
				<td>
					<?=$objValid->validate('history1_customer'); ?>
					<input type="text" class="fld" name="history1_customer" id="history1_customer" value="<?=$objForm->stickyText('history1_customer', $business['history1_customer']); ?>" />
				</td>
			</tr>
              <tr>
				<th><label for="history2">history: *</label></th>
				<td>
					<?=$objValid->validate('history2'); ?>
					<textarea name="history2" id="history2" class="tar" rows="5"><?=$objForm->stickyText('history2', $business['history2']); ?></textarea>
				</td>
			</tr>
             <tr>
				<th><label for="history2_customer">customer: *</label></th>
				<td>
					<?=$objValid->validate('history2_customer'); ?>
					<input type="text" class="fld"  name="history2_customer" id="history2_customer" value="<?=$objForm->stickyText('history2_customer', $business['history2_customer']); ?>"/>
			   </td>
			</tr>
			
			<tr>
				<th>&nbsp;</th>
				<td>
					<label for="btn" class="sbm sbm_blue fl_l">
					<input type="submit" id="btn" class="btn" value="Update" />
					</label>
				</td>
			</tr>
			
		</table>
	</form>

<?php require_once('template/_footer.php'); } ?>