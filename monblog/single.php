<?php get_header();?>
<session class="page-wrap">
<div class="container">
   <?php if(has_post_thumbnail()):?>
   <img src="<?php the_post_thumbnail_url('blog-large');?>" class="img-fluid">
   <?php endif;?>


<h1><?php the_title();?></h1>



<?php get_template_part('includes/section','article');?>


</div>
</section>


<?php get_footer();?>