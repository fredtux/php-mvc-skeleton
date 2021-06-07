<?php

defined('SIMPLE_AUTOLOADER_PATH') || define('SIMPLE_AUTOLOADER_PATH', __DIR__ . DIRECTORY_SEPARATOR . 'autoload.php');

defined('PUBLIC_DIR') || define('PUBLIC_DIR', __DIR__ . DIRECTORY_SEPARATOR . 'public');
defined('PUBLIC_DIR_HTML') || define('PUBLIC_DIR_HTML', PUBLIC_DIR . DIRECTORY_SEPARATOR . 'html');
defined('PUBLIC_DIR_CSS') || define('PUBLIC_DIR_CSS', PUBLIC_DIR . DIRECTORY_SEPARATOR . 'css');
defined('PUBLIC_DIR_JS') || define('PUBLIC_DIR_JS', PUBLIC_DIR . DIRECTORY_SEPARATOR . 'js');

defined('HREF_CSS') || define('HREF_CSS', 'public' . DIRECTORY_SEPARATOR . 'css');
defined('HREF_JS') || define('HREF_JS', 'public' . DIRECTORY_SEPARATOR . 'js');
defined('HREF_IMG') || define('HREF_IMG', 'public' . DIRECTORY_SEPARATOR . 'img');

defined('HELPER_DIR') || define('HELPER_DIR', __DIR__ . DIRECTORY_SEPARATOR . 'Helper');
