			<!-- FOOTER -->
			<footer class="topPadding borderTopGoldGradient">
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
						<div class="col col-lg-9 col-md-6 col-sm-12 col-xs-12 bottomMarginMobile">
							<div class="row between-lg">
								<div class="col <?php if ( is_active_sidebar('footer-area-2') ): echo 'col-lg-6'; else: echo 'col-lg-4'; endif; ?> col-md-6 col-sm-6 col-xs-12">
									<!--<h3>Products &amp; Services</h3>-->
									<div class="row">
										<div class="col <?php if ( is_active_sidebar('footer-area-2') ): echo 'col-lg-6'; else: echo 'col-lg-12'; endif; ?> col-md-12 col-sm-12 col-xs-6">
											<?php dynamic_sidebar('footer-area-1'); ?>
										</div>
										<?php if ( is_active_sidebar('footer-area-2') ): ?>
										<div class="col col-lg-6 col-md-12 col-sm-12 col-xs-6">
											<?php dynamic_sidebar('footer-area-2'); ?>
										</div>
										<?php endif; ?>
									</div>
								</div>
								<div class="col col-lg-3 col-md-3 col-sm-3 col-xs-6">
									<?php dynamic_sidebar('footer-area-3'); ?>
								</div>
								<div class="col col-lg-3 col-md-3 col-sm-3 col-xs-6">
									<?php dynamic_sidebar('footer-area-4'); ?>
								</div>
							</div>
						</div>
						<div class="col col-lg-3 col-md-6 col-sm-12 col-xs-12">
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
							<p>&copy; <?php echo date('Y '); echo get_bloginfo('name'); echo __('. All rights reserved.');
							if ( have_rows('privacy_policy', 'options') ) {
								while ( have_rows('privacy_policy', 'options') ) {
									the_row();
									$label = get_sub_field('policy_label', 'options');
									$link = get_sub_field('policy_link', 'options');
									echo '&nbsp;&nbsp;<span class="privacyPolicy"><a href="' . $link . '" style="color: #cda85b; text-decoration: none;"">' . $label . '</a></span>';
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
		
		<?php echo do_shortcode('[modal]');
		
		wp_footer(); ?>

		<!-- LINKEDIN INSIGHTS -->
		<script type="text/javascript">
		_linkedin_partner_id = "2873460";
		window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
		window._linkedin_data_partner_ids.push(_linkedin_partner_id);
		</script><script type="text/javascript">
		(function(){var s = document.getElementsByTagName("script")[0];
		var b = document.createElement("script");
		b.type = "text/javascript";b.async = true;
		b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
		s.parentNode.insertBefore(b, s);})();
		</script>
		<noscript>
		<img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=2873460&fmt=gif" />
		</noscript>
		<!-- / LINKEDIN INSIGHTS -->

	</body>
</html>
