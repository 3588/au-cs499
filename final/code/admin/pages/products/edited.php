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
$url = '/admin'.Url::getCurrentUrl(array('action', 'id'));
require_once('template/_header.php');
?>
<h1>Products :: Edit</h1>
<p>The record has been updated successfully.<br />
<a href="<?php echo $url; ?>">Go back to the list of products.</a></p>
<?php require_once('template/_footer.php'); ?>