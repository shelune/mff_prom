<?php
/*
    Template Name: About Page
 */

$about_title_big = get_field('about_title_big');
$about_title_small = get_field('about_title_small');
$about_content_big = get_field('about_content_big');
$about_content_small = get_field('about_content_small');
get_header(); ?>

<section class="featured" data-type="background" data-speed="3">
	<h1 class="vs-dark text-center">About</h1>
</section>

<section class="about-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 overview-about">
				<h1 class="text-center show__title"><?php echo $about_title_big; ?></h1>
				<p><?php echo $about_content_big; ?></p>

				<h2 class="text-center show__subtitle"><?php echo $about_title_small; ?></h1>
				<?php echo $about_content_small; ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>