<?php get_header(); ?>

<section>
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
     <h1><?php the_title();?></h1>
     <p>ADVANCING <span class="yellow_color">GOD'S MISSION IN ASIA</span><br>
THROUGH TRAINING YOUTH</p>
     <?php
     	$text = get_field('btn-text');
		$link = get_field('btn-link');
     ?>
     <a href="<?php echo $link; ?>" class="btn btn-4 btn-detail" role="button"><span><?php echo $text; ?></span></a>
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
     <h1><?php the_title();?></h1>
     <p><?php the_excerpt();?></p>
     <a href="<?php echo $link; ?>" class="btn btn-4 btn-detail" role="button"><span><?php echo $text; ?></span></a>
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
</section>

<section class="trainingnequipDiv">
	<div class="container">
	<div class="row">
	<?php
			$_args = array(
				'order' => 'ASC',
				'category_name' => 'trainequip',
				'posts_per_page' => -1,
			);
			$queryResult = new WP_Query($_args);
			while($queryResult->have_posts()): $queryResult->the_post();
		?>
	
	<h2 class="h2"><?php the_title(); ?></h2>
	<p><?php the_content(); ?></p>
	
<?php
     	$text = get_field('btn-text');
		$link = get_field('btn-link');
     ?>
<a href="<?php echo $link; ?>" class="btn btn-3 btn-more"><?php echo $text; ?></a>

	<?php endwhile; ?>
	</div>
	</div>
</section>

<section class="whowerblock_bg">
	<div class="container">
		<div class="row">
		<?php
			$_args = array(
				'order' => 'ASC',
				'category_name' => 'whowertitle',
				'posts_per_page' => -1,
			);
			$queryResult = new WP_Query($_args);
			while($queryResult->have_posts()): $queryResult->the_post();
		?>
		<h2><?php the_title(); ?></h2>
		<div class="underline"></div>
		<p><?php the_content(); ?></p>
		</div>
		<?php endwhile; ?>
	</div>
</section>
<section class="whowerblock">
	<div class="container">
		<div class="row teamblock">
		<?php
			$_args = array(
				'order' => 'ASC',
				'category_name' => 'whower',
				'posts_per_page' => -1,
			);
			$queryResult = new WP_Query($_args);
			while($queryResult->have_posts()): $queryResult->the_post();
		?>
		<?php
     	$text = get_field('btn-text');
		$link = get_field('btn-link');
     ?>
			<div class="col-md-4 col-sm-4">
				<h3><?php the_title(); ?></h3>
				<div class="hover14">
				<div>
				<figure><?php the_post_thumbnail('large');?></figure>
				</div>
				</div>
				
				<p><?php the_content(); ?></p>
				<a href="<?php echo $link; ?>" class="btn btn-1 btn-learn" role="button"><svg>
        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
      </svg><?php echo $text; ?></a>
			</div>
		<?php endwhile; ?>
			
		</div>
	</div>
</section>
<section class="whatwedoblock_bg">
	<div class="container">
		<div class="row">
		<?php
			$_args = array(
				'order' => 'ASC',
				'category_name' => 'whatwedotitle',
				'posts_per_page' => -1,
			);
			$queryResult = new WP_Query($_args);
			while($queryResult->have_posts()): $queryResult->the_post();
		?>
			<h2><?php the_title(); ?>WHAT WE DO</h2>
			<div class="underline"></div>
			<p><?php the_content(); ?></p>
			</div>
		<?php endwhile; ?>
		</div>
	</div>
</section>
<section class="whatwedoblock">
<div class="container">
		<div class="row teamblock">
		<?php
			$_args = array(
				'order' => 'ASC',
				'category_name' => 'whatwedo',
				'posts_per_page' => -1,
			);
			$queryResult = new WP_Query($_args);
			while($queryResult->have_posts()): $queryResult->the_post();
		?>
		<?php
     	$text = get_field('btn-text');
		$link = get_field('btn-link');
     ?>
			<div class="col-md-4 col-sm-4">
				<h3><?php the_title(); ?></h3>
				<div class="hover14">
				<div>
				<figure><?php the_post_thumbnail('large');?></figure>
				</div>
				</div>
				<p><?php the_content(); ?></p>
					<a href="<?php echo $link; ?>" class="btn btn-1 btn-learn" role="button"><svg>
        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
      </svg><?php echo $text; ?></a>
			</div>
		<?php endwhile; ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>