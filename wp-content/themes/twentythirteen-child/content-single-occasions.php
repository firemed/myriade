<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
    	
		<h1 class="entry-title"><?php the_title(); ?></h1>
    
    <p>Prix: <?php the_field('prix'); ?></p>
    
	</header><!-- .entry-header -->
  
  <figure>
    	<img src="<?php the_field('photo'); ?>" />
  </figure>
  
  <p>Description :<?php the_field('description'); ?></p>
    
</article><!-- #post -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
