<?php 
/* 
Template Name: Contact Us
*/
?>
 <?php get_header();?>
 <head>
    <title>contact Us</title>
</head>
<main class="container">
   <article id="contact">
     <h2 class="major">Contact</h2>
     <br>
     <br>
    <form method="post" action="#">
        <div class="fields">
            <div class="field half">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" />
            </div>
            <div class="field half">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" />
            </div>
            <div class="field">
                <label for="message">Message</label>
                <textarea name="message" id="message" rows="4"></textarea>
            </div>
        </div>
        <br>
        <ul class="actions">
            <li><input type="submit" value="Send Message" class="primary" /></li>
        </ul>
        <hr>
    </form>
    <div class="d-grid gap-2 col-3 mx-auto"></div>
 </article>

<div id="footer">
<?php get_footer();?>
</div>
</main>