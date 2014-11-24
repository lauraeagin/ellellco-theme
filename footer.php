</div>
<footer>
	<?php if (is_active_sidebar('footer-left') || is_active_sidebar('footer-middle') || is_active_sidebar('footer-right')) : ?>
	<div id="footer-widgets">
		<div class="container">
			<div class="col-md-4">
				<?php dynamic_sidebar('footer-left'); ?>
			</div>
			<div class="col-md-4">
				<?php dynamic_sidebar('footer-middle'); ?>
			</div>
			<div class="col-md-4">
				<?php dynamic_sidebar('footer-right'); ?>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<div id="footer-meta">
		<div class="container">
			<div class="col-md-12">
				<?php wp_nav_menu(array('theme_location' => 'footer','depth' => 1,'container' => false,'fallback_cb' => false)); ?> 
				<p><?php _e('Copyright &copy; 2014', 'griffin'); ?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo('name'); ?></a> &ndash; <a href="http://www.wpmultiverse.com/themes/griffin/" target="_blank"><?php _e('Griffin Theme', 'griffin'); ?></a></p>			
			</div>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>   
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-36867527-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>