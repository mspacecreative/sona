			<!-- FOOTER -->
			<footer class="topPadding">
				<div class="inner light">
					<!--<ul class="footer-nav top-margin">
						<li><a href="/products-and-services">Products &amp; Services</a></li>
						<li><a href="#">Coronavirus</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Media</a></li>
						<li><a href="#">Contact</a></li>
					</ul>-->
					<div class="row gutter_space_2">
						<!--<div class="col col-lg-4 col-md-6 col-sm-12 col-xs-12">
							<h3>Sign up for our newsletter</h3>
							<form method="post" action="" class="enews-form">
								<input type="email" name="Email Address" placeholder="Email Address" />
								<input type="text" name="First Name" placeholder="First Name" />
								<input type="text" name="Last Name" placeholder="Last Name" />
								<input type="text" name="Company Name" placeholder="Company Name" />
								<input type="submit" name="Subscribe" value="Subscribe" class="button light" />
							</form>
						</div>-->
						<div class="col col-lg-8 col-md-6 col-sm-12 col-xs-12 bottomMarginMobile">
							<div class="row between-lg">
								<div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<h3>Products &amp; Services</h3>
									<div class="row">
										<div class="col col-lg-6 col-md-12 col-sm-12 col-xs-6">
											<?php dynamic_sidebar('footer-area-1'); ?>
										</div>
										<div class="col col-lg-6 col-md-12 col-sm-12 col-xs-6">
											<?php dynamic_sidebar('footer-area-2'); ?>
										</div>
									</div>
								</div>
								<div class="col col-lg-2 col-md-3 col-sm-3 col-xs-6">
									<?php dynamic_sidebar('footer-area-3'); ?>
								</div>
								<div class="col col-lg-3 col-md-3 col-sm-3 col-xs-6">
									<?php dynamic_sidebar('footer-area-4'); ?>
								</div>
							</div>
						</div>
						<div class="col col-lg-4 col-md-6 col-sm-12 col-xs-12">
							<?php dynamic_sidebar('footer-area-5'); ?>
						</div>
					</div>
				</div>
			</footer>
			<div class="copyright">
				<div class="inner light">
					<div class="row middle-lg middle-md reverse">
						<div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<ul class="social-media">
								<li><a href="https://ca.linkedin.com/company/sona-nanotech-ltd" target="_blank"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="https://twitter.com/sonananotech" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.youtube.com/channel/UCCK3VsReQEBrSY_gi5jWtFA" target="_blank"><i class="fa fa-youtube"></i></a></li>
								<li><a href="https://www.instagram.com/sona_nanotech/" target="_blank"><i class="fa fa-instagram"></i></a></li>
								<li><a href="https://www.facebook.com/SonaNanotechInc" target="_blank"><i class="fa fa-facebook"></i></a></li>
							</ul>
						</div>
						<div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<p>&copy; 2020 Sona Nanotech. All rights reserved.
							<?php if ( have_rows('privacy_policy', 'options') ) {
								while ( have_rows('privacy_policy', 'options') ) {
									the_row();
									$label = get_sub_field('label', 'options');
									$link = get_sub_field('link', 'options');
									echo '<span class="privacyPolicy"><a href="' . $link . '" style="color: #cda85b;">&nbsp;' . $label . '</a></span>';
								}
							} ?>
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- / FOOTER -->

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
