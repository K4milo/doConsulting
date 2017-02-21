<?php
	//list of child slides
	
	$child_posts = types_child_posts("slide-home"); 

	foreach ($child_posts as $child_post) { 
		//sildes var
		$urlSlide = get_the_post_thumbnail_url($child_post->ID);
	?>
	
	<ul class="slide-listing">
		<li style="background-image: url(<?php echo $urlSlide; ?>);">	
			<div class="caption">
				<h5><?php echo $child_post->post_title; ?></h5>
				<?php echo $child_post->post_content; ?>		
			</div>
		</li>
	</ul>
	
	
<?php }

