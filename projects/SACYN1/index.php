<?php get_header(); ?>

<section id="home" class="bnrslide">
	<div class="container">
		<div class="facebooklikebtn"><fb:like href="https://www.facebook.com/beenainpixel" layout="button_count" show-faces="true" width="450" action="like" colorscheme="light" /> 
		</div>
		<div class="row">
			<?php
			$_args = array(
			'order' => 'ASC',
			'category_name' => 'banner-slides',
			'posts_per_page' => -1,
			);
			$queryResult = new WP_Query($_args);
			while($queryResult->have_posts()): $queryResult->the_post();
			?>
			<div class="banner animatedParent">
				<h2 class="animated growIn slowest go"><?php the_title(); ?></h2>
				<div class="animated bounceInLeft slow go"><?php the_content(); ?></div>
					<?php
					$text = get_field('btn-text');
					$link = get_field('btn-link');
					$cnttext = get_field('cntbtn-text');
					$cntlink = get_field('cntbtn-link');
					?>
			
				<div class="buttons-inline animated bounceInLeft slower go"><a href="<?php echo $link; ?>" class="btn btn-outline-inverse btn-lg viewd"><?php echo $text; ?></a></div>
				<div class="buttons-inline animated bounceInRight slower go"><a href="<?php echo $cntlink; ?>" class="btn btn-outline-inverse btn-lg contactbtn"><?php echo $cnttext; ?></a></div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
	<div class="triangle-bottomright"></div>
</section>

<section id="whatido" class="whatido">
	<div class="container">
		<div class="animatedParent">
			<h1 class="animated bounceInDown go altheading"><span>What</span> I Do?</h1>
			<p></p>
		</div>
		<div class="row">
		<?php
			$_args = array(
				'order' => 'ASC',
				'category_name' => 'whatido',
				'posts_per_page' => -1,
			);
			$queryResult = new WP_Query($_args);
			while($queryResult->have_posts()): $queryResult->the_post();
		?>
			<div class="animatedParent">
				<div class="col-md-2 col-sm-4">
					<div class="icando animated growIn slower go">
						<div class="ih-item circle colored effect1"><a href="#">
							<div class="spinner wrkicns"><?php the_content(); ?></div>
								<div class="info">
									<div class="info-back">
										<h3><?php the_title(); ?></h3>
									</div>
								</div>
							</a></div>
					</div>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
	</section>

<section id="portfolio" class="mywork">
	<div class="triangle-topleft"></div>
	<div class="container">
		<div class="animatedParent">
		<h1 class="animated bounceInDown go heading"><span>My</span> Work</h1>
		</div>
		<div class="animatedParent">
			<button class="filter btn active buttons-inline animated bounceInLeft slower go" data-filter="all">All</button>
			<button class="filter btn buttons-inline animated bounceInUp slower go" data-filter=".<?php echo get_category(10)->slug; ?>"><?php echo get_cat_name(10); ?></button>
			<button class="filter btn buttons-inline animated bounceInRight slower go" data-filter=".<?php echo get_category(11)->slug; ?>"><?php echo get_cat_name(11); ?></button>
			<button class="filter btn buttons-inline animated bounceInDown slower go" data-filter=".<?php echo get_category(12)->slug; ?>"><?php echo get_cat_name(12); ?></button>
			<button class="filter btn buttons-inline animated bounceInDown slower go" data-filter=".<?php echo get_category(17)->slug; ?>"><?php echo get_cat_name(17); ?></button>
		</div>
		<div id="Container" class="works animatedParent">
			<div class="row cm-row">
			<?php
					$_args = array(
						'order' => 'ASC',
						'category_name' => 'featured',
						'posts_per_page' => 8,
					);
					$queryResult = new WP_Query($_args);
					while($queryResult->have_posts()): $queryResult->the_post();
					
					$my_cat = get_the_terms($post->ID, 'featured');
				?>
				<?php
					$field_value = get_field('project_url');
					$thumb_url = get_field('large-img');
				?>

			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mix <?php foreach(get_the_category() as $category) {echo $category->slug. ' ' ;} ?>">
				<div class="animated growIn slower go">
				<div class="ih-item square effect13 left_to_right"><a class="fancybox" data-fancybox-group="gallery" title="" href="<?php
					if(!empty($field_value)) {
						echo $field_value;
					} else {
						echo $thumb_url;
					};
				?>">
										<div class="img"><?php the_post_thumbnail(); ?></div>
										<div class="info">
											<h3><?php the_title(); ?></h3>
											<p><?php the_content(); ?></p>
										</div>
										</a> </div>	
				</div>
				</div>
			<?php endwhile; ?>
			

			</div>
		</div>
	</div>
<div class="triangle-bottomright"></div>
</section>

<section id="about" class="hiresection">
		<div class="container">
		<?php
			$_args = array(
				'order' => 'ASC',
				'category_name' => 'hire',
				'posts_per_page' => -1,
			);
			$queryResult = new WP_Query($_args);
			while($queryResult->have_posts()): $queryResult->the_post();
		?>
		<?php
			$content = get_the_content();
			$profile = get_field('my-prof');
			$hireme = get_field('hire-me');
			$descriptn = get_field('des-criptn');
			$proflink = get_field('abt-me');
			$newproject = get_field('newproject');
			$dwnldlink = get_field('downloadressume');

		?>

		<div class="hireme">
			<div class="row animatedParent">
				<h1 class="animated bounceInDown go altheading"><span>About</span> Me</h1>
				<div class="animated growIn slower go"><div class="ih-item circle effect18 left_to_right colored imgcircle">
					<a href="#">
						<div class="img"><?php the_post_thumbnail(); ?></div>
						<div class="info">
							<div class="info-back">
								
								<h3><a href="<?php echo $proflink; ?>"><?php echo $profile; ?></a></h3>
								<p><?php echo $descriptn; ?></p>
							</div>
						</div>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
				<p class="animated bounceInDown go"><?php echo $content; ?></p>
				<div class="animated bounceInDown go"><h4><?php the_title(); ?></h4></div>
				<div class="animated bounceInLeft slower go">
					<div class="intrstinewpjct"><?php echo $newproject; ?></div> 
				</div>
				</div>
				<div class="col-md-2"></div>	
			</div>	
				<div class="hirebtn">
				<div class="buttons-inline animated bounceInRight slower go"><a href="<?php echo $proflink; ?>" class="btn btn-outline-inverse btn-lg hirebtn pinkbgclr"><?php echo get_field('detail-btn'); ?></a></div>
				<div class="buttons-inline animated bounceInRight slower go"><a href="<?php echo $dwnldlink; ?>" class="btn btn-outline-inverse btn-lg hirebtn pinkbgclr"><?php echo get_field('download-btn'); ?> <i class="fa fa-cloud-download"></i></a></div>
				</div>	
			</div>
		</div>
	<?php endwhile; ?>
	</div>
	
</section>

<section id="contact" class="ftrdiv">
	<div class="triangle-topleft"></div>

	<div class="container">
		<h1 class="animated bounceInDown go heading"><span>Contact</span> Me</h1>
		<div class="row">
			<div class="col-md-4">
				<?php
				$_args = array(
					'order' => 'ASC',
					'category_name' => 'getintouch',
					'posts_per_page' => -1,
				);
				$queryResult = new WP_Query($_args);
					while($queryResult->have_posts()): $queryResult->the_post();
				?>
				<?php 
				$skype= get_field('skype-txt');
				 ?>
				<div class="gtintuch animatedParent">
					<h4 class="animated bounceInDown go"><div class="underline"></div><?php the_title(); ?></h4>
					<div class="mail animated bounceInLeft slower go"><a href="#"><span class="fa  fa-envelope-o"></span><?php the_content(); ?></a></div>
					<div class="skyp animated bounceInRight slower go"><a href="#"><span class="fa  fa-skype"></span><?php echo $skype; ?></a></div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="contctfrm animatedParent ">
					<h4 class="animated bounceInDown go"><div class="cntunderline"></div>Have any querry or want to work together?</h4>
					<div class="animated growIn slower webdesign go"><?php echo do_shortcode('[contact-form-7 id="87" title="Have any querry or want to work together?" html_class="form-horizontal frmlbl"]') ?></div>
				</div>
			</div>
			
		</div>
		<?php endwhile; ?>
	</div>
	<div class="triangle-bottomright"></div>
</section>
	
<?php get_footer(); ?>
