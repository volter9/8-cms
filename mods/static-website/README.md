# Static website generator

This mod allows you to compile your website into static (website) HTML pages.

**Attention**: All of the commands should be executed relative to 8-cms website 
folder.

## Compiling your 8-cms website

### Enable

First you have to enable provided by this mod, mod.php file. Require mod.php in
this folder into index.php:

```php
require 'mods/static-website/build.php';
```

After you required this mod, now you can get a HTML page via command line:

```sh
# You're in 8-cms folder
$ php index.php blog/example
```

### Build

To compile your website into static website. You have to give `build` folder 
in `mods/static-website` permissions to read and write:

```sh
chmod 777 mods/static-website/build
``` 

And then you can compile your website:

```sh
php mods/static-website/build.php
```