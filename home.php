<?php get_header (); ?>

<?php get_header ('breadcrumb'); ?>

<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
			<?php if ( have_posts () ) : while ( have_posts () ) : the_post (); ?>
				<article> <!--repeat this article by loop-->
						<div class="post-image">
							<div class="post-heading">
								<h3><a href="<?php the_permalink; ?>"><?php the_title ();?></a></h3>
							</div>
							<img src="img/dummies/blog/img1.jpg" alt="">
						</div>
						
						<?php the_content (); ?>
						
						<div class="bottom-article">
							<ul class="meta-post">
								<li><i class="icon-calendar"></i><a href="#"> Mar 23, 2013</a></li>
								<li><i class="icon-user"></i><a href="#"> Admin</a></li>
								<li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
								<li><i class="icon-comments"></i><a href="#">4 Comments</a></li>
							</ul>
							<a href="#" class="pull-right">Continue reading <i class="icon-angle-right"></i></a>
						</div>
				</article>
				
               <?php endwhile; else : ?>
                
                <p>Oops! Looks like you don't have any posts yet... </p>
                
                <?php endif; wp_reset_postdata (); ?>
                
				<div id="pagination">
					<span class="all">Page 1 of 3</span>
					<span class="current">1</span>
					<a href="#" class="inactive">2</a>
					<a href="#" class="inactive">3</a>
				</div>
			</div>
			<div class="col-lg-4">
				<?php get_sidebar (); ?>
			</div>
		</div>
	</div>
	</section>

<?php get_footer (); ?>