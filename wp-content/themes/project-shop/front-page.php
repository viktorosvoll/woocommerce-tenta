<?php get_header(); ?>

<? $background_image = get_field('hero_image'); ?>

<? /* if(!empty($image) ) : */ ?>
     <!-- <img src="<? /* echo esc_url($image['url']); ?>" alt="<? echo esc_attr($image['alt']); */ ?>"> -->
   <? /* endif; */ ?>

<div id="hero" style="background-image: url(<?php the_field('hero_image'); ?>); background-size: cover;">
    <div class="container d-flex align-items-center justify-content-center h-100">
      
        <h1><?php _e('WELCOME TO MY SHOP'); ?></h1>
    </div>
</div>


<div class="content" style="background-color: #f5f5dc;">

    <div class="container">

        <div class="row">


            <?php if(have_posts()) : while(have_posts()) : the_post();?>

                <div class="container d-flex justify-content-center contact-form" style="border: 1px solid black;">
                    <?php the_content(); ?>
                </div>

            

            <?php endwhile; else: endif; ?>

        </div>

    </div>

</div>
<?php get_footer(); ?>