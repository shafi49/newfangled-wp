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
					<ul id="thumbs" class="portfolio">

                        <?php get_template_part ('content', 'recentWork'); ?>

					</ul>
					</section>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer (); ?>
