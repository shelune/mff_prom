<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package OctBeatz
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h3 class="entry-title">', '</h3>' );
			} else {
				the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			}

		if ( 'post' === get_post_type() ) : ?>
			<div class="news-metadata flex flex-item--pull-right">
				<i class="fa fa-user"></i><?php the_author(); ?>
				<i class="fa fa-calendar"></i><time><?php the_date(); ?></time>
				<i class="fa fa-tags"></i><?php the_tags(); ?>
			</div>
		<?php edit_post_link('Edit', '<div><i class="fa fa-pencil></i>"', '</div>'); ?>
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="news-image">
		<?php if (has_post_thumbnail()) : ?>
			<img class="<?php the_post_thumbnail(); ?>" alt="">
		<?php endif; ?>
	</div>
	
	<div class="news-excerpt">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque eveniet, veniam voluptas, voluptatibus esse ducimus illum molestias provident beatae repellendus ea optio aut at assumenda. Accusamus quasi sed suscipit, eaque.</p>
		<button type="button" class="btn btn-primary pull-right">READ MORE</button>
	</div>

	<footer class="entry-footer">
		<?php octbeatz_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
