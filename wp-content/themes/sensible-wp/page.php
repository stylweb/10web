<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package sensible-wp
 */

get_header(); ?> 

	<?php if (has_post_thumbnail( $post->ID ) ): ?>
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); $image = $image[0]; ?>
    	<header class="featured-img-header" data-speed="8" data-type="background" style="background: url('<?php echo $image; ?>') 50% 0 no-repeat fixed;">
    		<div class="grid grid-pad">
        		<div class="col-1-1">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        		</div><!-- .col-1-1 -->
        	</div><!-- .grid -->
		</header><!-- .entry-header --> 
    
		<?php else : ?>
        
        <header class="entry-header">
    		<div class="grid grid-pad">
        		<div class="col-1-1">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        		</div><!-- .col-1-1 -->
        	</div><!-- .grid -->
		</header><!-- .entry-header -->
        
	<?php endif; ?>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/page.css" type="text/css" media="all" />            
	<div class="grid grid-pad">
		<div id="primary" class="content-area col-9-12">
			<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>
                        <p class="single-text"><?php the_field('destaques'); ?></p>

			</main><!-- #main -->
		</div><!-- #primary -->

	<?php get_sidebar(); ?>
	</div><!-- .grid -->  
	<?php get_footer(); ?>
