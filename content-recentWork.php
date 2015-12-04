<?php 

$numb_posts = -1;
$numb_posts = (is_front_page () ) ? 4 : -1;


$arguments = array (
        'post_type' => 'showcase',
        'posts_per_page' => $numb_posts

);

$query = new WP_Query ($arguments); 

?>
<?php if ($query -> have_posts() ) : while ($query -> have_posts () ) : $query -> the_post(); ?>

					<li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="<?php the_field ('type'); ?>">
						<!-- Fancybox - Gallery Enabled - Title - Full Image -->
						<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="<?php slideImage ('image'); ?>">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
						<!-- Thumb Image and Description -->

						<img src="<?php slideImage ('image'); ?>" alt="<?php the_field ('description'); ?>">
						</li>

<?php endwhile; endif; wp_reset_postdata(); ?>

