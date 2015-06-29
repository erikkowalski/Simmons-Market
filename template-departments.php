<?php
/**
 * Template Name: Departments Template
 */
?>
<section class="deparments"></section>
<div class="header-img">
	<img class="img-responsive" src="<?php the_field('header_image') ?>" alt="">
</div>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
container
