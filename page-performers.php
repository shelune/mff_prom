<?php
/*
    Template Name: Performer Page
 */

$performer_overview_title = get_field('performer_overview_title');
$performer_overview_desc = get_field('performer_overview_desc');
$performer_overview_image = get_field('performer_overview_image');

get_header(); ?>

	<section class="featured" data-type="background" data-speed="3">
		<h1 class="vs-dark text-center">Performers</h1>
	</section>

	<section class="performers-overview">
		<div class="container">
			<div class="row">
				<h1 class="text-center"><?php echo $performer_overview_title; ?></h1>
				<div class="col-sm-4 overview-content">
					<p><?php echo $performer_overview_desc ?></p>
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
				<h1 class="text-center">Take a peek</h1>
				<div class="performers-wrap">
					<div class="performer col-sm-4">
						<div class="col-sm-12">
							<figure>
								<img class="img-responsive" src="http://placehold.it/800x400" alt="performer">
							</figure>
						</div>
						<div class="col-sm-12">
							<div class="performer-data">
								<h4>Name: Random Name</h4>
								<h4>DOB: DD/MM/YY</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident totam repellendus quidem, sed harum deleniti autem! Exercitationem, deserunt. Aliquid sint corporis placeat nihil, eos eveniet, facere incidunt! In odit eaque aliquam nostrum, maxime, molestias ullam pariatur aliquid nulla itaque officiis.</p>
							</div>
						</div>
					</div>
					<div class="performer col-sm-4">
						<div class="col-sm-12">
							<figure>
								<img class="img-responsive" src="http://placehold.it/800x400" alt="performer">
							</figure>
						</div>
						<div class="col-sm-12">
							<div class="performer-data">
								<h4>Name: Random Name</h4>
								<h4>DOB: DD/MM/YY</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident totam repellendus quidem, sed harum deleniti autem! Exercitationem, deserunt. Aliquid sint corporis placeat nihil, eos eveniet, facere incidunt! In odit eaque aliquam nostrum, maxime, molestias ullam pariatur aliquid nulla itaque officiis.</p>
							</div>
						</div>
					</div>
					<div class="performer col-sm-4">
						<div class="col-sm-12">
							<figure>
								<img class="img-responsive" src="http://placehold.it/800x400" alt="performer">
							</figure>
						</div>
						<div class="col-sm-12">
							<div class="performer-data">
								<h4>Name: Random Name</h4>
								<h4>DOB: DD/MM/YY</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident totam repellendus quidem, sed harum deleniti autem! Exercitationem, deserunt. Aliquid sint corporis placeat nihil, eos eveniet, facere incidunt! In odit eaque aliquam nostrum, maxime, molestias ullam pariatur aliquid nulla itaque officiis.</p>
							</div>
						</div>
					</div>
					<div class="performer col-sm-4">
						<div class="col-sm-12">
							<figure>
								<img class="img-responsive" src="http://placehold.it/800x400" alt="performer">
							</figure>
						</div>
						<div class="col-sm-12">
							<div class="performer-data">
								<h4>Name: Random Name</h4>
								<h4>DOB: DD/MM/YY</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident totam repellendus quidem, sed harum deleniti autem! Exercitationem, deserunt. Aliquid sint corporis placeat nihil, eos eveniet, facere incidunt! In odit eaque aliquam nostrum, maxime, molestias ullam pariatur aliquid nulla itaque officiis.</p>
							</div>
						</div>
					</div>
					<div class="performer col-sm-4">
						<div class="col-sm-12">
							<figure>
								<img class="img-responsive" src="http://placehold.it/800x400" alt="performer">
							</figure>
						</div>
						<div class="col-sm-12">
							<div class="performer-data">
								<h4>Name: Random Name</h4>
								<h4>DOB: DD/MM/YY</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident totam repellendus quidem, sed harum deleniti autem! Exercitationem, deserunt. Aliquid sint corporis placeat nihil, eos eveniet, facere incidunt! In odit eaque aliquam nostrum, maxime, molestias ullam pariatur aliquid nulla itaque officiis.</p>
							</div>
						</div>
					</div>
					<div class="performer col-sm-4">
						<div class="col-sm-12">
							<figure>
								<img class="img-responsive" src="http://placehold.it/800x400" alt="performer">
							</figure>
						</div>
						<div class="col-sm-12">
							<div class="performer-data">
								<h4>Name: Random Name</h4>
								<h4>DOB: DD/MM/YY</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident totam repellendus quidem, sed harum deleniti autem! Exercitationem, deserunt. Aliquid sint corporis placeat nihil, eos eveniet, facere incidunt! In odit eaque aliquam nostrum, maxime, molestias ullam pariatur aliquid nulla itaque officiis.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>