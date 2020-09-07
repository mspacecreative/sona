<?php 
$args = array(
	'post_type' => 'financial_report',
	'posts_per_page'=> -1,
	'tax_query' => array(
		array(
		'taxonomy' => 'report_type',
		'field' => 'slug',
		'terms' => 'mda',
		)
	)
);
	
$loop = new WP_Query( $args );
if ( $loop->have_posts() ) : ?>
	
	<h3>MD&amp;A</h3>
	
	<div class="reportList">
			
		<?php while ( $loop->have_posts() ) : $loop->the_post();
		$date = get_field('date', get_the_ID());
		$report = get_field('report', get_the_ID()); ?>
	
		<div class="reportListBlock">
			<a href="<?php echo $report ?>" target="_blank">
				<div class="reportListBlockInner">
					<p style="margin-bottom: 15px;"><?php echo $date ?></p>
					<div class="clearfix">
                    	<i class="reportArrow__icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="45" height="10" viewBox="0 0 45 10">
                    		<g fill="none" fill-rule="evenodd" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                        	<path d="M1 5h42M40 1l4 4-4 4"></path>
                      		</g>
							</svg>
						</i>
                      
                    	<!--<i class="fa fa-file-pdf-o"></i>-->
						<i class="pdfIcon">
							<svg width="24" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 30">
							<path class="st0" fill="#000" d="M19.3,19.6c-0.4,0.1-0.9,0.1-1.5,0c-0.6-0.1-1.3-0.3-1.9-0.6c1.1-0.2,2-0.1,2.7,0.1
								C18.8,19.3,19.1,19.4,19.3,19.6z M13.1,18.6l-0.1,0c-0.3,0.1-0.6,0.2-0.9,0.2l-0.4,0.1c-0.8,0.2-1.5,0.4-2.3,0.6
								c0.3-0.7,0.6-1.4,0.8-2.1c0.2-0.5,0.4-1,0.6-1.6c0.1,0.2,0.2,0.3,0.3,0.5C11.7,17.2,12.3,17.9,13.1,18.6z M11.2,10.7
								c0,0.9-0.1,1.7-0.4,2.5c-0.3-1-0.5-2.1-0.1-2.9c0.1-0.2,0.2-0.3,0.3-0.4C11,9.9,11.1,10.2,11.2,10.7z M7.2,21.6
								c-0.2,0.3-0.4,0.7-0.6,1C6.2,23.3,5.4,24,5,24c0,0-0.1,0-0.2-0.1c0,0-0.1-0.1-0.1-0.1c0-0.3,0.4-0.7,0.9-1.2
								C6.1,22.3,6.7,21.9,7.2,21.6z M20.5,19.6c-0.1-0.9-1.5-1.4-1.6-1.5c-0.6-0.2-1.2-0.3-1.9-0.3c-0.8,0-1.6,0.1-2.6,0.4
								c-0.9-0.7-1.7-1.5-2.3-2.4c-0.3-0.4-0.5-0.8-0.7-1.2c0.5-1.2,1-2.5,0.9-4c-0.1-1.2-0.6-2-1.3-2C10.5,8.6,10,9,9.7,9.7
								c-0.6,1.3-0.5,2.9,0.5,4.9c-0.3,0.8-0.7,1.6-1,2.4c-0.4,1-0.8,2-1.2,3c-1.2,0.5-2.2,1.1-3.1,1.8c-0.6,0.5-1.2,1.2-1.3,2
								c0,0.4,0.1,0.7,0.4,0.9c0.3,0.3,0.6,0.4,1,0.4c1.2,0,2.4-1.7,2.6-2c0.4-0.7,0.9-1.4,1.3-2.3c1-0.4,2.1-0.6,3.2-0.9l0.4-0.1
								c0.3-0.1,0.6-0.2,0.9-0.2c0.3-0.1,0.6-0.2,1-0.3c1.1,0.7,2.2,1.1,3.4,1.3c1,0.1,1.8,0.1,2.4-0.2C20.5,20.2,20.5,19.8,20.5,19.6z
								 M22.9,27.2c0,1.6-1.4,1.7-1.7,1.7H2.8c-1.6,0-1.7-1.4-1.7-1.7V2.8c0-1.6,1.4-1.7,1.7-1.7h12.4l0,0v4.8c0,1,0.6,2.8,2.8,2.8h4.8l0,0
								C22.9,8.8,22.9,27.2,22.9,27.2z M21.7,7.6H18c-1.6,0-1.7-1.4-1.7-1.7V2.2L21.7,7.6L21.7,7.6z M24,27.2V8.3l-7.7-7.7v0h0L15.7,0H2.8
								C1.8,0,0,0.6,0,2.8v24.4c0,1,0.6,2.8,2.8,2.8h18.3C22.1,30,24,29.4,24,27.2L24,27.2z"/>
							</svg>
						</i>
					</div>
				</div>
			</a>
		</div>
	
		<?php endwhile; ?>
	</div>
<?php endif; wp_reset_query(); ?>