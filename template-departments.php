<?php
/**
 * Template Name: Departments Template
 */
?>
<section class="departments ">

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

<div class="container">
<hr>
	<div class="col-md-4"><a href="<?php the_field('lightbox_one_link'); ?>"><img src="<?php the_field('lightbox_one'); ?>" alt="<?php the_field('light_box_image_description'); ?>" data-title="<?php the_field('lightbox_image_caption'); ?>" data-lightbox="image-1"></a></div>
	<div class="col-md-4"><img src="" alt=""></div>
	<div class="col-md-4"><img src="" alt=""></div>
	<div class="col-md-4"><img src="" alt=""></div>
	</div>
</section>
