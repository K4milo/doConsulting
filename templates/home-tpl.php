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
				<iframe src="https://www.youtube.com/embed/3jAICtsAVcQ?ecver=2" width="100%" frameborder="0"  allowfullscreen></iframe>
			</div>
			<div class="col-md-4 fb">
				<span class="circle-icon"> <i class="fa fa-facebook" aria-hidden="true"></i> </span>
				<div class="fb-page" data-href="https://www.facebook.com/doconsultingcolombia/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/doconsultingcolombia/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/doconsultingcolombia/">Do Consulting</a></blockquote></div>
			</div>
		</div>
	</div>

	<div class="bottom-networks">
		<div class="container">
			<div class="col-md-8 fl">
			<span class="circle-icon"><i class="fa fa-flickr" aria-hidden="true"></i></span>
				
				<a data-flickr-embed="true" data-header="true" data-footer="true"  href="https://www.flickr.com/photos/doconsultingco/34036493711/" title="L&#x27;Oréal Colombia - Cartagena 1"><img src="https://c1.staticflickr.com/3/2906/34036493711_058c8b9575_z.jpg" width="100%" height="480" alt="L&#x27;Oréal Colombia - Cartagena 1"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>

			</div>
			<div class="col-md-4 tw">
				<span class="circle-icon"><i class="fa fa-twitter" aria-hidden="true"></i></span>
				<a class="twitter-timeline" data-height="400" href="https://twitter.com/DoConsulting1" data-tweet-limit="1">Tweets by DoConsulting1</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
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