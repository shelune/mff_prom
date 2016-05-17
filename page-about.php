<?php
/*
    Template Name: About Page
 */

$about_title_big = get_field('about_title_big');
$about_title_small = get_field('about_title_small');
$about_content_big = get_field('about_content_big');
$about_content_small = get_field('about_content_small');
$ticket_section_title = get_field('ticket_section_title');
get_header(); ?>

<section class="featured" data-type="background" data-speed="3">
	<h1 class="vs-dark text-center">Info</h1>
</section>

<section class="home__more">
	<div class="container">
		<div class="row text-center">
			<h2 class="section-intro">Tickets</h2>
			<?php
	$loop = new WP_Query(array('post_type' => 'ticket', 'orderby' => 'post_id', 'order' => 'ASC'));
			?>

			<?php
			while ($loop->have_posts()) : $loop->the_post() ?>
			<div class="col-sm-12 ticket">
				<div class="col-sm-4 ticket-preview">
					<img src="<?php the_field('ticket_preview_image'); ?>" alt="ticket preview" class="img-responsive">
				</div>
				<div class="col-sm-8 flex--column text-left ticket-info">
					<h3><?php the_title(); ?></h3>
					<h4>Available From: <?php the_field('ticket_available'); ?></h4>
					<p><?php the_field('ticket_desc'); ?></p>
					<a href="<?php the_field('ticket_link'); ?>" target="_blank" class="link-reset ticket-book">Book</a>
					<div class="ticket-price vs-dark">
						<h3><?php the_field('ticket_price'); ?></h3>
					</div>
				</div>
			</div>

			<?php endwhile; ?>
		</div>
	</div>
</section>

<section class="about-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 overview-about">
				<h2 class="text-center show__subtitle"><?php echo $about_title_small; ?></h1>
				<?php echo $about_content_small; ?>
			</div>
			<div class="col-sm-12 overview-about">
				<h1 class="text-center show__title"><?php echo $about_title_big; ?></h1>
				<p><?php echo $about_content_big; ?></p>				
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>