<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php _e('The Coffee Shop'); ?></title>

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<? $logo = get_field('site_logo'); ?>



<header>
   <div class="container">
       <div class="row">
           <div class="col d-flex align-items-center justify-content-between">
            <? if(!empty($logo) ) : ?>
                <a href="<?php bloginfo('url');?>"><img class="logo img-fluid" src="<? echo esc_url($logo['url']); ?>"></a>
            <? endif;?>

                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'top-menu',
                        'menu_class' => 'top-menu'
                    )
                );
                ?>
            </div>
        </div>
   </div>
</header>
