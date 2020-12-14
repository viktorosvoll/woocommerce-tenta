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

                    <?php if(has_post_thumbnail()):?>

                        <img src="<?php the_post_thumbnail_url('post_image'); ?>" class="mb-5 img-fluid">        
                            
                    <?php endif; ?>

                <?php $event_image = get_field('event_image'); ?>

                <? if(!empty($event_image) ) : ?>
                    <img class="img-fluid event-image" src="<? echo esc_url($event_image['url']); ?>" alt="<? echo esc_attr($event_image['alt']); ?>">
                <? endif; ?>   
                    
                <h1><?php the_title(); ?></h1>
                <p class="event-description"><?php the_field('event_description'); ?></p>
                <p class="event-description"><?php the_field('event_adress'); ?></p>
                <p class="event-description"><?php the_field('event_time'); ?></p>
                <p class="portfolio-descrption"><?php the_field('portfolio_description'); ?></p>



                <?php the_content(); ?>

                <?php endwhile; else: endif; ?>

            </div>

        </div>

    </div>

</div>



<?php get_footer(); ?>