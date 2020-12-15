<?php get_header(); ?>


<div class="content">

    <div class="container">

        <div class="row">
            
            <div class="col-lg-3"> 
                <div class="sticky-top post-sidebar" style="top: 50px; ">
                    <?php dynamic_sidebar('blog-sidebar'); ?>
                </div>
            </div>

            <div class="col-lg-9">
                    
                <?php if(have_posts()) : while(have_posts()) : the_post();?>

                    <?php if(has_post_thumbnail()):?>

                        <img src="<?php the_post_thumbnail_url('post_image'); ?>" class="mb-5 img-fluid">        
                            
                    <?php endif; ?>

                <?php $event_image = get_field('event_image'); ?>
                <?php $portfolio_image = get_field('portfolio_image'); ?>

                <? if(!empty($event_image) ) : ?>
                    <img class="img-fluid event-image" src="<? echo esc_url($event_image['url']); ?>" alt="<? echo esc_attr($event_image['alt']); ?>">
                <? endif; ?>  
                
                <? if(!empty($portfolio_image) ) : ?>
                        <img class="img-fluid event-image" src="<? echo esc_url($portfolio_image['url']); ?>" alt="<? echo esc_attr($portfolio_image['alt']); ?>">
                <? endif; ?>
                    
                <h1 class="post-titles"><?php the_title(); ?></h1>
                <p class="event-description"><?php the_field('event_description'); ?></p>
                <p class="event-adress"><?php the_field('event_adress'); ?></p>
                <p class="event-time"><?php the_field('event_time'); ?></p>
                <p class="portfolio-description"><?php the_field('portfolio_description'); ?></p>
        
                <?php the_content(); ?>

                <p class="single-author">By: <a href="<?php the_permalink()?>"><?php the_author(); ?></p></a>

                <?php endwhile; else: endif; ?>

            </div>

        </div>

    </div>

</div>



<?php get_footer(); ?>