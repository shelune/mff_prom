<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package OctBeatz
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="post-header">
		<img src="http://placehold.it/1920x1080" alt="" class="post-banner img-responsive">
		<div class="post-info flex">
			<h1 class="post-title">Blog Title</h1>
			<div class="news-metadata flex flex-item--pull-right">
				<span><i class="fa fa-user"></i>MFF</span>
				<span><i class="fa fa-calendar"></i><time>April 25th, 2016</time></span>
				<span><i class="fa fa-tags"></i><a href="#">Tag 1</a>, <a href="#">Tag 2</a></span>
			</div>
		</div>
	</header>

	<div class="">
		<?php if (has_post_thumbnail()) : ?>
		<?php the_post_thumbnail(); ?>
		<?php endif; ?>
	</div>
	
	<div class="post-content">
		<?php the_content(); ?>
	</div>
</article><!-- #post-## -->
