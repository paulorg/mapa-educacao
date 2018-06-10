		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h2><?php _e('Mapa Educação', 'mapa-educacao'); ?></h2></a>
						<p><?php the_time('Y'); ?> - <?php _e('Mapa Educação', 'mapa-educacao'); ?></p>
						<p><?php _e('Todos os direitos reservados', 'mapa-educacao'); ?></p>
						<p class="privacy-policy"><?php _e('Conheça nossa', 'mapa-educacao'); ?> <a href="<?php get_privacy_policy_url(); ?>" target="_blank"><?php _e('Política de privacidade', 'mapa-educacao'); ?></a></p>
					</div>
					<?php
						wp_nav_menu(array(
							'theme_location'	=> 'footer',
							'container'	=> false,
							'items_wrap' => '<ul id="%1$s" class="%2$s col-md-8">%3$s</ul>'
						));
					?>
				</div>
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>
