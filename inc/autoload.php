<?php
require_once('new_config.php');

function __autoload($class_name) {
	$class = explode("_", $class_name);
	$path = implode("/", $class).".php";
	require_once($path);
}