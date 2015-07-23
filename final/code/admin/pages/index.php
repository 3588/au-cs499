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

<body>
<?php 
if (Login::isLogged(Login::$_login_admin)) {
	Helper::redirect(Login::$_dashboard_admin);
}

$objForm = new Form();
$objValid = new Validation($objForm);

if ($objForm->isPost('login_email')) {

	$objAdmin = new Admin();
	
	if ($objAdmin->isUser($objForm->getPost('login_email'), $objForm->getPost('login_password'))) {
		Login::loginAdmin($objAdmin->_id, Url::getReferrerUrl());
	} else {
		$objValid->add2Errors('login');
	}
}


require_once('template/_header.php'); 
?>


<h1>Login</h1>

<form action="" method="post">
	
	<table cellpadding="0" cellspacing="0" border="0" class="tbl_insert">
		
		<tr>
			<th><label for="login_email">Login:</label></th>
			<td>
				<?php echo $objValid->validate('login'); ?>
				<input type="text" name="login_email" id="login_email"
					class="fld" value="" />
			</td>
		</tr>
		
		<tr>
			<th><label for="login_password">Password:</label></th>
			<td>
				<input type="password" name="login_password" id="login_password"
					class="fld" value="" />
			</td>
		</tr>
		
		<tr>
			<th>&nbsp;</th>
			<td>
				<label for="btn_login" class="sbm sbm_blue fl_l">
					<input type="submit" id="btn_login" class="btn" value="Login" />
				</label>
			</td>
		</tr>
		
	</table>
	
</form>



<?php require_once('template/_footer.php'); ?>
</body>


