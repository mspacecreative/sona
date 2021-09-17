<?php get_header('product');

	$defaultimg = get_template_directory_uri() . '/assets/img/placeholders/page-header.jpg'; ?>

	<section class="relativePositioning header-container shorter lightOverlay" style="background-image: url(<?php echo $defaultimg ?>); background-position: bottom;">
		
		<!--<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
		
		<div class="inner">
			post title
			<h1 class="postTitle">
				<?php
				global $post;
				$terms = wp_get_post_terms( $post->ID, 'brand');
				foreach ( $terms as $term ) : ?>
					<?php echo $term->name ?><?php _e('&#8482'); ?> <?php echo the_title(); ?>
				<?php endforeach; ?>
			</h1>
			/post title
		</div>
		
		<?php endwhile; endif; rewind_posts(); ?>-->
		
	</section>

	<?php if ( have_posts() ): 
	echo 
	'<div id="main-content">';
	while ( have_posts() ): the_post();
	
	$summary = get_field('summary');
	$product_image = get_field('product_image');
	$link = get_field('link');
	$label = get_field('label'); ?>
	
	<section class="relativePositioning">
		<div class="inner top-bottom-padding">
			<div class="row gutter_space_3">
				<div class="col col-lg-8 col-md-8 col-sm-12 col-xs-12">
					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							
						<div class="row gutter_space_1 productImgCol" style="margin-bottom: 3em;">
						    <div class="col col-lg-4 col-md-4 col-sm-4 col-xs-4 bottomMarginMobile" style="text-align: center;">
								<h2 style="margin-bottom: 30px;">
									<?php
									global $post;
									$terms = wp_get_post_terms( $post->ID, 'brand');
									foreach ( $terms as $term ) : ?>
										<?php echo $term->name ?><?php _e('&#8482'); ?> <?php echo the_title(); ?>
									<?php endforeach; ?>
								</h2>
								
								<!--post thumbnail -->
								<?php if ( !empty( $product_image ) ) : ?>
								<img src="<?php echo esc_url($product_image['url']); ?>" alt="<?php echo esc_attr($product_image['alt']); ?>" />
								<?php endif; ?>
								<!-- /post thumbnail -->
								
								<!-- CTA -->
								<?php
								if ( have_rows('cta_button') ) {
									while ( have_rows('cta_button') ) {
										the_row();
										$link = get_sub_field('link');
										$label = get_sub_field('label');
										
										if ( $link && $label ) {
											echo '<a href="' . $link . '" class="button dark">' . $label . '</a>';
										} elseif ( $link ) {
											echo '<a href="' . $link . '" class="button dark">CONTACT SONA</a>';
										}
									}
								} ?>
								<!-- / CTA -->
								
							</div>
								
							<?php if ( $summary ) : ?>
							<div class="col col-lg-8 col-md-8 col-sm-8 col-xs-8">
								<?php echo $summary ?>
							</div>
							<?php endif; ?>
								
						</div>
						
						<?php the_content(); // Dynamic Content
						
						if ( have_rows('product_specs') ):
							while ( have_rows('product_specs') ):
								the_row();
								if ( have_rows('range') ):
									while ( have_rows('range') ):
										the_row();?>
										
										<h2>Product Specs</h2>
										<table cellspacing="0" cellpadding="0" border="0" width="100%">
											<tr>
												<td><h4>Parameters</h4></td>
												<td><h4>Range</h4></td>
											</tr>
											<tr>
												<td>Nanorod length (nm)</td>
												<td><?php the_sub_field('value_1'); ?></td>
											</tr>
											<tr>
												<td>Nanorod width (nm)</td>
												<td><?php the_sub_field('value_2'); ?></td>
											</tr>
											<tr>
												<td>Aspect ratio (TEM)</td>
												<td><?php the_sub_field('value_3'); ?></td>
											</tr>
											<tr>
												<td>Optical density (cm-1)</td>
												<td><?php the_sub_field('value_4'); ?></td>
											</tr>
											<tr>
												<td>LSPR Maximum (nm)</td>
												<td><?php the_sub_field('value_5'); ?></td>
											</tr>
											<tr>
												<td>LSPR/TSPR Ratio</td>
												<td><?php the_sub_field('value_6'); ?></td>
											</tr>
											<tr>
												<td>Zeta Potential (mV)</td>
												<td><?php the_sub_field('value_7'); ?></td>
											</tr>
												<td>pH</td>
												<td><?php the_sub_field('value_8'); ?></td>
											</tr>
											<tr>
												<td>Colour</td>
												<td><?php the_sub_field('value_9'); ?></td>
											</tr>
											<tr>
												<td>Particle Concentration</td>
												<td><?php the_sub_field('value_10'); ?></td>
											</tr>
											<tr>
												<td>Solvent</td>
												<td><?php the_sub_field('value_11'); ?></td>
											</tr>
										</table>
									<?php endwhile;
								endif;
							endwhile;
						endif; ?>
			
						<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
			
					</article>
					<!-- /article -->
				</div>
				<div class="col col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<?php dynamic_sidebar('sidebar-product'); ?>
				</div>
			</div>
		</div>
	</section>

	<?php endwhile;
	
	echo 
	'<div id="main-content">';
	else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'sona' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>

<?php get_footer(); ?>
