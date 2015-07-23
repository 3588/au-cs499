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
$objAdmin = new Admin();
$Admin = $objAdmin->getAdmin();

if (!empty($Admin)) {

	$objForm = new Form();
	$objValid = new Validation($objForm);
	
	if ($objForm->isPost('email')) {
	
		$objValid->_expected = array(
			'first_name',
			'last_name',
			'email',
			'password'
		);
		
		$objValid->_required = array(
			'first_name',
			'last_name',
			'email',
			'password'
		);
			
		$vars = $objForm->getPostArray($objValid->_expected);
		
		if ($objValid->isValid()) {
			if ($objAdmin->updateAdmin($vars)) {
				Helper::redirect('../admin'.Url::getCurrentUrl(array('action', 'id')).'&action=edited');
			} else {
				Helper::redirect('../admin'.Url::getCurrentUrl(array('action', 'id')).'&action=edited-failed');
			}
		}
		
	}
		
	require_once('template/_header.php'); 
?>
	
	<h1>Admin</h1>
	
	<form action="" method="post">
		<table cellpadding="0" cellspacing="0" border="0" class="tbl_insert">
			
			<tr>
				<th><label for="first_name">First Name: *</label></th>
				<td>
					<?=$objValid->validate('first_name'); ?>
					<input type="text" name="first_name"
						id="first_name" class="fld" 
						value="<?=$objForm->stickyText('first_name', $Admin['first_name']); ?>" />
				</td>
			</tr>
			
			<tr>
				<th><label for="last_name">Last Name: *</label></th>
				<td>
					<?=$objValid->validate('last_name'); ?>
					<input type="text" name="last_name"
						id="last_name" class="fld" 
						value="<?=$objForm->stickyText('last_name', $Admin['last_name']); ?>" />
				</td>
			</tr>
			
			<tr>
				<th><label for="email">Login Name: *</label></th>
				<td>
					<?=$objValid->validate('email'); ?>
					<input type="text" name="email"
						id="email" class="fld" 
						value="<?=$objForm->stickyText('email', $Admin['email']); ?>" />
				</td>
			</tr>
			
			<tr>
				<th><label for="password">Password: *</label></th>
				<td>
					<?=$objValid->validate('password'); ?>
					<input type="password" name="password"
						id="password" class="fld" 
						value="<?=$objForm->stickyText('password', $Admin['password']); ?>" />
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