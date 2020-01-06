			<!-- footer -->
<<<<<<< HEAD
			<footer class="footer tester" role="contentinfo">

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
				</p>
				<!-- /copyright -->
=======
			<footer class="footer container-fluid p-0" role="contentinfo">
				<div class="background" style="background-image: url(<?php echo get_template_directory_uri();?>/img/backgrounds/vader_footer.jpg" alt="Darth Vader");></div>
				
					<div class="social d-flex flex-column justify-content-between align-items-center w-100">
						Follow Star Wars:
						<ul class="d-flex justify-content-between align-items-center">
							<li><img src="<?php echo get_template_directory_uri();?>/img/icons/icon_facebook.svg" alt="facebook icon"></li>
							<li><img src="<?php echo get_template_directory_uri();?>/img/icons/icon_instagram.svg" alt="facebook icon"></li>
							<li style="width: 11.5px;"><img src="<?php echo get_template_directory_uri();?>/img/icons/icon_tumblr.svg" alt="facebook icon"></li>
							<li><img src="<?php echo get_template_directory_uri();?>/img/icons/icon_twitter.svg" alt="facebook icon"></li>
							<li><img src="<?php echo get_template_directory_uri();?>/img/icons/icon_youtube.svg" alt="facebook icon"></li>
						</ul>
					</div>
					<div class="link-bank">
						<ul class="d-flex flex-column justify-content-between align-items-center">
							<li>placeholder for acf repeater</li>
							<li>placeholder for acf repeater</li>
							<li>placeholder for acf repeater</li>
							<li>placeholder for acf repeater</li>
							<li>placeholder for acf repeater</li>
							<li>placeholder for acf repeater</li>
							<li>placeholder for acf repeater</li>
							<li>placeholder for acf repeater</li>
							<li>placeholder for acf repeater</li>
							<li>placeholder for acf repeater</li>
						</ul>
					</div>
>>>>>>> development

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
