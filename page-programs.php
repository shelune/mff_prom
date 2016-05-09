<?php
/*
    Template Name: Programs Page
 */

get_header(); ?>

<section class="featured" data-type="background" data-speed="3">
	<h1 class="vs-dark text-center">Programs</h1>
</section>

<section class="performers-overview">
	<div class="container">
		<div class="row">
			<!-- PART I -->
			<div class="col-sm-12 part--1">
				<h1 class="text-center">Part 1</h1>
				<?php
				$loop = new WP_Query(array('post_type' => 'program', 'orderby' => 'post_id', 'order' => 'ASC'));
				?>

				<?php
				while ($loop->have_posts()) : $loop->the_post() ?>
					<?php if (get_field('program_section') == 1) : ?>
					<div class="col-sm-10 col-sm-offset-1 program flex">
						<div class="col-sm-4 program__image">
							<?php $image = get_field('program_image'); ?>
							<img src="<?php echo $image['url']; ?>" alt="Preview" class="img-responsive">
						</div>
						<div class="col-sm-7 program-details">
							<h3><span class="program__name"><?php the_title(); ?></span> &nbsp; - &nbsp; <span class="program__time"><?php the_field('program_time'); ?></span></h3>
							<h4 class="program__performers">Performers: &nbsp; <?php the_field('program_performers'); ?></h4>
							<h4 class="program__genre">Genre: &nbsp; <?php the_field('program_genres'); ?></h4>
							<p class="program__intro"><?php the_field('program_introduction'); ?></p>
						</div>
					</div>  
					<?php endif; ?>
				
				<?php endwhile; ?>
			
			</div>
			
			<!-- PART II -->
			<div class="col-sm-12 part--2">
				<h1 class="text-center">Part 2</h1>
				<?php
				$loop = new WP_Query(array('post_type' => 'program', 'orderby' => 'post_id', 'order' => 'ASC'));
				?>

				<?php
				while ($loop->have_posts()) : $loop->the_post() ?>
				<?php if (get_field('program_section') == 2) : ?>
				<div class="col-sm-10 col-sm-offset-1 program flex">
					<div class="col-sm-4 program__image">
						<?php $image = get_field('program_image'); ?>
						<img src="<?php echo $image['url']; ?>" alt="Preview" class="img-responsive">
					</div>
					<div class="col-sm-7 program-details">
						<h3><span class="program__name"><?php the_title(); ?></span> &nbsp; - &nbsp; <span class="program__time"><?php the_field('program_time'); ?></span></h3>
						<h4 class="program__performers">Performers: &nbsp; <?php the_field('program_performers'); ?></h4>
						<h4 class="program__genre">Genre: &nbsp; <?php the_field('program_genres'); ?></h4>
						<p class="program__intro"><?php the_field('program_introduction'); ?></p>
					</div>
				</div>  
				<?php endif; ?>

				<?php endwhile; ?>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>