		<footer>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<ul class="social-media">
							<li><a href="https://github.com/cpaccione" target="_blank"><i class="fa fa-github fa-3x"></i></a></li>
							<li><a href="https://www.linkedin.com/in/cpaccione" target="_blank"><i class="fa fa-linkedin fa-3x"></i></a></li>
							<li><a href="/contact/"><i class="fa fa-envelope-o fa-3x" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-12">

					    <?php
					        wp_nav_menu( array(
					            'menu'              => 'primary',
					            'theme_location'    => 'primary',
					            'menu_id'			=> 'footer'
					            )
					        );
					    ?>
					    <small>&copy; <?php echo date("Y"); ?> Christopher Paccione</small>
					</div>
				</div>
			</div>
		</footer>

		<?php wp_footer(); ?>
	</body>
</html>
