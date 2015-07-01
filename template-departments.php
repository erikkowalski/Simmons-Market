<?php
/**
 * Template Name: Departments Template
 */
?>
<section class="departments clearfix">

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'header'); ?>
<div class="dashes"></div>
<div class="container">

		<div class="hidden-xs col-sm-4">
			<img class="dept-header-img img-responsive" src="<?php the_field('header_image'); ?>" alt="">
		</div>
		<div class=" col-sm-8">
			<?php get_template_part('templates/content', 'page'); ?>
		</div>
</div>
<?php endwhile; ?>

<div class="container ">
<hr>
	<div class="col-md-3"><a href="<?php the_field('lightbox_one_link'); ?>" data-lightbox="image-1" data-title="<?php the_field('lightbox_image_caption'); ?>"><img class="img-responsive" src="<?php the_field('lightbox_one'); ?>" alt="<?php the_field('light_box_image_description'); ?>"  ></a></div>
	<div class="col-md-3"><a href="<?php the_field('lightbox_image_two_link'); ?>" data-lightbox="image-2" data-title="<?php the_field('lightbox_image_two_caption'); ?>"><img class="img-responsive" src="<?php the_field('lightbox_two'); ?>" alt="<?php the_field('light_box_image_two_description'); ?>" ></a></div>
	<div class="col-md-3"><a href="<?php the_field('lightbox_image_three_link'); ?>" data-lightbox="image-2" data-title="<?php the_field('lightbox_image_three_caption'); ?>"><img class="img-responsive" src="<?php the_field('lightbox_three'); ?>" alt="<?php the_field('light_box_image_three_description'); ?>" ></a></div>
	<div class="col-md-3"><a href="<?php the_field('lightbox_image_four_link'); ?>" data-lightbox="image-2" data-title="<?php the_field('lightbox_image_four_caption'); ?>"><img class="img-responsive" src="<?php the_field('lightbox_four'); ?>" alt="<?php the_field('light_box_image_four_description'); ?>" ></a></div>


	</div>
</section>
