<?php
/*
    Template Name: Portfolio Page
*/
?>
<?php get_header (); ?>

<?php get_header ('breadcrumb'); ?>	

<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			<p>using page-portfolio.php page</p>
				<ul class="portfolio-categ filter">
					<li class="all active"><a href="#">All</a></li>
					<li class="web"><a href="#" title="">Web design</a></li>
					<li class="icon"><a href="#" title="">Icons</a></li>
					<li class="graphic"><a href="#" title="">Graphic design</a></li>
				</ul>
				<div class="clearfix">
				</div>
				<div class="row">
					<section id="projects">
					<ul id="thumbs" class="portfolio" style="height: 450px;">
					<li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="web">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="<?php echo get_stylesheet_directory_uri (); ?>/img/works/1.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
<?php 
$arguments = array (
        'post_type' => 'portfolio',
        'posts_per_page' => -1
        
);

$query = new WP_Query ($arguments); 

?>
<?php if ($query -> have_posts() ) : while ($query -> have_posts () ) : $query -> the_post(); ?>
<?php //the_post_thumbnail (); ?>
<?php //slideImage ('image'); ?>
<?php endwhile; endif; wp_reset_postdata(); ?>

						<img src="<?php echo get_stylesheet_directory_uri (); ?>/img/works/1.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
						</li><li class="item-thumbs col-lg-3 design" data-id="id-1" data-type="icon">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="<?php echo get_stylesheet_directory_uri (); ?>/img/works/2.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="<?php echo get_stylesheet_directory_uri (); ?>/img/works/2.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
						</li><li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="graphic">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="<?php echo get_stylesheet_directory_uri (); ?>/img/works/3.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="<?php echo get_stylesheet_directory_uri (); ?>/img/works/3.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
						</li><li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="web">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="<?php echo get_stylesheet_directory_uri (); ?>/img/works/4.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="<?php echo get_stylesheet_directory_uri (); ?>/img/works/4.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
						</li><li class="item-thumbs col-lg-3 photography" data-id="id-4" data-type="web">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="<?php echo get_stylesheet_directory_uri (); ?>/img/works/5.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="<?php echo get_stylesheet_directory_uri (); ?>/img/works/5.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
						</li><li class="item-thumbs col-lg-3 photography" data-id="id-5" data-type="icon">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="<?php echo get_stylesheet_directory_uri (); ?>/img/works/6.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="<?php echo get_stylesheet_directory_uri (); ?>/img/works/6.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
						</li><li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="web">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="<?php echo get_stylesheet_directory_uri (); ?>/img/works/7.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="<?php echo get_stylesheet_directory_uri (); ?>/img/works/7.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
						</li><li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="graphic">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="<?php echo get_stylesheet_directory_uri (); ?>/img/works/8.jpg">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->
						<img src="<?php echo get_stylesheet_directory_uri (); ?>/img/works/8.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
						</li>
						<!-- Item Project and Filter Name -->
						
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						
						<!-- End Item Project -->
						
						<!-- End Item Project -->
						<!-- Item Project and Filter Name -->
						
						<!-- End Item Project -->
					</ul>
					</section>
				</div>
			</div>
		</div>
	</div>
	</section>

<?php get_footer (); ?>
