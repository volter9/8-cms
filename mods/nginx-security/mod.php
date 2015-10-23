<?php

/**
 * Nginx support + Secure enhancement
 * 
 * See README.md for instructions
 * 
 * @author volter9
 * @package 8-cms
 */

$base = defined('BASEPATH') ? BASEPATH : '';
$base = trim($base, '/');

$root = $_SERVER['DOCUMENT_ROOT'];
$root = $root ? trim($root, '/') : $base;

$baseurl = substr($base, strlen($root));

$url = !empty($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
$url = parse_url($url, PHP_URL_PATH);
$url = trim($url, '/');
$url = substr($url, strlen($baseurl));

$_GET['route'] = urldecode($url);