<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<div id="home-banner">
				<ol>
					<?php dynamic_sidebar('home-banner') ?>
				</ol>

			</div>
			
			<div id="home-sections">
				<?php dynamic_sidebar('home-sections') ?>
			</div>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
