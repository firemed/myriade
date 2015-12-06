<?php 
	global $more;
	$more = 0;
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
	<?php 
		get_template_part('inc/content','meta');
		the_title('<h2 class="post-title"><a href="'. get_permalink() .'">', '</a></h2>');
    $data = get_post();
    $url = wp_get_attachment_url( get_post_thumbnail_id($data->ID) , 'medium');
	?>
	<div class="post-content">
		<?php 
			if( 'page' == get_post_type() ){
//				the_excerpt();
                ?>
                <p><a href="<?php echo $data->guid ; ?>">
                        <img class="alignnone size-medium " src="<?php echo $url ; ?>" alt="" width="300" height="225"></a>
                    <?php echo $data->post_title; ?></p>
        <?php
               # the_content();
			} else {
				the_content();
			} 
		?>
	</div>
</div>