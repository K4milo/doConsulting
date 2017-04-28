<ul class="nav nav-pills">
 
<?php
	
	$args = array(
		'posts_per_page' => -1,
		'post_type' => 'servicio'
	);

	$counter = 0;
	query_posts($args);
	while(have_posts()):the_post();
?>
	
	<li><a data-toggle="pill" href="#menu<?php echo $counter; ?>"><?php the_title();?></a></li>

<?php
	$counter ++;
	endwhile;
	wp_reset_query();
?>

</ul>



  
  <div class="tab-content">
    
    <?php
	
		$args = array(
			'posts_per_page' => -1,
			'post_type' => 'servicio'
		);

		$counter = 0;
		query_posts($args);
		while(have_posts()):the_post();
	?>
	
	<div id="menu<?php echo $counter; ?>" class="tab-pane fade">
      <h3><?php the_title(); ?></h3>
      <div class="col-md-7 content-tab">
      	<?php the_content();?>
      </div>
      <div class="col-md-5 image-tab">
      	<?php echo types_render_field('imagen-lateral'); ?>
      </div>
    </div>	
	
	<?php
		$counter ++;
		endwhile;
		wp_reset_query();
	?>
  </div>