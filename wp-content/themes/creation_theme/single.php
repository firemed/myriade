<?php get_header('single'); ?>
<section class="main">
	<?php if (have_posts()) : ?>
	
    	<?php while (have_posts()) : the_post(); ?>
		
        	<article id="post-<?php the_ID; ?>" <?php post_class('single'); ?>
            
            	<?php if(!in_category('occasions')) : ?>
			
									<?php if (has_post_thumbnail()) : ?>
                    
                  		<?php the_post_thumbnail('original'); ?>
                    
                  <?php else : ?>
				
                			<img src="http://sd-67292.dedibox.fr/~mehdi_a/wordpress/wp-content/uploads/2015/02/parapente-slide3.jpg">
                    
                	<?php endif; ?>
                    
                <?php endif; ?>
                
                <h1 class="post-title"><?php the_title(); ?></h1>
                
                <p class="post-info">
                	Posté le <?php the_date(); ?> dans <?php the_category(); ?> par <?php the_author(); ?>
                </p>
                
                <?php if(in_category('occasions')) : ?>
                	<!-- ACF -->
            		<figure>
                		<img src="<?php the_field('photo'); ?>" />
                		<figcaption><?php the_title ?></figcaption>
            		</figure>
                <?php endif; ?>
                
                <div class="post-content">
                	<?php the_content(); ?>
                </div>
                
                <?php if(in_category('occasions')) : ?>
                	<!-- ACF -->
            		<p>Description :<?php the_field('description'); ?></p>
            		<p>Prix :<?php the_field('prix'); ?></p>
                <?php endif; ?>
                
                <div class="post-comments">
                	<?php comments_template(); ?>
                </div>
              
             </article>
             
          <?php endwhile; ?>
		  
      <?php endif; ?>

</section>

<?php get_footer(); ?>