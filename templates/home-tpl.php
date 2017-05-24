<?php
  /*
    Template Name: Home
  */
	get_template_part('includes/header'); ?>


	<!--Slider home-->
	<?php get_template_part('includes/loops/slides');?>

	<div class="featured-news">
		<div class="container">
			<div class="featured col-md-6">
				<?php get_template_part('includes/loops/last-post');?>
			</div>
			<div class="feed-news col-md-6">
				<?php get_template_part('includes/loops/last-posts');?>
			</div>
		</div>
	</div>

	<div class="top-networks">
		<div class="container">
			<div class="col-md-8 yt">
				<span class="circle-icon"> <i class="fa fa-youtube-play" aria-hidden="true"></i> </span>
				<?php echo types_render_field('iframe-youtube');?>
			</div>
			<div class="col-md-4 fb">
				<span class="circle-icon"> <i class="fa fa-facebook" aria-hidden="true"></i> </span>
				<div class="fb-page" data-href="https://www.facebook.com/doconsultingcolombia/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/doconsultingcolombia/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/doconsultingcolombia/">Do Consulting</a></blockquote></div>
			</div>
		</div>
	</div>

	<div class="bottom-networks">
		<div class="container">
			
			<div class="col-md-4 tw">
				<span class="circle-icon"><i class="fa fa-twitter" aria-hidden="true"></i></span>
				<a class="twitter-timeline" data-height="400" href="https://twitter.com/DoConsulting1">Tweets de DoConsulting1</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>

			<div class="col-md-8 fl">
				<span class="circle-icon"><i class="fa fa-flickr" aria-hidden="true"></i></span>
				<?php echo types_render_field('iframe-flickr');?>

			</div>
		</div>
	</div>

	<div class="home-services">
		<div class="container no-gutter">
			<header class="def-header">
				<h3>Que Hacemos</h3>
			</header>
			<?php get_template_part('includes/loops/services-home');?>
		</div>
	</div>


<?php get_template_part('includes/footer'); ?>