<?php
//	get_header();
//	echo ebor_page_title( get_option('blog_title','Our Journal2') );
//	get_template_part('loop/loop-blog', get_option('blog_layout', 'classic'));
//	get_footer(); ?>

<?php get_header(); ?>
<?php get_template_part ( 'content', 'home' ); ?>
<?php get_footer(); ?>