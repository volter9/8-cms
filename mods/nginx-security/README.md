# Nginx support mod + security ehancements

This mod introduces super security enhancements 8 CMS and Nginx support (Yay!)

# Enable

To enable this mod, you have to define `BASEPATH` constant and require this 
file in index.php:
 
     define('BASEPATH', __DIR__);
     require 'mods/nginx-secure/index.php';
 
Or just copy/paste or type this code into index.php after the comment "enable mods 
here", and enjoy the result.