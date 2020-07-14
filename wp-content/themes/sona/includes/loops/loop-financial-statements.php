<?php 
$args = array(
	'post_type' => 'financial_report',
	'posts_per_page'=> -1,
	'tax_query' => array(
		array(
		'taxonomy' => 'report_type',
		'field' => 'slug',
		'terms' => 'financial-statement',
		)
	)
);
	
$loop = new WP_Query( $args );
if ( $loop->have_posts() ) : ?>
	
	<h2>Financial Statements</h2>
	
	<ul class="reportList">
			
		<?php while ( $loop->have_posts() ) : $loop->the_post();
		$date = get_field('date');
		$report = get_field('report'); ?>
	
		<li>
			<a href="<?php echo $report ?>" target="_blank"><?php echo $date ?></a>
		</li>
	
	<?php endwhile;
endif; ?>
