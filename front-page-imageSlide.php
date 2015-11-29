<section id="featured">
	<!-- start slider -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
	<!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">


<?php 
$args = array (
    'post_type' => 'slide',
    'posts_per_page' => 5
);
$query = new WP_Query ($args);
?>
<?php if ( $query -> have_posts () ) : while ( $query -> have_posts () ) : $query -> the_post (); ?>
              
              <li>              
<img src="<?php slideImage ('image_slide'); ?>" alt="">

                <!--<img src="<?php //echo get_stylesheet_directory_uri (); ?>/img/slides/1.jpg" alt="" />-->
                
                <div class="flex-caption">
                    <h3><?php the_title (); ?></h3> 
					<p><?php the_field ('image_description'); ?></p> 
					<a href="#" class="btn btn-theme">Learn More</a>
                </div>
              </li>
              
              <?php endwhile; endif; wp_reset_postdata(); ?>
              
            </ul>
        </div>
	<!-- end slider -->
			</div>
		</div>
	</div>	
	
	

	</section>