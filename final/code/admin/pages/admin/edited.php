<?php
$url = '../admin'.Url::getCurrentUrl(array('action', 'id'));
require_once('template/_header.php');
?>
<h1>Admin</h1>
<p>The record has been updated successfully.<br />
<a href="<?php echo $url; ?>">Go back to the admin record.</a></p>
<?php require_once('template/_footer.php'); ?>