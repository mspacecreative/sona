<?php
$columns = get_field('columns');
$rowheading = get_field('row_heading');
$rowsubheading = get_field('row_sub_heading');
$bgcolor = get_field('background_colour');
$textcolor = get_field('text_colour');
$boxedcontent = get_field('boxed_content');
$blockanchor = get_field('block_anchor');
$narrow = get_field('narrow');
$centeredtext = get_field('center_align_text');

if ( $columns == 'two' ):

if ( $blockanchor && $bgcolor == 'dark' ): ?>
<div id="<?php echo $blockanchor ?>" class="section darkbg light">
<?php elseif ( $blockanchor && $bgcolor == 'light' ): ?>
<div id="<?php echo $blockanchor ?>" class="section lightbg">
<?php elseif ( $bgcolor == 'light' ): ?>
<div class="section lightbg">
<?php elseif ( $bgcolor == 'dark' ): ?>
<div class="section darkbg">
<?php elseif ( $blockanchor ): ?>
<div id="<?php echo $blockanchor ?>" class="section lightbg">
<?php else : ?>
<div class="section lightbg">
<?php endif;

 	if ( $narrow ): ?>
	<div class="inner no-top-bottom-padding maxWidth980">
	<?php else : ?>
	<div class="inner no-top-bottom-padding">
	<?php endif; ?>
	
		<?php if ( $rowheading && $centeredtext ) {
			echo '<h1 class="text-align-center bottom-margin">' . $rowheading . '</h1>';
		} elseif ( $rowheading ) {
			echo '<h1>' . $rowheading . '</h1>';
		}
		
		if ( $rowsubheading ) {
			echo '<h4>' . $rowsubheading . '</h4>';
		}
		
		if( have_rows('columns_grid') ): ?>
		
		<?php if ( $centeredtext ): ?>
		<div class="row gutter-space-1 center-lg center-md center-sm center-xs icons-visible">
		<?php else : ?>
		<div class="row gutter-space-1">
		<?php endif; ?>
			
			<?php while( have_rows('columns_grid') ): the_row();
			
			$inlinelinks = get_sub_field('inline_links');
			if ( $inlinelinks ):
			
			if ( $boxedcontent ): ?>
			<div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12 bottomMarginMobile">
				<div class="boxed-content">
					<?php include 'includes/content-inline.php'; ?>
				</div>
			</div>
			
			<?php else : ?>
			<div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12 bottomMarginMobile">
				<?php include 'includes/content-inline.php'; ?>
			</div>
			<?php endif;
			
			else :
			
			if ( $boxedcontent ): ?>
			<div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12 bottomMarginMobile">
				<div class="boxed-content">
					<?php include 'includes/content-stacked.php'; ?>
				</div>
			</div>
			
			<?php else : ?>
			<div class="col col-lg-6 col-md-6 col-sm-6 col-xs-12 bottomMarginMobile">
				<?php include 'includes/content-stacked.php'; ?>
			</div>
			<?php endif;
			
			endif;
			
			endwhile; ?>
			
		</div>
		
		<?php endif; ?>
		
	</div>
</div>

<?php 
elseif ( $columns == 'three' ):

if ( $blockanchor && $bgcolor == 'lightblue' && $textcolor == 'light' ): ?>
<div id="<?php echo $blockanchor ?>" class="section light_blue_bg light">
<?php elseif ( $blockanchor && $bgcolor == 'lightblue' ): ?>
<div id="<?php echo $blockanchor ?>" class="section light_blue_bg">
<?php elseif ( $blockanchor && $bgcolor == 'lightgrey' && $textcolor == 'light' ): ?>
<div id="<?php echo $blockanchor ?>" class="section light_grey_bg light">
<?php elseif ( $blockanchor && $bgcolor == 'lightgrey' ): ?>
<div id="<?php echo $blockanchor ?>" class="section light_grey_bg">
<?php elseif ( $bgcolor == 'lightblue' && $textcolor == 'light' ): ?>
<div class="section light_blue_bg light">
<?php elseif ( $bgcolor == 'lightblue' ): ?>
<div class="section light_blue_bg">
<?php elseif ( $bgcolor == 'lightgrey' && $textcolor == 'light' ): ?>
<div class="section light_grey_bg light">
<?php elseif ( $bgcolor == 'lightgrey' ): ?>
<div class="section light_grey_bg">
<?php elseif ( $blockanchor ): ?>
<div id="<?php echo $blockanchor ?>" class="section">
<?php else : ?>
<div class="section">
<?php endif; ?>
	<div class="inner no-top-bottom-padding">
		
		<?php if ( $rowheading && $centeredtext ) {
			echo '<h1 class="text-align-center bottom-margin">' . $rowheading . '</h1>';
		} elseif ( $rowheading ) {
			echo '<h1>' . $rowheading . '</h1>';
		} 
		
		if( have_rows('columns_grid') ):
		
		if ( $centeredtext ): ?>
		<div class="row gutter-space-1 center-lg center-md center-sm center-xs icons-visible">
		<?php else : ?>
		<div class="row gutter-space-1">
		<?php endif; ?>
			
			<?php while( have_rows('columns_grid') ): the_row();
			
			$inlinelinks = get_sub_field('inline_links');
			if ( $inlinelinks ):
			
			if ( $boxedcontent ): ?>
			<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12 bottomMarginMobile">
				<div class="boxed-content">
					<?php include 'includes/content-inline.php'; ?>
				</div>
			</div>
			
			<?php else : ?>
			<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12 bottomMarginMobile">
				<?php include 'includes/content-inline.php'; ?>
			</div>
			<?php endif;
			
			else :
			
			if ( $boxedcontent ): ?>
			<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12 bottomMarginMobile">
				<div class="boxed-content">
					<?php include 'includes/content-stacked.php'; ?>
				</div>
			</div>
			
			<?php else : ?>
			<div class="col col-lg-4 col-md-4 col-sm-6 col-xs-12 bottomMarginMobile">
				<?php include 'includes/content-stacked.php'; ?>
			</div>
			<?php endif;
			
			endif;
			
			endwhile; ?>
			
		</div>
		
		<?php endif; ?>
		
	</div>
</div>

<?php 
elseif ( $columns == 'four' ):

if ( $blockanchor && $bgcolor == 'lightblue' && $textcolor == 'light' ): ?>
<div id="<?php echo $blockanchor ?>" class="section light_blue_bg light">
<?php elseif ( $blockanchor && $bgcolor == 'lightblue' ): ?>
<div id="<?php echo $blockanchor ?>" class="section light_blue_bg">
<?php elseif ( $blockanchor && $bgcolor == 'lightgrey' && $textcolor == 'light' ): ?>
<div id="<?php echo $blockanchor ?>" class="section light_grey_bg light">
<?php elseif ( $blockanchor && $bgcolor == 'lightgrey' ): ?>
<div id="<?php echo $blockanchor ?>" class="section light_grey_bg">
<?php elseif ( $bgcolor == 'lightblue' && $textcolor == 'light' ): ?>
<div class="section light_blue_bg light">
<?php elseif ( $bgcolor == 'lightblue' ): ?>
<div class="section light_blue_bg">
<?php elseif ( $bgcolor == 'lightgrey' && $textcolor == 'light' ): ?>
<div class="section light_grey_bg light">
<?php elseif ( $bgcolor == 'lightgrey' ): ?>
<div class="section light_grey_bg">
<?php elseif ( $blockanchor ): ?>
<div id="<?php echo $blockanchor ?>" class="section">
<?php else : ?>
<div class="section">
<?php endif; ?>
	<div class="inner no-top-bottom-padding">
		
		<?php if ( $rowheading && $centeredtext ) {
			echo '<h1 class="text-align-center bottom-margin">' . $rowheading . '</h1>';
		} elseif ( $rowheading ) {
			echo '<h1>' . $rowheading . '</h1>';
		}
		
		if( have_rows('columns_grid') ):
		
		if ( $centeredtext ): ?>
		<div class="row gutter-space-1 center-lg center-md center-sm center-xs icons-visible">
		<?php else : ?>
		<div class="row gutter-space-1">
		<?php endif; ?>
			
			<?php while( have_rows('columns_grid') ): the_row();
			
			$inlinelinks = get_sub_field('inline_links');
			if ( $inlinelinks ):
			
			if ( $boxedcontent ): ?>
			<div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12 bottomMarginMobile">
				<div class="boxed-content">
					<?php include 'includes/content-inline.php'; ?>
				</div>
			</div>
			
			<?php else : ?>
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 bottomMarginMobile">
				<?php include 'includes/content-inline.php'; ?>
			</div>
			<?php endif;
			
			else : 
			
			if ( $boxedcontent ): ?>
			<div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12 bottomMarginMobile">
				<div class="boxed-content">
					<?php include 'includes/content-stacked.php'; ?>
				</div>
			</div>
			
			<?php else : ?>
			<div class="col col-lg-3 col-md-3 col-sm-6 col-xs-12 bottomMarginMobile">
				<?php include 'includes/content-stacked.php'; ?>
			</div>
			<?php endif;
			
			endif;
			
			endwhile; ?>
			
		</div>
		
		<?php endif; ?>
		
	</div>
</div>

<?php endif; ?>