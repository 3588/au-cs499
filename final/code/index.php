<?php
error_reporting(E_ALL ^ E_DEPRECATED ^ E_WARNING);
require_once('inc/autoload.php');
$core = new Core();
$core->run();