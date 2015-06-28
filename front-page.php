<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>

	</ol>
	<div class="carousel-inner" role="listbox">

		<div class="item active">
			<img  src="<?php the_field('slider_image_one'); ?>" alt="First slide">
			<div class="first container">
				<div class="carousel-caption">
					<h1> <?php the_field('slide_one_headline'); ?></h1>
					<h2> <?php the_field('slide_one_subhead_one'); ?></h2>
					<hr/>
					<h3> <?php the_field('slide_one_subhead_two'); ?></h3>
					<p><a class="btn btn-lg btn-primary" href="our-menu/lunch-menu/" role="button">View Menu</a></p>
				</div>
			</div>
		</div>


		<div class="item">
			<img  src="<?php  the_field('slider_image_two'); ?>" alt="Second slide">
			<div class="menu container">
				<div class="carousel-caption">
					<h1> <?php  the_field('slide_two_headline'); ?></h1>
					<p><a class="btn btn-lg btn-primary" href="our-menu/lunch-menu/" role="button">View Menu</a></p>
				</div>
			</div>
		</div>

		<div class="item">
			<img  src="<?php  the_field('slider_image_three'); ?>" alt="Second slide">
			<div class="menu container">
				<div class="carousel-caption">
					<h1> <?php  the_field('slide_three_headline'); ?></h1>
					<p><a class="btn btn-lg btn-primary" href="our-menu/lunch-menu/" role="button">View Menu</a></p>
				</div>
			</div>
		</div>

		<div class="item">
			<img  src="<?php  the_field('slider_image_four'); ?>" alt="Second slide">
			<div class="menu container">
				<div class="carousel-caption">
					<h1> <?php  the_field('slide_four_headline'); ?></h1>
					<p><a class="btn btn-lg btn-primary" href="our-menu/lunch-menu/" role="button">View Menu</a></p>
				</div>
			</div>
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

<img class="img-responsive" src="<?php  the_field('home_img') ?>" alt="">

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
