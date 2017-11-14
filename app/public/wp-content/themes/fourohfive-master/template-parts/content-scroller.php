<div class="image_wrapper">
<?php
	the_post_thumbnail('full', ['class' => 'img-fluid']);
?>
<h1 class="image_description">
	<?php the_field('featured_text'); ?>
</h1>
</div>


 <?php //the_title( '<h1>', '</h1>' ); ?> 



<h2> 
	<?php the_field('title'); ?> 
</h2>

<p> 
	<?php the_field('description'); ?>
</p>

<img src="<?php the_field ('image');?>" alt="image">

<!-- This is the start of our work section -->

<?php

		// check if the repeater field has rows of data
		if( have_rows('work') ):

		 	// loop through the rows of data
		    while ( have_rows('work') ) : the_row(); ?>

				<img src="<?php the_sub_field ('work_image');?>" alt="">
		        
		        <h2>
		        <?php the_sub_field('work_title'); ?>
		        </h2>

		        <a href="<?php the_sub_field('work_link'); ?>">Read this!</a>

		<?php    endwhile;

		else :

		    // no rows found

		endif;

		?>


<!-- This is the start of the service post -->
<?php

		// check if the repeater field has rows of data
		if( have_rows('services') ):

		 	// loop through the rows of data
		    while ( have_rows('services') ) : the_row(); 

		?>
			<img src="<?php the_sub_field ('service_image');?>" alt="image">

			<h2>
		       	<?php the_sub_field('service_title'); ?>
		     </h2>

		    

		<?php endwhile;

		else :

		    // no rows found

		endif;

		?>



<?php the_content(); ?>
