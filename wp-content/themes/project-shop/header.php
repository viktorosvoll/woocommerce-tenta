<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<? $logo = get_field('site_logo'); ?>



<header style="background-color: #f5f5dc;">
   <div class="container">
       <div class="row">
           <div class="col d-flex align-items-center justify-content-between">
            <? if(!empty($logo) ) : ?>
                <a href="<?php bloginfo('url');?>"><img class="logo img-fluid" src="<? echo esc_url($logo['url']); ?>" alt="<? echo esc_attr($logo['alt']); ?>" ></a>
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
