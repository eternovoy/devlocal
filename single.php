<?php
/**
 * Single
 *
 * Loop container for single post content
 */
get_header(); ?>

<div class="container">
    <div class="row">
		<div class="col-lg-9 col-sm-8 col-xs-12">
			<?php if(have_posts()):
				while(have_posts()): the_post(); ?>
				    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php the_title('<h1 class="page_title">', '<h1>');

                        if(has_post_thumbnail()):
                        	the_post_thumbnail('full', array('class' => 'img-responsive'));
                        endif;

                        the_content();

                        comments_template(); ?>
				    </article>
				<?php endwhile;
			endif; ?>
		</div>
		<div class="col-lg-3 col-sm-4 col-xs-12 sidebar">
			<?php get_sidebar(); ?>
		</div>
    </div>
</div>

<?php get_footer(); ?>