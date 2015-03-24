<?php get_header(); ?>

<p><strong>Page category.php</strong></p>

<?php if (have_posts()) : ?>
	<h1><?php single_cat_title(); ?></h1>
    
    <?php $catDesc = category_description(); ?> <!-- On teste si il existe une description de la catégorie -->
    <?php if ($catDesc != null) : ?> <!-- Si il existe une description, continuer -->
    	<p><?php echo $catDesk; ?></p>
    <?php endif; ?>

		<?php if (is_category('occasions')) : ?>
			<?php get_template_part('content', 'occasions'); ?>
		
		<?php else : ?>
			<?php get_template_part('content'); ?>
		<?php endif; ?>
	
<?php else : ?>
	<p class="nothing">
    	Rien à voir ici !
   	</p>
<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>