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
    	<?php if ( has_post_thumbnail() ): ?>
        <div class="entry-thumbnail">
        	<?php the_post_thumbnail(); ?>
        </div>
        <?php else : ?>
        	<div class="entry-thumbnail"><img src="<?php get_template_directory_uri() ?>/images/oiseau_noir.png" />
            </div>
        <?php endif; ?>
        
    	<?php if (is_single() ) : ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>	
        <?php else : ?>
        <h1 class="entry-title">
        	<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
        <?php endif; // is single() ?>
        
        <div class="entry-meta">
        	<?php twentythirteen_entry_meta(); ?>
            <?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '<span>' ); ?>
        </div><!-- .entry-meta -->	
	</header><!-- .entry-header -->
    
    <?php if (is_search() ) : ?>
    <div class="entry-summary">
    	<?php the_excerpt(); ?>
    </div><!-- .entry-summary -->
    <?php else : ?>
	<div class="entry-content">
    	<?php the_content(); ?>
        <a href="<?php the_permalink(); ?>">Lire la suite</a>
    	<!-- ACF -->
        <p>Description :<?php the_field('description'); ?></p>
        <figure>
        	<img src="<?php the_field('photo'); ?>">
            <figcaption><?php the_title ?></figcaption>
        </figure>
        <p>Prix :<?php the_field('prix'); ?></p>
        
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>
</article><!-- #post -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
