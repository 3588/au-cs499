<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Admin System</title>
<meta name="description" content="description" />
<meta name="keywords" content="keywords" />
<meta http-equiv="imagetoolbar" content="no" />
<link href="../css/core.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
	<div id="header_in">
		<h5><a href="?page=products">Admin Management System</a></h5>
		<?php
			if (Login::isLogged(Login::$_login_admin)) {
				echo '<div id="logged_as">Logged in as: <strong>';
				echo Login::getFullNameFront(Session::getSession(Login::$_login_admin));
				echo '</strong> | <a href="?page=logout">Logout</a></div>';
			} else {
				echo '<div id="logged_as"><a href="">Login</a></div>';
			}
		?>
	</div>
</div>

<div id="outer">
    <div class="topwaves"></div>
	<div id="wrapper">
		<div id="left">
			<?php if (Login::isLogged(Login::$_login_admin)) { ?>
			<h2>Navigation</h2>
			<div class="dev br_td">&nbsp;</div>
			<ul id="navigation">
				<li>
					<a href="?page=products"
					<?php echo Helper::getActive(
						array('page' => 'products')
					); ?>>
					products
					</a>
				</li>
				<li>
					<a href="?page=categories"
					<?php echo Helper::getActive(
						array('page' => 'categories')
					); ?>>
					categories
					</a>
				</li>
				<li>
					<a href="?page=business"
					<?php echo Helper::getActive(
						array('page' => 'business')
					); ?>>
					business
					</a>
				</li>
				<li>
					<a href="?page=admin"
					<?php echo Helper::getActive(
						array('page' => 'admin')
					); ?>>
					admin
					</a>
				</li>
			</ul>
			<?php } else { ?>
				&nbsp;
			<?php } ?>
		</div>

		<div id="right">








