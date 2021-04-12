<?php get_header();?>

<main class="container">
<?php get_template_part('includes/section','content');?>
</main>
<div class="boton">
<?php previous_posts_link();?>
<?php next_posts_link();?>
</div>




<?php get_footer();?>