<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8&appId=1738448626406934";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->

<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
    </div>
    <div class="collapse navbar-collapse" id="navbar">
      <?php
            wp_nav_menu( array(
                'theme_location'    => 'navbar-left',
                'depth'             => 2,
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>

      <ul class="social-header">
        <li><a href="https://www.facebook.com/doconsultingcolombia/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="https://twitter.com/DoConsulting1" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li><a href="https://www.youtube.com/channel/UCB-fHFZGJMv-nD5UvS7GPRg" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
        <li><a href="https://www.flickr.com/photos/doconsultingco/" target="_blank"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>
      </ul>

        <i class="fa fa-search" aria-hidden="true"></i>
        <div class="tog-search">
          <?php get_template_part('includes/navbar-search'); ?>
        </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>
