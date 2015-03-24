<?php get_header(); ?>

<p><strong>page index.php</strong></p>

<?php if( have_posts() ) : ?>

    <?php get_template_part('content'); ?>

<?php else : ?>

	<p class="nothing">
    	Y a rien ici !
  </p>

<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>