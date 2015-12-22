  <footer class="footer">
  	<div class="content">
  		<div class="links block">
  			<h2 class="title"><?php _e('Contenido', 'simian_theme'); ?></h2>
  			<?php
        $args = array(
          'theme_location' => 'footer_1',
          'container' => false,
          'menu_class' => '',
          'echo' => true,
          'fallback_cb' => 'wp_page_menu',
          );

          wp_nav_menu( $args ); ?>
  		</div>
  		<div class="info block">
  			<h2 class="title"><?php _e('Información', 'simian_theme'); ?></h2>
			  <?php
        $args = array(
          'theme_location' => 'footer_2',
          'container' => false,
          'menu_class' => '',
          'echo' => true,
          'fallback_cb' => 'wp_page_menu',
          );

          wp_nav_menu( $args ); ?>
  		</div>
  		<div class="social block">
  			<h2 class="title"><?php _e('Síguenos', 'simian_theme'); ?></h2>
  			<div class="social-links">
					<a href="" class="facebook">
						<svg class="icon icon-icon-facebook"><use xlink:href="#icon-icon-facebook"></use></svg><span class="mls"></span>
					</a>
					<a href="" class="twitter">
						<svg class="icon icon-icon-twitter"><use xlink:href="#icon-icon-twitter"></use></svg><span class="mls"></span>
					</a>
					<a href="" class="google-plus">
						<svg class="icon icon-icon-google-plus"><use xlink:href="#icon-icon-google-plus"></use></svg><span class="mls"></span>
					</a>
				</div>
  		</div>
	  	<div class="copyright">
	  		<p><?php _e('©2016 Simian todos los derechos reservados', 'simian_theme'); ?></p>
	  		<p>
	  			<?php _e('A menos que se señale lo contrario, el contenido de esta página este licenciado bajo la licencia Creative Commons Attribution 3.0', 'simian_theme');
	  			_e(', y los ejemplos de código están registrados bajo la licencia 2.0 de Apache.', 'simian_theme'); ?>
	  		</p>
	  	</div>
  	</div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>