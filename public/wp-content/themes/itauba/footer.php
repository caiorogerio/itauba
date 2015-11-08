	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<address>
				<?= get_option('address1') ?><br>
				<?= get_option('address2') ?><br>
				<?= get_option('address3') ?>
			</address>
		</div><!-- .site-info -->

		<ul>
			<li class="phone"><?= get_option('phone') ?></li>
			<li class="email"><a href="mailto:<?= get_option('email') ?>"><?= get_option('email') ?></a></li>
		</ul>
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
