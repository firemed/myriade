<?php
	get_header();
	the_post();
	echo ebor_page_title( get_the_title() );
	
	$class = ( function_exists('ebor_is_woocommerce') && ebor_is_woocommerce() ) ? 'woocommerce-post-content' : 'post-content';
?>

	<div class="breadcrumb">
		<div class="container">
			<?php
			if(function_exists('bcn_display'))
			{
				bcn_display();
			}
			?>
		</div>
	</div>

	<div id="page-<?php the_ID(); ?>" class="container inner <?php echo $class; ?>">

		<?php
			the_content();
			wp_link_pages();
		?>
	</div>

<?php get_footer();