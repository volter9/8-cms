<?php  

/* Enable mods here... */
define('BASEPATH', __DIR__);

// Uncomment line below to enable all 8-cms mods
// array_map(function ($file) { require $file; }, glob('mods/*/mod.php'));
require 'mods/nginx-security/mod.php';
require 'mods/static-website/mod.php';

/**
 * 8 CMS - the most lightweight, simple and fast CMS in the world
 * 
 * @author volter9
 * @license WTFPL 2.0
 * @version 0.1.1
 */

$route = trim(!empty($_GET['route']) ? $_GET['route'] : 'index', '/');

$file = str_replace('..', '', "content/$route");
$file = file_exists("$file.php") ? "$file.php" : 'content/404.php';

file_exists('theme/functions.php') and require 'theme/functions.php';

ob_start() and $data = (require $file) and $content = ob_get_clean();

extract($data ?: array());

include 'theme/layout.php';
