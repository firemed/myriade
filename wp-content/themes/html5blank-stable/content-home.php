<h1>content-home.php</h1>
<?php query_posts('pagename=presentation'); ?>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>    
	<?php the_post_thumbnail(); ?>
  <?php the_excerpt(); ?>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
<?php query_posts('category_name=occasions&showposts=5'); ?>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?> 

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class("left"); ?>>
  	<!-- post title -->
    <h2>
      	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
    </h2>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
      <img src="<?php the_field('photo'); ?>" width="200" alt="">
    </a>
    <?php the_field('prix'); ?>
    <?php the_field('description'); ?>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>