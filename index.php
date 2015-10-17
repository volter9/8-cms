<?php  

/**
 * 8 CMS - the most lightweight, simple and fast CMS in the world
 * 
 * @author volter9
 * @license WTFPL 2.0
 * @version 0.1
 */

$route = trim(!empty($_GET['route']) ? $_GET['route'] : 'index', '/');

$file = "content/$route";
$file = file_exists("$file.php") ? "$file.php" : 'content/404.php';

ob_start();
$data = require $file;
$content = ob_get_clean();

extract($data ? $data : array());

include 'theme/layout.php';