<?php 
$atts = shortcode_atts( array(
    'type' => ''
), $atts );

$args = array(
    'posts_per_page' => -1,
    'post_type'      => 'team',
);
    
if ( $atts['type'] ) {

	$args['tax_query'] = array(
		array(
			'taxonomy' => 'member_type',
			'field'    => 'slug',
			'terms'    => $atts,
		),
	);
}
$loop = new WP_Query( $args );
if ( $loop->have_posts() ) : ?>
<div class="row gutter_space_2 team-container clear">
	
	<div class="bioContainerUnderlay"></div>
	
	<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
	
	<div class="team-profile col col-lg-4 col-md-4 col-sm-6 col-xs-12">
				
		<div class="profile-img-wrap">
			<div class="plus-sign">
				<i class="fa fa-plus"></i>
			</div>
			<div class="profile-overlay"></div>
			<?php if ( has_post_thumbnail() ) {
				echo the_post_thumbnail( 'team-member' );
			} else {
			echo '<img src="' . get_template_directory_uri() . '/img/portrait_placeholder.jpg">';
			} ?>
		</div>
								
		<h4><?php the_title(); ?></h4>
		
		<?php if ( get_field('position__title', $post->ID) ): ?>
		<p><?php the_field('position__title', $post->ID); ?></p>
		<?php endif; ?>
								
	</div>
	 
	<div class="team-bio-container">
		<span class="close-button mobile"></span>
		<div class="team-bio-inner">
			<span class="close-button desktop"></span>
			<?php
			$shortbio = get_field('short_bio'); 
			if ( $shortbio ) {
				echo $shortbio;
			}
			
			$file = get_field('file', $post->ID);
			if ( $file ) : ?>
			    <p><a class="button light" style="margin-top: 15px;" href="<?php the_field('file', $post->ID); ?>" download>Download high res head shot</a></p>
			<?php endif; ?>
	
		</div>
	</div>
	
	<?php endwhile; ?>

</div>
<?php endif; wp_reset_query(); ?>