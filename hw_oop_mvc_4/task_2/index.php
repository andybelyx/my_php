<?php
// ini_set('display_errors', 1);

require_once('FrontController.php');

$frontController = new FrontController();
$frontController->dispatch($_GET['url']);
