<?php
Login::restrictAdmin();

$action = Url::getParam('action');

switch($action) {
	
	case 'edited':
	require_once('admin/edited.php');
	break;
	
	case 'edited-failed':
	require_once('admin/edited-failed.php');
	break;
	
	default:
	require_once('admin/edit.php');

}







