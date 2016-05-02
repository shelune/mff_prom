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

get_header(); ?>

	<section class="hero" data-type="background" data-speed="5">
		<div class="jumbotron fullscreen flex--column flex--center-column">
			<img class="jumbotron__logo" class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/mff-logo.png" alt="">
			<!-- The logo is gonna changed to October Beatz logo when shrunk -->
			<h1 class="header jumbotron__header-text vs-dark text-center"><?php bloginfo('name') ?></h1>
			<h2 class="subtitle text-center vs-dark bg-dark flex-item--pull-up"><?php bloginfo('description') ?></h2>

			<div class="container">
				<ul class="site-anchors flex flex--center list-reset">
					<li><a class="anchor text-center bg-btn vs-dark" href="news.html">News</a></li>
					<li><a class="anchor text-center bg-btn vs-dark" href="#">Program</a></li>
					<li><a class="anchor text-center bg-btn vs-dark" href="performers.html">Performers</a></li>
					<li><a class="anchor text-center bg-btn vs-dark" href="media.html">Media</a></li>
					<li><a class="anchor text-center bg-btn vs-dark" href="about.html">About</a></li>
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
				<h2 class="section-intro text-center">And to our performers</h2>
				<div class="col-sm-12">
					<div class="col-sm-4 col-sm-offset-1 subsection">
						<h3 class="subsection__title zero-margin--top">Remember this guy?</h3>
						<p class="subsection__text">He was rocking the show for the last 5 consecutive songs in 2015. This year he's gonna take a step back and take different position so newcomers can join the fun too.</p>
					</div>
					<div class="col-sm-7 subsection">
						<img src="http://placehold.it/1220x400" class="img-responsive" alt="">
					</div>
				</div>
				<div class="col-sm-12">
					<div class="col-sm-4 subsection col-sm-push-8">
						<h3 class="subsection__title zero-margin--top">The new faces</h3>
						<p class="subsection__text">They may be new or they may be not, but here in October #Beatz, they are just about to get their first step onto the stage!</p>
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
				<h2 class="section-intro">Tickets</h2>
				<div class="col-sm-10 col-sm-offset-1 ticket">
					<div class="col-sm-4 ticket-preview">
						<img src="http://placehold.it/800x500" alt="ticket" class="img-responsive">
					</div>
					<div class="col-sm-8 flex--column text-left ticket-info">
						<h3>Pre-purchase Ticket</h3>
						<h4>Available: DD/MM/YY</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis fugit impedit dicta?</p>
						<a href="<?php echo $book_url ?>" target="_blank" class="link-reset ticket-book">Book</a>
						<div class="ticket-price vs-dark">
							<h3><?php echo $prepurchase_price ?></h3>
						</div>
					</div>
				</div>
				<div class="col-sm-10 col-sm-offset-1 ticket">
					<div class="col-sm-4 ticket-preview">
						<img src="http://placehold.it/800x500" alt="ticket" class="img-responsive">
					</div>
					<div class="col-sm-8 flex--column text-left ticket-info">
						<h3>Pre-purchase Ticket</h3>
						<h4>Available: DD/MM/YY</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis fugit impedit dicta?</p>
						<a href="<?php echo $book_url ?>" target="_blank" class="link-reset ticket-book">Book</a>
						<div class="ticket-price vs-dark">
							<h3><?php echo $atDoor_price ?></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php get_footer(); ?>