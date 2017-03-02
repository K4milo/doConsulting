<?php
  /*
    Template Name: Home
  */
	get_template_part('includes/header'); ?>


	<!--Slider home-->
	<?php get_template_part('includes/loops/slides');?>

	<div class="container featured-news">
		<div class="featured col-md-6">
			<?php get_template_part('includes/loops/last-post');?>
		</div>
		<div class="feed-news col-md-6">
			<header class="feed-head">
				<h3>Noticias</h3>
			</header>
			<?php get_template_part('includes/loops/last-posts');?>
		</div>
	</div>

	<div class="container bottom-news">
		<?php get_template_part('includes/loops/last-three-posts');?>
	</div>

	<div class="bottom-networks">
		<div class="container">
			<div class="col-md-4 fb">
				<div class="fb-page" data-href="https://www.facebook.com/doconsultingcolombia/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/doconsultingcolombia/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/doconsultingcolombia/">Do Consulting</a></blockquote></div>
			</div>
			<div class="col-md-4 tw">
				<a class="twitter-timeline" data-height="400" href="https://twitter.com/DoConsulting1" data-tweet-limit="1">Tweets by DoConsulting1</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>
			<div class="col-md-4 yt">
				<iframe src="https://www.youtube.com/embed/3jAICtsAVcQ?ecver=2" width="100%" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>

	<div class="home-services">
		<div class="container no-gutter">
			<header>
				<h3>Servicios</h3>
			</header>
			<?php get_template_part('includes/loops/services-home');?>
		</div>
	</div>


<?php get_template_part('includes/footer'); ?>