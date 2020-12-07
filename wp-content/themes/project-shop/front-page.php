<?php get_header(); ?>

<? $background_image = get_field('hero_image'); ?>

<? /* if(!empty($image) ) : */ ?>
     <!-- <img src="<? /* echo esc_url($image['url']); ?>" alt="<? echo esc_attr($image['alt']); */ ?>"> -->
   <? /* endif; */ ?>

<div id="hero" style="background-image: url(<?php the_field('hero_image'); ?>); background-size: cover;">
    <div class="container d-flex align-items-center justify-content-center h-100">
      
        <h1>Welcome to the Coffee Shop</h1>
    </div>
</div>


<div class="content">

    <div class="container">

        <div class="row">
                <div class="col-lg-3"> 
                    <div class="sticky-top" style="top: 50px;">
                        <?php get_sidebar(); ?>
                    </div>
                </div>

            <?php if(have_posts()) : while(have_posts()) : the_post();?>

            <?php  get_template_part('archive-blog_post'); ?>

            <?php endwhile; else: endif; ?>

        </div>
    </div>
</div>
<?php get_footer(); ?>