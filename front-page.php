<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
        <title><?php bloginfo('name') ?></title> 
        <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>">
    </head>
    <body>
        <div id="wrap">
            <div id="content">
                <?php wp_nav_menu();?>
            </div>
        </div>
    </body>
</html>