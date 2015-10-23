<?php

/**
 * CLI rendering mod
 * 
 * This mods enables 
 * 
 * @author volter9
 * @package 8-cms
 */

if (empty($_GET['route'])) {
    $_GET['route'] = '';
}

$_GET['route'] = isset($_SERVER['argv'][1]) ? $_SERVER['argv'][1] 
                                            : $_GET['route'];