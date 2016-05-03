<?php
/*
    Template Name: Performer Page
 */

$performer_overview_title = get_field('performer_overview_title');
$performer_overview_desc = get_field('performer_overview_desc');
$performer_overview_image = get_field('performer_overview_image');

$performer_details_title = get_field('performer_details_title');

get_header(); ?>

	<section class="featured" data-type="background" data-speed="3">
		<h1 class="vs-dark text-center">Performers</h1>
	</section>

	<section class="performers-overview">
		<div class="container">
			<div class="row">
				<h1 class="text-center"><?php echo $performer_overview_title; ?></h1>
				<div class="col-sm-4 overview-content">
					<p><?php echo $performer_overview_desc; ?></p>
				</div>
				<div class="col-sm-8 overview-image">
					<figure>
						<?php
							if (!empty($performer_overview_image)) : ?>
								<img class="img-responsive" src="<?php echo $performer_overview_image['url']; ?>" alt="<?php echo $performer_overview_image['alt']; ?>">
						<?php endif ?>
					</figure>
				</div>
			</div>
		</div>
	</section>

	<section class="performers-details">
		<div class="container">
			<div class="row">
				<h1 class="text-center"><?php echo $performer_details_title; ?></h1>
				<div class="performers-wrap">
					<?php
						$loop = new WP_Query(array('post_type' => 'performer', 'orderby' => 'post_id', 'order' => 'ASC'));
					?>

					<?php
					while ($loop->have_posts()) : $loop->the_post() ?>
					<div class="performer col-sm-4">
						<div class="col-sm-12">
							<figure>
								<?php $image = get_field('performer_image'); ?>
								<img class="img-responsive" src="<?php echo $image['url']; ?>" alt="performer">
							</figure>
						</div>
						<div class="col-sm-12">
							<div class="performer-data">
								<h4>Name: <?php the_field('performer_name'); ?></h4>
								<h4>DOB: <?php the_field('performer_dob'); ?></h4>
								<p><?php the_field('performer_introduction'); ?></p>
							</div>
						</div>
					</div>

					<?php endwhile; ?>
					
				</div>
			</div>
		</div>
	</section>
	
<?php get_footer(); ?>