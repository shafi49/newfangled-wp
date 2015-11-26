<?php 
//trim excerpt length for sidebar posts

function trim_excerpt_length ($length) {
    return 20;
}
add_filter ('excerpt_length', 'trim_excerpt_length'); 

?>

<aside class="right-sidebar">
				<?php if (!dynamic_sidebar ( 'blog' ) ) {
                    echo "<h5>Oops! No widgets setup yet</h5>";
                    echo "<p>Please set up widgets from admin panel</p>";
				} ?>
				
				<!--<div class="widget">
					<form class="form-search">
						<input class="form-control" type="text" placeholder="Search..">
					</form>
				</div>-->


				<div class="widget">
					<h5 class="widgetheading">Latest posts</h5>
					<ul class="recent">
					
					<?php query_posts ('posts_per_page=3'); if (have_posts () ) : while (have_posts () ) : the_post (); ?>



						<li>
						
						<figure class="pull-left"><?php the_post_thumbnail ( array (65, 65) ); ?></figure>
						<h6><a href="<?php the_permalink (); ?>"><?php the_title (); ?></a></h6>


                        <p>
							 <?php the_excerpt (); ?>
						</p>
						</li>
                
				    <?php endwhile; else : ?>
                        <p>No recent Posts</p>
                    <?php endif; wp_reset_postdata(); ?>
                    
						<!--<li>
						<a href="#"><img src="img/dummies/blog/65x65/thumb2.jpg" class="pull-left" alt=""></a>
						<h6><a href="#">Maiorum ponderum eum</a></h6>
						<p>
							 Mazim alienum appellantur eu cu ullum officiis pro pri
						</p>
						</li>
						<li>
						<a href="#"><img src="img/dummies/blog/65x65/thumb3.jpg" class="pull-left" alt=""></a>
						<h6><a href="#">Et mei iusto dolorum</a></h6>
						<p>
							 Mazim alienum appellantur eu cu ullum officiis pro pri
						</p>
						</li>-->
					</ul>
				</div>
				<div class="widget">
					<h5 class="widgetheading">Popular tags</h5>
					<ul class="tags">

<?php 

//show categories
    $args = array(
	'show_option_all'    => '',
	'orderby'            => 'name',
	'order'              => 'ASC',
	'style'              => 'list',
	'show_count'         => 0,
	'hide_empty'         => 1,
	'use_desc_for_title' => 1,
	'child_of'           => 0,
	'feed'               => '',
	'feed_type'          => '',
	'feed_image'         => '',
	'exclude'            => '',
	'exclude_tree'       => '',
	'include'            => '',
	'hierarchical'       => 1,
	'title_li'           => __( '' ),
	'show_option_none'   => __( '' ),
	'number'             => null,
	'echo'               => 1,
	'depth'              => 0,
	'current_category'   => 0,
	'pad_counts'         => 0,
	'taxonomy'           => 'category',
	'walker'             => null
    );
    wp_list_categories( $args ); 
?>

<!--
						<li><a href="#">Web design</a></li>
						<li><a href="#">Trends</a></li>
						<li><a href="#">Technology</a></li>
						<li><a href="#">Internet</a></li>
						<li><a href="#">Tutorial</a></li>
						<li><a href="#">Development</a></li>
-->
					</ul>
				</div>
				</aside>