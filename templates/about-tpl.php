<?php
  /*
    Template Name: About
  */
  get_template_part('includes/header'); ?>


<div class="container-fluid blue-bg">
  <div class="row">
    <div class="container">
      <div class="col-xs-12 col-sm-8">
        <div id="mision">
          <?php echo types_render_field('mision-vision'); ?>
        </div><!-- /#content -->
      </div>
      
      <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
        <?php get_template_part('includes/sidebar'); ?>
      </div>
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->

<div class="container-fluid">
  <div class="the_content">
    <div id="content" class="container" role="main">
      <?php get_template_part('includes/loops/content', 'page'); ?>
    </div><!-- /#content -->
  </div>
</div>

<?php get_template_part('includes/footer'); ?>
