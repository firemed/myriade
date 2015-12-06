<?php
	get_header();
	the_post();
	
	/**
	 * Check for active sidebar, and also check disable sidebar meta
	 */
	$sidebar_active = is_active_sidebar('primary');
	if( 'on' == esc_html(get_post_meta( $post->ID, '_ebor_disable_sidebar', true )) )
		$sidebar_active = false;
	
	/**
	 * Build appropriate classes depending on sidebar
	 */	
	$class = ($sidebar_active) ? 'col-sm-8' : 'col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12';
	
	echo ebor_page_title( get_option('blog_title') );
?>
  
<div id="post-<?php the_ID(); ?>" class="container inner">
	<div class="row">
	
		<div class="<?php echo esc_attr($class); ?> content">
		
			<div class="blog-posts classic-blog single">
				<div <?php post_class(); ?>>
					
					<?php 
						get_template_part('inc/content','meta');
						the_title('<h1 class="post-title">', '</h1>'); 
					?>
					<div class="post-content">

                        <?php
                        $data = get_post();
                        $url = wp_get_attachment_url( get_post_thumbnail_id($data->ID) , 'large');
                        #print_r($url);
                        #print_r($data);exit();
                        ?>
                        <p>
                                <img class="alignnone size-medium " src="<?php echo $url ; ?>" alt="" width="300" height="225">
                            <?php echo $data->post_title; ?></p>

						<?php
							#the_content();
							wp_link_pages();
							the_tags('<div class="meta tags">',', ','</div>');
							
//							if( '1' == get_option('blog_social','1') )
//								get_template_part('inc/content','sharing');
						?>
					</div>
					
				</div>
			</div>
			
			<?php 
				if( get_option('blog_author','1') == 1 )
					get_template_part('inc/content','author'); 
				
				if( comments_open() )
					comments_template();
			?>
		
		</div>
		
		<?php 
			if( $sidebar_active )
				get_sidebar(); 
		?>
	
	</div>
</div>

<?php get_footer();