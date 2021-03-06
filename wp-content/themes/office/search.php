<?php get_header(); ?>

	<div id="subhead_container">
		
		<div class="row">

		<div class="large-12 columns">
		
		<h1><?php printf( __( 'Search Results for: %s', 'office' ), '' . get_search_query() . '' ); ?></h1>
			
			</div>	
			
	</div></div>

		<!--content-->
		<div class="row" id="content_container">
			
			<!--left col--><div class="large-8 columns">
		
				<div id="left-col">
		
			<?php if ( have_posts() ) : ?>
				
				<?php get_template_part( 'loop', 'search' ); ?>
<?php else : ?>

					<div class="post-head-notfound">
					
						<h1><?php _e( 'Nothing Found', 'office' ); ?></h1>
					
					</div><!--head end-->
					
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'office' ); ?></p>
							<div id="search-header"><?php get_search_form(); ?></div><!--search header end-->
					
<?php endif; ?>
	</div> <!--left-col end-->
</div> <!--column end-->

<?php get_sidebar(); ?>

</div>
<!--content end-->
		

<?php get_footer(); ?>
