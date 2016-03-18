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
  		<div class="social block">
  			<h2 class="title"><?php _e('Síguenos', 'simian_theme'); ?></h2>
        
  			<div class="social-links">
					<a href="https://www.facebook.com/simianlab" target="_blank" class="facebook">
						<svg class="icon icon-facebook grey-hover"><use xlink:href="#icon-facebook"></use></svg><span class="mls"></span>
					</a>
					<a href="https://twitter.com/simianlab" target="_blank"class="twitter">
						<svg class="icon icon-twitter grey-hover"><use xlink:href="#icon-twitter"></use></svg><span class="mls"></span>
					</a>
					<a href="https://plus.google.com/+SimianCo" target="_blank" class="google-plus">
						<svg class="icon icon-google-plus grey-hover"><use xlink:href="#icon-google-plus"></use></svg><span class="mls"></span>
					</a>
          <a href="https://www.youtube.com/channel/UCD4IYGyW-b0TqpK29gmZLhw" class="youtube">
            <svg class="icon icon-youtube grey-hover"><use xlink:href="#icon-youtube"></use></svg><span class="mls"></span>
          </a>
          <a href="https://www.linkedin.com/company/simian-s-a-s-" class="linkedin">
            <svg class="icon icon-linkedin grey-hover"><use xlink:href="#icon-linkedin"></use></svg><span class="mls"></span>
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
      <div class="simian-bottom">
        <svg class="icon icon-simian"><use xlink:href="#icon-simian"></use></svg><span class="mls"></span>
      </div>
  	</div>
  </footer>
  </div>
  <?php wp_footer(); ?>
</body>
</html>