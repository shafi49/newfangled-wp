<?php get_header (); ?>

<?php get_header ('breadcrumb'); ?>

<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">

<p>using 404.php</p>

                <h3>Oops! Looks like you are little lost!</h3>
                <p>Get back to 
                    <a href="<?php bloginfo ('url'); ?>">
                    <span class = "homeicon"><i class="fa fa-home"></i></span>
                    </a>
                </p>

			</div>
			<div class="col-lg-4">
				<?php get_sidebar ('blog'); ?>
			</div>
		</div>
	</div>
	</section>

<?php get_footer (); ?>