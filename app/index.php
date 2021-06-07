<?php
// Comment out in production
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once __DIR__ . DIRECTORY_SEPARATOR . 'config.php';

require_once SIMPLE_AUTOLOADER_PATH;

session_start();

// Page based on GET parameter
\myproject\View\ConstructorView::getPage();
