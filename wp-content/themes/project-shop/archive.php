<?php get_header(); ?>


<div class="content">

    <div class="container">

        <div class="row">
            <div class="col-lg-3"> 
                <div class="sticky-top" style="top: 50px;">
                    <?php dynamic_sidebar('blog-sidebar'); ?>
                </div>
            </div>

            <div class="col-lg-9">
                    
               

                <?php if(have_posts()) : while(have_posts()) : the_post();?>

                    <div class="blog-post">

                    <?php if(has_post_thumbnail()):?>
                        <a href="<?php the_permalink(); ?>">
                         <img src="<?php the_post_thumbnail_url('post_image'); ?>" class="mb-5 img-fluid">                

                    <?php endif; ?>

                     <h1><?php the_title(); ?></h1></a>

                    <?php the_excerpt(); ?>

                    </div>

                <?php endwhile; else: endif; ?>

            </div>


        </div>

    


    </div>


<?php get_footer(); ?>