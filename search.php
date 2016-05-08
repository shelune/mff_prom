<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package OctBeatz
 */

get_header(); ?>
	
<section class="featured" data-type="background" data-speed="3">
	<h1 class="page-title text-center vs-dark"><?php printf( esc_html__( 'Search Results for: %s', 'octbeatz' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
</section>
	
<div class="container">
	<div class="row" id="primary">
		<main class="col-sm-8" id="content">

	

		<?php
		if ( have_posts() ) : ?>

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

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

<?php
get_sidebar();
get_footer();
