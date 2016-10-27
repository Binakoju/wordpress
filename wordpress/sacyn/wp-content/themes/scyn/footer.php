<section>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/sep_logo.png" alt=""></a>
				</div>
				<div class="col-md-3">
					<h3>QUICK LINKS</h3>
					<ul>
						<li><a href="#">First Quick Link</a></li>
						<li><a href="#">Second Quick Link</a></li>
						<li><a href="#">Third Quick Link</a></li>
						<li><a href="#">Fourth Quick Link</a></li>
						<li><a href="#">Fifth Quick Link</a></li>
						<li><a href="#">Sixth Quick Link</a></li>
						<li><a href="#">Seventh Quick Link</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					
				</div>
				<div class="col-md-3">
				<?php
			$_args = array(
				'order' => 'ASC',
				'category_name' => 'contactus',
				'posts_per_page' => -1,
			);
			$queryResult = new WP_Query($_args);
			while($queryResult->have_posts()): $queryResult->the_post();
		?>
					<h3><?php the_title(); ?></h3>
					<ul>
					<?php the_content(); ?>
						
					</ul>
				<?php endwhile; ?>
					<div class="social_icons">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="btmftr">
		<div class="container">
		<div class="row">
		© 2016 South Asian Christian Youth Network. All rights reserved | Design by Soani Tech Pvt. Ltd
		</div>
		</div>
	</div>
</section>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js'></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
    $('.carousel').carousel({
  		interval: 2000	
  	})
});
</script>
<script type="text/javascript">
	$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
</script>
<?php wp_footer(); ?>
</body>
</html>
