<?php
/*
    Template Name: Home Page
 */

$prepurchase_price = get_post_meta(7, 'prepurchase_price', true);
$atDoor_price = get_post_meta(7, 'atDoor_price', true);
$book_url = get_post_meta(7, 'book_url', true);

// Advanced Custom Fields
$introduction_image = get_field('introduction_image');
$introduction_title = get_field('introduction_title');
$intro1_title = get_field('intro1_title');
$intro1_content = get_field('intro1_content');
$intro2_title = get_field('intro2_title');
$intro2_content = get_field('intro2_content');

$performer_title = get_field('performer_title');
$oldperformer_title = get_field('oldperformer_title');
$oldperformer_content = get_field('oldperformer_content');
$oldperformer_image = get_field('oldperformer_image');
$newperformer_title = get_field('newperformer_title');
$newperformer_content = get_field('newperformer_content');

$ticket_section_title = get_field('ticket_section_title');
get_header(); ?>

	<section class="hero" data-type="background" data-speed="5">
		<div class="jumbotron fullscreen flex--column flex--center-column">
			<img class="jumbotron__logo" class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/mff-logo.png" alt="">
			<!-- The logo is gonna changed to October Beatz logo when shrunk -->
			<h1 class="header jumbotron__header-text vs-dark text-center"><?php bloginfo('name') ?></h1>
			<h2 class="subtitle text-center vs-dark bg-dark flex-item--pull-up"><?php bloginfo('description') ?></h2>

			<div class="container">
				<ul class="site-anchors flex flex--center list-reset">
					<li><a class="anchor text-center bg-btn vs-dark" href="news">News</a></li>
					<li><a class="anchor text-center bg-btn vs-dark" href="programs">Program</a></li>
					<li><a class="anchor text-center bg-btn vs-dark" href="performers">Performers</a></li>
					<li><a class="anchor text-center bg-btn vs-dark" href="media">Media</a></li>
					<li><a class="anchor text-center bg-btn vs-dark" href="about">About</a></li>
				</ul>
			</div>
		</div>
	</section>

	<section class="home__intro">
		<div class="container">
			<div class="row text-center">
				<!-- If introduction image is here -->
				<?php
					if (!empty($introduction_image)) : ?>
					<img src="<?php echo $introduction_image['url']; ?>" alt="<?php echo $introduction_image['alt']; ?>">
				<?php endif ?>
				<h2 class="section-intro text-center"><?php echo $introduction_title ?></h2>
				<div class="col-sm-5 subsection col-sm-offset-1">
					<h3 class="subsection__title zero-margin--top text-left"><?php echo $intro1_title ?></h3>
					<p class="subsection__text text-left"><?php echo $intro1_content ?></p>
				</div>
				<div class="col-sm-5 subsection">
					<h3 class="subsection__title zero-margin--top text-left"><?php echo $intro2_title ?></h3>
					<p class="subsection__text text-left"><?php echo $intro2_content ?></p>
				</div>
			</div>
		</div>
	</section>

	<section class="home__performer">
		<div class="container">
			<div class="row">
				<h2 class="section-intro text-center"><?php echo $performer_title ?></h2>
				<div class="col-sm-12">
					<div class="col-sm-4 col-sm-offset-1 subsection">
						<h3 class="subsection__title zero-margin--top"><?php echo $oldperformer_title ?></h3>
						<p class="subsection__text"><?php echo $oldperformer_content ?></p>
					</div>
					<div class="col-sm-7 subsection">
						<?php
							if (!empty($oldperformer_image)) : ?>
							<img class="img-responsive" src="<?php echo $oldperformer_image['url']; ?>" alt="<?php echo $oldperformer_image['alt']; ?>">
						<?php endif ?>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="col-sm-4 subsection col-sm-push-8">
						<h3 class="subsection__title zero-margin--top"><?php echo $newperformer_title ?></h3>
						<p class="subsection__text"><?php echo $newperformer_content ?></p>
					</div>
					<div class="col-sm-7 col-sm-offset-1 subsection col-sm-pull-4">
						<div class="gallery flex">
							<?php echo photo_gallery(1); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="home__more">
		<div class="container">
			<div class="row text-center">
				<h2 class="section-intro"><?php echo $ticket_section_title ?></h2>

				<?php
					$loop = new WP_Query(array('post_type' => 'ticket', 'orderby' => 'post_id', 'order' => 'ASC'));
				?>

				<?php
					while ($loop->have_posts()) : $loop->the_post() ?>
					<div class="col-sm-10 col-sm-offset-1 ticket">
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

	<?php get_footer(); ?>
