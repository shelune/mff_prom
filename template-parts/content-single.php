<?php 

?>


<article class="news-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="post-header">
		<?php if (has_post_thumbnail()) : ?>
		<?php the_post_thumbnail(); ?>
		<?php endif; ?>
	</div>
	
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

	

	<div class="post-content">
		<?php the_content(); ?>
	</div>
</article><!-- #post-## -->