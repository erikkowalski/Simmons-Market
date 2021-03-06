<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
			  <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><?php // bloginfo('name'); ?> <img class="img-responsive hidden-sm hidden-md hidden-lg" src="<?php bloginfo('template_directory'); ?>/dist/images/sm-logo.png"><img class="img-responsive logo-full visible-sm visible-md visible-lg" src="<?php bloginfo('template_directory'); ?>/dist/images/sm-logo-full.png"></a>
        </div>

        <nav class="collapse navbar-collapse navbar-right" role="navigation">
            <?php
if (has_nav_menu('primary_navigation')) :
wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav']);
endif;
            ?>
        </nav>
    </div>
</header>
