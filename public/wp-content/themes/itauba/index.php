<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<div id="home-banner">
				<ol>
					<li>
						<img src="http://fakeimg.pl/1280x400/?text=Banner&font=lobster">
						<div class="info">
							<div>
								<h2>Title</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque congue, justo at pharetra pretium. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque congue, justo at pharetra pretium.</p>
								<p class="button"><a href="#">Confira mais</a></p>
							</div>
						</div>
					</li>
				</ol>
			</div>
			
			<div id="home-sections">
				<?php dynamic_sidebar('home-sections') ?>
			</div>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
