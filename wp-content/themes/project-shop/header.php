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



<header>
   <div class="container d-flex align-items-center justify-content-between">
   <? if(!empty($logo) ) : ?>
     <img class="logo img-fluid" src="<? echo esc_url($logo['url']); ?>" alt="<? echo esc_attr($logo['alt']); ?>" >
   <? endif;?>

    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'main-menu',
            'menu_class' => 'main-menu'
        )
    );
        ?>

   </div>
</header>
