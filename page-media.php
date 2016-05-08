<?php
/*
    Template Name: Media Page
 */

$photo_gallery_title = get_field('photo_gallery_title');
get_header(); ?>

<section class="featured" data-type="background" data-speed="3">
	<h1 class="vs-dark text-center">Media</h1>
</section>

<section class="media-content">
	<div class="container">
		<div class="row">
			<h1 class="text-center"><?php echo $photo_gallery_title; ?></h1>
			<div class="media-tags flex flex--center">
				<a href="">#TagSomething</a>
				<a href="">#TagSomething</a>
				<a href="">#TagSomething</a>
				<a href="">#TagSomething</a>
			</div>
			<div class="gallery flex">
				<?php
				$loop = new WP_Query(array('post_type' => 'gallery_image', 'orderby' => 'post_id', 'order' => 'ASC'));
				?>

				<?php
				while ($loop->have_posts()) : $loop->the_post() ?>
				<figure>
					<?php $image = get_field('image_content'); ?>
					<img src="<?php echo $image['url'];  ?>" alt="<?php the_field('image_alt'); ?>" class="img-responsive" tag-data="<?php the_field('image_tag') ?>">
				</figure>

				<?php endwhile; ?>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>