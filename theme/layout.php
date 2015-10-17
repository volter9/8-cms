<!DOCTYPE html>
<html>
    <head>
        <title>
            <?php isset($title) and print($title) ?> 
        </title>
    </head>

    <body>
        <h1>
            <?php isset($title) and print($title) ?> 
        </h1>

        <?php echo $content ?> 
    </body>
</html>