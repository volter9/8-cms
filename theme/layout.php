<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
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
