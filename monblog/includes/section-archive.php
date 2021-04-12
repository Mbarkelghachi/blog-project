<?php if(have_posts() ) : while( have_posts() ): the_post();?>

  
       
        <?php the_excerpt();?>
        
        


<?php endwhile; else:endif;?>
