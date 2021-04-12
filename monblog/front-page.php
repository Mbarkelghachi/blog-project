<?php 
/* 
Template Name: home
*/
?>

<?php get_header();?>
<head>
    <title>Home </title>
</head>
<main class="container">



<?php get_template_part('includes/section','content');?>

<!--banner-->
<section id="banner">
            <header>
                <h2>UX designers help companies understand their customers</h2>
                <p>
                    UX Designers are in high demand. In this program, students will learn how to develop many of the hard and soft skills they’ll need to make it in the fast-paced world of service and product design.
                </p>
            </header>
        </section>
        <hr>

        <!--caroousel-->
        <section class="carousel">
            <div class="reel">
                <article>
                    <a href="#" class="image featured"><img src="images/img1.jpg" alt="" /></a>
                    <header>
                        <h3><a href="post1.html">What is UX Strategy ?</a></h3>
                    </header>
                    <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
                </article>

                <article>
                    <a href="#" class="image featured"><img src="<?php bloginfo('template_url' )?> images/img1.jpg" alt="#" /></a>
                    <header>
                        <h3><a href="#">What is UX Strategy ?</a></h3>
                    </header>
                    <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
                </article>

                <article>
                    <a href="#" class="image featured"><img src="images/img3.jpg" alt="" /></a>
                    <header>
                        <h3><a href="post1.html">What is UX Strategy ?</a></h3>
                    </header>
                    <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
                </article>
            

                <article>
                    <a href="#" class="image featured"><img src="images/img4.jpg" alt="" /></a>
                    <header>
                        <h3><a href="post1.html">What is UX Strategy ?</a></h3>
                    </header>
                    <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
                </article>

                <article>
                    <a href="#" class="image featured"><img src="images/img5.jpg" alt="" /></a>
                    <header>
                        <h3><a href="post1.html">What is UX Strategy ?</a></h3>
                    </header>
                    <p>Commodo id natoque malesuada sollicitudin elit suscipit magna.</p>
                </article>

            </div>
        </section>
        <hr>

<?php get_footer();?>


</main>