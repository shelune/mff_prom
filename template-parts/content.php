<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package OctBeatz
 */

?>

<article class="news-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="col-sm-4">
		<div class="news-image">
			<?php if (has_post_thumbnail()) : ?>
				<?php the_post_thumbnail(); ?>
			<?php endif; ?>
		</div>
	</div>
	<div class="col-sm-8">
		<header class="entry-header flex">
			<?php
			if ( is_single() ) {
				the_title( '<h3 class="entry-title">', '</h3>' );
			} else {
				the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			}

			if ( 'post' === get_post_type() ) : ?>
			<div class="news-metadata flex flex-item--pull-right">
				<span><i class="fa fa-user"></i><?php the_author(); ?></span>
				<span><i class="fa fa-calendar"></i><time><?php the_date(); ?></time></span>
				<span><i class="fa fa-tags"></i><?php the_tags(); ?></span>

				<?php edit_post_link('Edit', '<div class="flex-item--pull-right"><i class="fa fa-pencil"></i>', '</div>'); ?>
			</div>

			<?php
			endif; ?>
		</header><!-- .entry-header -->

		<div class="news-excerpt">
			<?php the_excerpt(); ?>
		</div>
	</div>
	

	
</article><!-- #post-## -->
