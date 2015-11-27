<?php get_header (); ?>

<?php get_template_part ('front-page', 'imageSlide'); ?>	

	<section class="callaction">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big-cta">
					<div class="cta-text">
	                   <p>using front-page.php</p>
						<h2><span><?php bloginfo ('name'); ?></span> 
						<?php the_field ('feature_text'); ?></h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">

		<!-- require front-page-features.php -->
    <?php get_template_part ('front-page', 'features'); ?>

		<!-- divider -->
		<div class="row">
			<div class="col-lg-12">
				<div class="solidline">
				</div>
			</div>
		</div>
		<!-- end divider -->
		<!-- Portfolio Projects -->

        <!-- require front-page-recent_works.php -->
		<?php get_template_part ('front-page', 'recent_works'); ?>

	</div>
	</section>

<?php get_footer (); ?>
