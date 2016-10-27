<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner banner" role="listbox">
   <?php 
   $the_query = new WP_Query(array(
    'category_name' => 'Home Slider', 
    'posts_per_page' => 1 
    )); 
   while ( $the_query->have_posts() ) : 
   $the_query->the_post();
  ?>
   <div class="item active">
    <?php the_post_thumbnail('large');?>
    <div class="carousel-caption">
     <p><?php the_title();?></p>
     <h1><?php the_excerpt();?></h1>
    </div>
   </div><!-- item active -->
  <?php 
   endwhile; 
   wp_reset_postdata();
  ?>
 <?php 
   $the_query = new WP_Query(array(
    'category_name' => 'Home Slider', 
    'posts_per_page' => 5, 
    'offset' => 1 
    )); 
   while ( $the_query->have_posts() ) : 
   $the_query->the_post();
  ?>
   <div class="item">
    <?php the_post_thumbnail('large');?>
    <div class="carousel-caption">
     <p><?php the_title();?></p>
     <h1><?php the_excerpt();?></h1>
    </div>
   </div><!-- item -->
  <?php 
   endwhile; 
   wp_reset_postdata();
  ?>
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>








<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner banner" role="listbox">
    <div class="item active">
      <img src="<?php echo get_template_directory_uri(); ?>/images/banner-image.jpg" alt="...">
      <div class="carousel-caption">
      <p>INTERDUM ET SODALES AC, BIBENDUM ID RISUS SAGITTIS</p>
        <h1>ADVANCING <span class="yellow_color">GOD'S MISSION IN ASIA</span><br>
THROUGH TRAINING YOUTH</h1>
 <h1><a href="#" class="btn btn-detail" role="button">DETAIL</a></h1>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/banner-image.jpg" alt="...">
      <div class="carousel-caption">
      <h1>INTERDUM ET SODALES AC, BIBENDUM ID RISUS SAGITTIS</h1>
        <h1>ADVANCING <span class="yellow_color">GOD'S MISSION IN ASIA</span><br>
THROUGH TRAINING YOUTH</h1>
 <h1><a href="#" class="btn btn-detail" role="button">DETAIL</a></h1>
      </div>
    </div>
  <div class="item">
      <img src="<?php echo get_template_directory_uri(); ?>/images/banner-image.jpg" alt="...">
      <div class="carousel-caption">
      <p>INTERDUM ET SODALES AC, BIBENDUM ID RISUS SAGITTIS</p>
        <h1>ADVANCING <span class="yellow_color">GOD'S MISSION IN ASIA</span><br>
THROUGH TRAINING YOUTH</h1>
 <h1><a href="#" class="btn btn-detail" role="button">DETAIL</a></h1>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>