<?php
	the_post_thumbnail('full', ['class' => 'img-fluid']);
?>

 <?php //the_title( '<h1>', '</h1>' ); ?>

<!-- This is the start of the gallery -->
 <img src="<?php the_field ('image');?>" alt="image">
<!-- This is the end of the gallery -->

<?php the_content(); ?>