<?php

require_once('FrontController.php');

$frontController = new FrontController();
$frontController->dispatch($_GET['url']);