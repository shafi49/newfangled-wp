<?php get_header (); ?>

<?php get_header ('breadcrumb'); ?>

<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
                                <p>using archive.php</p>
                <?php if ( have_posts () ) : while ( have_posts () ) : the_post (); ?>
				<article> <!--repeat this article by loop-->
						<div class="post-image">
							<div class="post-heading">
								<h3><a href="<?php the_permalink (); ?>"><?php the_title ();?></a></h3>
							</div>
<?php
// check if the post has a Post Thumbnail assigned to it.
if ( has_post_thumbnail () ) {
	the_post_thumbnail('large');
}
?> 
						</div>
						
						<?php the_excerpt (); ?>
						
						<div class="bottom-article">
							<ul class="meta-post">
<?php 
//get day link to the post
$month = get_post_time ('F');
$day = get_post_time ('j');
$year = get_post_time ('Y');
 ?>
								<li><i class="icon-calendar"></i>
								<a href="<?php echo get_day_link ( $month, $day, $year ); ?>">
								<?php echo get_post_time ( 'F j, Y'); ?>
								</a>
								</li>
<?php 
//retrieve the author meta ID
$ID = get_the_author_meta ( 'ID' ); 
?>
								<li>
								<i class="icon-user"><?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?></i>
								<a href="<?php echo get_author_posts_url ($ID); ?>">
								<?php the_author (); ?>
								</a>
								</li>
								<li><i class="icon-folder-open"></i>
								<a href="<?php echo get_page_link ( 10 ); ?>"> <?php wp_title (''); ?>
								</a>
								</li>
								<li><i class="icon-comments"></i><a href="<?php the_permalink (); ?>">4 Comments</a></li>
							</ul>
							<a href="<?php the_permalink (); ?>" class="pull-right">Continue reading <i class="icon-angle-right"></i></a>
						</div>
				</article>
				
               <?php endwhile; ?>
               <!-- Add the pagination functions here. -->

               <?php else : ?>
                
                <p>Oops! Looks like you don't have any posts yet... </p>
                
                <?php endif; wp_reset_postdata (); ?>
<!--
=== PAGINATION ===
-->
				<div id="pagination">

<?php
$pagination = get_the_posts_pagination ( 
    array (
    'mid_size' => 2,
    'prev_text' => __( 'Back', 'newfangled' ),
    'next_text' => __( 'Onward', 'newfangled' ),
    'screen_reader_text' => __( ' ' )
)
);
echo $pagination; 
?>

<!--
					<span class="all">Page 1 of 3</span>
					<span class="current">1</span>
					<a href="#" class="inactive">2</a>
					<a href="#" class="inactive">3</a>
-->
				</div> <!--div#pagination ends-->
			</div>
			<div class="col-lg-4">
				<?php get_sidebar ('blog'); ?>
			</div>
		</div>
	</div>
	</section>

<?php get_footer (); ?>