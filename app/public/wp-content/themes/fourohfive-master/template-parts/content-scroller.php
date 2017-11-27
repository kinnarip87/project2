<div class="image_wrapper">
<?php
	the_post_thumbnail('full', ['class' => 'img-fluid']);
?>
<h1 class="image_description">
	<?php the_field('featured_text'); ?>
</h1>
</div>


 <?php //the_title( '<h1>', '</h1>' ); ?> 


<div class="person">
	<img class="rounded" src="<?php the_field ('image');?>" alt="image">

	<div class="pl-5">
		<h2 class="person-title yellow"> 
			<?php the_field('title'); ?> 
		</h2>

		<p class="person-description gray"> 
			<?php the_field('description'); ?>
		</p>
	</div>
</div>

<!-- This is the start of our work section -->
<div class="work">
<h1 class="work-title yellow">
	Our Work
</h1>
<div class="work-images flex-lg-wrap">
<?php

		// check if the repeater field has rows of data
		if( have_rows('work') ):

		 	// loop through the rows of data
		    while ( have_rows('work') ) : the_row(); ?>
			
			<div class="text-center pl-6 pb-5">
				<img class="rounded" src="<?php the_sub_field ('work_image');?>" alt="">
		        
		        <h2 class="work-description gray" >
		        <?php the_sub_field('work_title'); ?>
		        </h2>

		        <a href="<?php the_sub_field('work_link'); ?>" target="blank">Click to see more!</a>
			</div>
		<?php    endwhile;

		else :

		    // no rows found

		endif;

		?>
	</div>
</div>

<!-- This is the start of the service post -->
<div class="services">
<h1 class="service-title yellow">
	Our Services
</h1>
<div class="service-images my">
<?php

		// check if the repeater field has rows of data
		if( have_rows('services') ):

		 	// loop through the rows of data
		    while ( have_rows('services') ) : the_row(); 

		?>
		<div class="service text-center">
			<img class="img-fluid images rounded" src="<?php the_sub_field ('service_image');?>" alt="image">

			<h2 class="service-description text-center">
		       	<?php the_sub_field('service_title'); ?>
		     </h2>

		   </div>

		<?php endwhile;

		else :

		    // no rows found

		endif;

		?>
	</div>
</div>

<div class="form">
	<?php the_content(); ?>
</div>