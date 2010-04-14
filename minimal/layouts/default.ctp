<?php
/**
 * Minimal Theme for Croogo CMS
 *
 * @author Fahad Ibnay Heylaal <contact@fahad19.com>
 * @link   http://fahad19.com
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $title_for_layout; ?> &raquo; <?php echo Configure::read('Site.title'); ?></title>
        <?php
            echo $layout->meta();
            echo $layout->feed();
            echo $html->script(array('jquery/jquery.min'));
            echo $layout->js();
            echo $html->css(array(
                'reset',
                '960',
                'theme',
            ));
            echo $scripts_for_layout;
        ?>
    </head>
    <body>

        <div id="wrapper">
            <div id="header" class="container_16">
                <div id="logo" class="grid_16">
                    <h1><?php echo $html->link(Configure::read('Site.title'), '/'); ?></h1>
                </div>

                <div id="tagline" class="grid_16">
                    <p><?php echo Configure::read('Site.tagline'); ?></p>
                </div>

                <div class="clear"></div>
            </div>

            <div id="main" class="container_16">
                <div id="content" class="grid_11">
                    <?php echo $content_for_layout; ?>
                </div>

                <div id="sidebar" class="grid_5">
                    <?php echo $layout->blocks('right'); ?>
                </div>

                <div class="clear"></div>
            </div>

            <div id="footer" class="container_16">
                <div class="left grid_8">
                    Powered by <?php echo $html->link('Croogo', 'http://croogo.org'); ?> with <?php echo $html->link('Minimal', 'http://fahad19.com/blog/minimal-theme'); ?> Theme.
                </div>

                <div class="right grid_8">
                    <a href="http://www.cakephp.org"><?php echo $html->image('/img/cake.power.gif'); ?></a>
                </div>

                <div class="clear"></div>
            </div>
        </div>

    </body>
</html>