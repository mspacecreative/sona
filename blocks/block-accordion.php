<section class="section darkGreyBg light">
	<div class="inner maxWidth980">
	<?php
	if ( have_rows('tab_row') ) {
		while ( have_rows('tab_row') ) {
			the_row();
			$title = get_sub_field('title');
			$content = get_sub_field('content');
			echo '<div class="tabRow">
			      	<a href="#">' . $title . '</a>
				  	<div class="tabAnswer">' . $content . '</div>
				  </div>';
		}
	} ?>
	</div>
</section>