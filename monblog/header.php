<!DOCTYPE HTML>
<html>
	<head>
	
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
      
		  <?php wp_head();?>
	</head>
    <body>    
<main class="container">         
 <header>
  
    <?php 
    wp_nav_menu(
        array(
            'theme_location' => 'top-menu',
            'menu_class' => 'top-bar',
        )
    );
    ?>

</header>
</main>
