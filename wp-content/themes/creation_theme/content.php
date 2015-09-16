<p>test1</p>
<?php while (have_posts()) : the_post(); ?>
		<article class="post" id="post-<?php the_ID(); ?>">
        
			<?php if ( has_post_thumbnail() ) : ?> <!-- Existence d'une image à la une ? -->
					<?php the_post_thumbnail('medium'); ?>
        	<?php endif; ?>
            
            <h3 class="post-title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
        
             <p class="post-info">
                Posté le <?php the_date(); ?> dans <?php the_category(); ?> par <?php the_author(); ?>
             </p>
            
        <div class="entry-content">
            <?php the_content(); ?>
        </div><!-- .entry-content -->
        
            
		</article>
<?php endwhile; ?>