<?php get_header(); ?>

<?php if(have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
	   <article class="post">
			 <p class="meta">
	
			 <h3><?php the_title(); ?></h3>
	            <p><?php the_content(); ?></p>

			 </p>

			 <hr />

			<?php if(has_post_thumbnail()) : ?>
		       
            <?php
               if (wp_is_mobile()){
                echo get_the_post_thumbnail($id,'medium-something',$attr); 
               } else {
               echo get_the_post_thumbnail($id,'Large',$attr); 
               }

               ?>
             
            
                
		</div>
    <?php endif; ?>

			 <div class="w3-row">
				 <div class="w3-col l2">
					 <br />
					
				</div>	
				<div class="w3-col l10">
				
			    </div>

		    </div>
		 </div>
		</article>
	<?php endwhile; ?>

<?php else : ?>
    <?php echo wpautop('Sorry, ther are no posts'); ?>	
<?php endif; ?> 		


<?php get_footer(); ?>