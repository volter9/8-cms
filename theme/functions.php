<?php

/**
 * Get all blog posts
 * 
 * @return array
 */
function blog_posts () {
    $posts = glob(dirname(__DIR__) . '/content/blog/*.php');
    
    $posts = array_map('content_data', $posts);
    
    usort($posts, function ($a, $b) {
        return strtotime($b['date']) - strtotime($a['date']);
    });
    
    return $posts;
}

/**
 * Get content file data
 * 
 * @param string $file
 * @return array
 */
function content_data ($file) {
    ob_start();
    
    $data = require $file;
    $data = $data ? $data : array();
    $data['content'] = ob_get_clean();
    $data['date'] = isset($data['date']) ? $data['date'] : '00-00-0000 00:00:00';
    $data['slug'] = basename($file, '.php');

    return $data;
}