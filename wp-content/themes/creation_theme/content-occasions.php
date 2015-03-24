<p><strong>content-category-occasions</strong></p>
	<?php while (have_posts()) : the_post(); ?>
		<article class="post">

            <h3 class="post-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
        
             <p class="post-info">
                Posté le <?php the_date(); ?> dans <?php the_category(); ?> par <?php the_author(); ?>
             </p>
            
            <!-- ACF -->
            <figure>
                <img src="<?php the_field('photo'); ?>" />
                <figcaption><?php the_title ?></figcaption>
            </figure>
            
        <div class="entry-content">
            <?php the_content(); ?>
        </div><!-- .entry-content -->
        
            <!-- ACF -->
            <p>Description :<?php the_field('description'); ?></p>
            <p>Prix :<?php the_field('prix'); ?></p>
            
		</article>
	<?php endwhile; ?>

