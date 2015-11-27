<?php get_header (); ?>

<?php get_header ('breadcrumb'); ?>

<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">

<p>using search.php</p>

                <?php $search_query = get_search_query(); ?>
                <?php if ( have_posts () ) : ?>

                        <h3>Search Results for "<?php echo $search_query; ?>"</h3>

                <?php while ( have_posts () ) : the_post (); ?>
				<article> <!--repeat this article by loop-->
						
                    <div class="post-heading">
                        <h3>
                            <a href="<?php the_permalink (); ?>"><?php the_title ();?></a>
                        </h3>
                    </div>
						
						<?php the_excerpt (); ?>
						
				</article>
				
               <?php endwhile; ?>
               <!-- Add the pagination functions here. -->

               <?php else : ?>
                
                <p>Oops! Looks like you don't have any posts yet... </p>
                
                <?php endif; ?>

			</div>
			<div class="col-lg-4">
				<?php get_sidebar ('blog'); ?>
			</div>
		</div>
	</div>
	</section>

<?php get_footer (); ?>