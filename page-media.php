<?php
/*
    Template Name: Media Page
 */

get_header(); ?>

<section class="featured" data-type="background" data-speed="3">
	<h1 class="vs-dark text-center">Media</h1>
</section>

<section class="media-content">
	<div class="container">
		<div class="row">
			<h1 class="text-center">Photo Gallery</h1>
			<div class="media-tags flex flex--center">
				<a href="">#TagSomething</a>
				<a href="">#TagSomething</a>
				<a href="">#TagSomething</a>
				<a href="">#TagSomething</a>
			</div>
			<div class="gallery flex">
				<?php echo photo_gallery(2); ?>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>