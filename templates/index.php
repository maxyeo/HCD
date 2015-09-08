<?php get_header();?>
<div id="slide1" class="slide" style="background-image:url(<?php the_field('one_image'); ?>);">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hcdname.png"/>
</div>

<div id="slide2" class="slide" style="background-image:url(<?php the_field('two_image'); ?>);">
	<a href="#slide2" id="down-arrow">
		<i class="fa fa-angle-double-down"></i>
	</a>
	<h2 class="cnt"><?php the_field('two_title'); ?></h2>
	<h3><?php the_field('two_line_one'); ?></h3>
</div>


<div id="slide3" class="slide" style="background-image:url(<?php the_field('three_image'); ?>);">
	<h2 class="lft"><?php the_field('three_title'); ?></h2>
	<h3 class="lft"><?php the_field('three_line_one'); ?></h3>
</div>


<div id="slide4" class="slide" style="background-image:url(<?php the_field('four_image'); ?>);">
	<h2 class="rgt"><?php the_field('four_title'); ?></h2>
	<h3 class="rgt"><?php the_field('four_line_one'); ?></h3>
</div>

<div id="slideContact" class="slide" style="background-image:url(<?php the_field('five_image'); ?>);">
	<h2 class="cnt"><?php the_field('five_title'); ?></h2>
	<div id="contactContainer" class="cf">
		<div class="social">
			<a href="https://www.facebook.com/pages/Hopkins-Creative-Design/300424146830086">
				<img height="200px" src="<?php echo get_stylesheet_directory_uri(); ?>/img/fbook.png"/>
			</a>
			<h3>facebook</h3>
		</div>
		<div class="social">
			<a href="mailto:hopkinscreativedesign@gmail.com">
				<img height="200px" src="<?php echo get_stylesheet_directory_uri(); ?>/img/email.png"/>
			</a>
			<h3>e-mail</h3>
		</div>
	</div>
</div>

<div id="slide5">
	<video class="home_video" preload="auto" autoplay="autoplay" loop="loop" muted="muted" volume="0">
		<source src="<?php echo get_stylesheet_directory_uri(); ?>/img/vid/hcd.mp4" type="video/mp4">
	</video>
	<div id="copyright">
		<h3 class="cnt">an HSE venture</h3>
		<a href="http://hse.jhu.edu/">COPYRIGHT © 2015 HOPKINS STUDENT ENTERPRISES. </a>
	</div>
</div>
<? get_footer(); ?>