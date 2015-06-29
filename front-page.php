<section class="home-top">
	<!-- Carousel
	================================================== -->
	<div id="myCarousel" class="carousel fade" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>

		</ol>
		<div class="carousel-inner" role="listbox">

			<div class="item active">
				<img  src="<?php the_field('slider_image_one'); ?>" alt="First slide">
			</div>


			<div class="item">
				<img  src="<?php  the_field('slider_image_two'); ?>" alt="Second slide">
			</div>

			<div class="item">
				<img  src="<?php  the_field('slider_image_three'); ?>" alt="Second slide">
			</div>


		</div>

		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div><!-- /.carousel -->

	<aside class="hero-quote">

		<h1><em><?php the_field('hero_quote');?></em></h1>

		<img class="img-responsive"  src="<?php the_field('divider'); ?>" alt="divider line">

		<h2><b><?php the_field('call_ahead');?></b></h2>

		<h2><?php the_field('phone_number');?></h2>

		<h2><b><?php the_field('open');?></b></h2>

		<h2><b><?php the_field('hours');?></b></h2>

	</aside>
</section>

<section class="home-promos ">

		<div class="promo col-sm-6 col-md-6 col-lg-3">
			<a href="<?php the_field('ice_cream_link'); ?>">	<img class="img-responsive"  src="<?php the_field('ice_cream'); ?>" alt="ice-cream"></a>
		</div>

		<div class="promo col-sm-6 col-md-6 col-lg-3">
			<a href="<?php the_field('gift_link'); ?>"><img class="img-responsive"  src="<?php the_field('gifts'); ?>" alt="gifts"></a>
		</div>

		<div class="promo col-sm-6 col-md-6 col-lg-3">
			<a href="<?php the_field('market_link'); ?>"><img class="img-responsive"  src="<?php the_field('market'); ?>" alt="market"></a>
		</div>

		<div class="promo col-sm-6 col-md-6 col-lg-3">
			<a href="<?php the_field('cafe_link'); ?>"><img class="img-responsive"  src="<?php the_field('cafe'); ?>" alt="cafe"></a>
			</div>
</section>

<!-- the loop -->

<?php if (!have_posts()) : ?>
<div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
</div>
<?php get_search_form(); ?>
<?php endif; ?>

<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>

<section class="photo-grid">
    <div class="col-sx-2 "></div>
</section>
