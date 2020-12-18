<?php get_header(); ?>


<div class="content">

    <div class="container">

        <div class="row">
                    
                <?php if(have_posts()) : while(have_posts()) : the_post();?>

                    <div class="blog-post col-lg-4 mx-3">

                    <a href="<?php the_permalink(); ?>">
                    
                    <?php $event_image = get_field('event_image'); ?>
                    <?php $portfolio_image = get_field('portfolio_image'); ?>

                    <? if(!empty($event_image) ) : ?>
                        <img class="img-fluid event-image" src="<? echo esc_url($event_image['url']); ?>">
                     <? endif; ?>

                     <? if(!empty($portfolio_image) ) : ?>
                        <img class="img-fluid event-image" src="<? echo esc_url($portfolio_image['url']); ?>">
                     <? endif; ?>

                    <?php if(has_post_thumbnail()):?>
                       
                         <img class="blog-image" src="<?php the_post_thumbnail_url('post_image'); ?>" class="mb-5 img-fluid">                

                    <?php endif; ?>

                     <h1 class="blog-event-title"><?php the_title(); ?></h1>
                    </a>
                   <p><b><?php the_field('event_adress'); ?></b></p>
                   <p><b><?php the_field('event_time'); ?></b></p>
                   <p><b><?php the_field('portfolio_description'); ?></b></p>
                    
                     <?php the_excerpt(); ?>

                    </div>

                <?php endwhile; else: endif; ?>

            <div class="col-lg-3"> 
                <div class="sticky-top" style="top: 50px;">
                    <?php dynamic_sidebar('blog-sidebar'); ?>
                </div>
            </div>

        </div>

    </div>

</div>

<?php get_footer(); ?>