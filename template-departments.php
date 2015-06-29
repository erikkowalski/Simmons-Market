<?php
/**
 * Template Name: Departments Template
 */
?>
<section class="departments ">

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'header'); ?>
<div class="container">
	<div class="row">
		<div class="col-xs-4 col-md-4">
			<img class="img-responsive" src="<?php the_field('header_image'); ?>" alt="">
		</div>
		<div class="col-xs-8 col-md-8">
			<?php get_template_part('templates/content', 'page'); ?>
		</div>
	</div>
</div>
<?php endwhile; ?>
</section>
