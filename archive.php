<?php
/**
 * Archive
 *
 * Standard loop for the front-page
 */
get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <h2 class="archive-title"><?php echo __('Archives for: ', 'foundation') . get_the_time('F jS, Y'); ?></h2>
        </div>
        <div class="col-lg-9 col-sm-8 col-xs-12">
            <?php if(have_posts()):
                while(have_posts()): the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h3>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(array('before' => __('Permalink to ', 'bootstrap'))); ?>" rel="bookmark">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <?php if ( has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?></a>
                        <?php endif;

                        the_excerpt(); ?>
                    </article>
                <?php endwhile;
            endif;

            bootstrap_pagination(); ?>
        </div>
        <div class="col-lg-3 col-sm-4 col-xs-12 sidebar">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>