<?php get_header(); ?>

<div class="container">
		<div class="row-fluid">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post();
						?>
							<div class="inner-page-title">
								<h1><?php the_title(); ?></h1>
								<hr>
							</div>
							<div class="inner-page-content"><?php the_content(); ?></div>
				<?php
						} // end while
					} // end if
				?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>