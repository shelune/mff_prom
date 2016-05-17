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
				<ul class="site-anchors flex flex--around list-reset">
					<li><a class="anchor text-center bg-btn vs-dark" href="news">News</a></li>
					<li><a class="anchor text-center bg-btn vs-dark" href="programs">Program</a></li>
					<li><a class="anchor text-center bg-btn vs-dark" href="performers">Performers</a></li>
					<li><a class="anchor text-center bg-btn vs-dark" href="media">Media</a></li>
					<li><a class="anchor text-center bg-btn vs-dark" href="about">Info</a></li>
				</ul>
			</div>
		</div>
	</section>

	<section class="home__intro">
		<div class="container">
			<div class="row">
				<!-- If introduction image is here -->
				<h2 class="section-intro"><?php echo $introduction_title ?></h2>
				<div class="col-sm-4 intro__image">
					<img src="http://placehold.it/900x1000" alt="plc" class="img-responsive">
				</div>
				<div class="col-sm-7 intro__content">
					<div class="col-sm-12 intro__last-year">
						<h3 class="subsection__title zero-margin--top text-left"><?php echo $intro1_title ?></h3>
						<p class="subsection__text text-left"><?php echo $intro1_content ?></p>
					</div>
					<div class="col-sm-12 intro__this-year">
						<h3 class="subsection__title zero-margin--top text-left"><?php echo $intro2_title ?></h3>
						<p class="subsection__text text-left"><?php echo $intro2_content ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="home__performer">
		<div class="container">
			<div class="row">
				<h2 class="section-intro text-right"><?php echo $performer_title ?></h2>
				<div class="col-sm-12">
					<div class="col-sm-4 subsection">
						<h3 class="subsection__title zero-margin--top"><?php echo $oldperformer_title ?></h3>
						<p class="subsection__text"><?php echo $oldperformer_content ?></p>
					</div>
					<div class="col-sm-8 subsection">
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
					<div class="col-sm-8 subsection col-sm-pull-4">
						<div class="gallery flex">
							<?php echo photo_gallery(1); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="home__transition transition-featured">
		<div class="container-fluid">
			<div class="row">
				<div class="transition__content text-center">
					<h1>Lorem ipsum dolor sit.</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, sit.</p>
				</div>
			</div>
		</div>
	</section>

	<?php get_footer(); ?>
