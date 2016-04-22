<footer class="content-info" role="contentinfo">
  <div class="container">
	  <div class="logo-full">
		  <img class="img-responsive" src="<?= get_bloginfo('template_directory')?>/dist/images/sm-logo-full.png" alt="Simmons Market Logo">
	  </div>

	  <hr>
	  <div class="sidebar-footer">
    <?php dynamic_sidebar('sidebar-footer'); ?>
	  </div>
  </div>
	<hr>
  <div class="container">
	<p class="footer-info">&copy; <?= date("Y") ?> Simmons Market | 78 Crandall Rd, Little Compton, RI 02837 | 401-635-2420
	</p>
	<div class="row social-logos">
		<div class="col-xs-6"><a href="https://www.facebook.com/pages/Simmons-Cafe-and-Market/281464542005054" target="blank"><img class="img-responsive" src="<?= get_bloginfo('template_directory')?>/dist/images/facebook-logo.png" alt="facebook logo"></a></div>
		<div class="col-xs-6"><a href="https://instagram.com/simmonscafemarket" target="blank" ><img class="img-responsive" src="<?= get_bloginfo('template_directory')?>/dist/images/insta-logo.png" alt="instagram logo" alt=""></a></div>
	</div>

	</div>
</footer>
