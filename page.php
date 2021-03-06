<?php
/**
*Template Name: About Us
*
* @package btn
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php 
				while ( have_posts() ) : the_post(); 
				// start the Loop
			?>

			<div class="entry-content-about">
					<?php 
					//Gets the page title
					the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
					<?php 
					//Gets the page thumbnail
					the_post_thumbnail(); 
					?>
					<?php 
					//Gets the page content
					the_content();
					?>
			</div>

			<?php
				endwhile; 
				//end the Loop
			?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>