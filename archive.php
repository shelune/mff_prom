<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package OctBeatz
 */

get_header(); ?>
	
<section class="featured" data-type="background" data-speed="3">
	<?php
	the_archive_title( '<h1 class="page-title vs-dark text-center">', '</h1>' );
	the_archive_description( '<div class="taxonomy-description">', '</div>' );
	?>
</section>
		
<div class="container">
	<div class="row" id="primary">
		<main class="col-sm-8" id="content">
		<?php
		if ( have_posts() ) : ?>

			

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
		

		</main><!-- #main -->
		<aside class="side-content col-md-3 col-md-offset-1 col-sm-4">
			<?php get_sidebar(); ?>
		</aside>
	</div><!-- #primary -->
</div>

<?php get_footer(); ?>
