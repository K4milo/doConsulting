<?php
  /*
    Template Name: About
  */
  get_template_part('includes/header'); ?>


<div class="container-fluid blue-bg">
  <div class="row">
    <div class="container">
      <header class="def-header">
          <h2><?php the_title(); ?></h2>
      </header>
      <div class="content">
        <?php echo types_render_field('mision-vision'); ?>
      </div>
    </div>
  </div><!-- /.row -->
</div><!-- /.container -->

<div class="container-fluid">
  <div class="row">
    <div class="the_content">
      <div id="content" class="container" role="main">
        <?php get_template_part('includes/loops/content', 'page'); ?>
      </div><!-- /#content -->
    </div>
  </div>
</div>

<?php get_template_part('includes/footer'); ?>
