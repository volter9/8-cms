<?php

$base = chop(dirname(dirname(__DIR__)), '/');
$content = "$base/content";

// It's Christmas Tree!
$paths = array_merge(
    glob("$content/*.php"),
    glob("$content/*/*.php"),
    glob("$content/*/*/*.php"),
    glob("$content/*/*/*/*.php"),
    glob("$content/*/*/*/*/*.php")
);

foreach ($paths as $file) {
    $file = substr($file, strlen($content));
    $file = preg_replace('/(index)?\.php/', '/index.html', $file);
    $filepath = str_replace('/index.html', '', $file);
    
    $path = explode('/', trim($file, '/'));
    $full = __DIR__ . '/build';
    
    array_pop($path);
    
    foreach ($path as $frag) {
        $full .= "/$frag";
    
        !file_exists($full) and mkdir($full);
    }
    
    $html = shell_exec("php $base/index.php '$filepath'");
    file_put_contents(__DIR__ . "/build{$file}", $html);
}