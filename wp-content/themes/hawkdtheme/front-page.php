<?php get_header(); ?>



<section id="content" role="main">
<?php
$args = array(
	'orderby' => 'menu_order',
	'order' => 'ASC',
	'hierarchical' => 1,
	'exclude' => '',
	'child_of' => 0,
	'parent' => -1,
	'exclude_tree' => '',
	'number' => '',
	'offset' => 0,
	'post_type' => 'page',
	'post__not_in' => [28,30],
	'post_status' => 'publish'
);
$the_query = new WP_Query($args);
//start loop
if ( $the_query -> have_posts() ) : while ( $the_query -> have_posts() ) :
	$the_query-> the_post();
?>


<article class="row" id="post-<?php the_ID(); ?>" <?php post_class();?>>
	<div class="col-md-8 col-md-offset-2">

<?php if (get_the_ID() == 2) : ?>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1">
		<?php print the_content(); ?>
		</div>
	</div>

	<?php endif; ?>

	<?php
	// The page with 3 icons
	if (get_the_ID() == 65) :
		$image = wp_get_attachment_image_src(get_field('bild_1'), 'full'); ?>
	<div class="row">
		<div class="col-xs-4">	
			<img class="aboutImg" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('bild_1')) ?>" />
			<p class="iconTitel"><?php print get_field('titel_1'); ?></p>
			<p class="aboutText"><?php print get_field('icontext_1'); ?> </p>		
		</div>

		<?php $image = wp_get_attachment_image_src(get_field('bild_2'), 'full'); ?>
		<div class="col-xs-4">
			<img class="aboutImg" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('bild_2')) ?>" />
			<p class="iconTitel"><?php print get_field('titel_2'); ?></p>
			<p class="aboutText"><?php print get_field('icontext_2'); ?> </p>
		</div>
		
		<?php $image = wp_get_attachment_image_src(get_field('bild_3'), 'full'); ?>
		<div class="col-xs-4">
			<img class="aboutImg" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('bild_3')) ?>" />
			<p class="iconTitel"><?php print get_field('titel_3'); ?></p>
			<p class="aboutText"><?php print get_field('icontext_3'); ?> </p>
			
		</div>
	</div>

	<?php endif; ?>

<?php
	// grey with short statement
	if (get_the_ID() == 93) :
		$image = wp_get_attachment_image_src(get_field('bild_1'), 'full'); ?>
	<div class="row">
		<div class="col-xs-12">	
			<p class="statmentTitel"><?php print get_field('statement_1'); ?></p>
		</div>

		<?php $image = wp_get_attachment_image_src(get_field('bild_2'), 'full'); ?>
		<div class="col-xs-12">
			<p class="statmentText"><?php print get_field('statement_2'); ?></p>
		</div>
		
	</div>

	<?php endif; ?>


<?php
	// About page
	if (get_the_ID() == 5) :
		$image = wp_get_attachment_image_src(get_field('image_1'), 'full'); ?>
	<div class="row">
		<div class="col-xs-12">
		<h2 id="hawkdTitel">HAWKD</h2>
		</div>
		<div class="col-xs-12">	
		<p class="hawkdTitel2"><?php print get_field('abouttitel'); ?></p>
		</div>	

		<div class="col-xs-12">	
		<p class="aboutHawkd"><?php print get_field('about'); ?></p>
		</div>
			<div class="col-xs-4">	
			<img class="aboutImg" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('image_1')) ?>" />
			<p class="aboutName"><?php print get_field('namn_1'); ?></p>
			<p class="aboutWork"><?php print get_field('yrke_1'); ?></p>
			<p class="aboutText"><?php print get_field('text_1'); ?> </p>
		</div>

		<?php $image = wp_get_attachment_image_src(get_field('image_2'), 'full'); ?>
		<div class="col-xs-4">
			<img class="aboutImg" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('image_2')) ?>" />
			<p class="aboutName"><?php print get_field('namn_2'); ?></p>
			<p class="aboutWork"><?php print get_field('yrke_2'); ?></p>
			<p class="aboutText"><?php print get_field('text_2'); ?> </p>
		</div>
		
		<?php $image = wp_get_attachment_image_src(get_field('image_3'), 'full'); ?>
		<div class="col-xs-4">
			<img class="aboutImg" src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('image_3')) ?>" />
			<p class="aboutName"><?php print get_field('namn_3'); ?></p>
			<p class="aboutWork"><?php print get_field('yrke_3'); ?></p>
			<p class="aboutText"><?php print get_field('text_3'); ?> </p>
		</div>
	</div>
	<?php endif; ?>

<?php
	// grey with short statement 2
	if (get_the_ID() == 101) :
		$image = wp_get_attachment_image_src(get_field('bild_1'), 'full'); ?>
	<div class="row">
		<div class="col-xs-12">	
			<p class="statmentTitel"><?php print get_field('statment2_1'); ?></p>
		</div>

		<?php $image = wp_get_attachment_image_src(get_field('bild_2'), 'full'); ?>
		<div class="col-xs-12 ">
			<p class="statmentText"><?php print get_field('statment2_2'); ?></p>
		</div>
	
	</div>

	<?php endif; ?>

<?php
	// contact page
	if (get_the_ID() == 7) : $image = wp_get_attachment_image_src(get_field(''), 'full'); ?>
	<div class="row">
		<div class="col-xs-12">	
			<p class="kontaktTitel">Contact us</p>
		</div>

		<div class="col-xs-6 formular">	
			<?php print the_content(); ?>
		</div>	
		<div class="col-xs-6 karta">	
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
			<div style="overflow:hidden;height:300px;width:500px;">
					<div id="gmap_canvas" style="height:300px;width:500px;"></div>
					<a class="google-map-code" href="http://wordpress-themes.org" id="get-map-data">http://wordpress-themes.org</a>
					</div>
				<script type="text/javascript"> function init_map(){var myOptions = {zoom:17,center:new google.maps.LatLng(57.693008,11.975303800000006),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(57.693008, 11.975303800000006)});infowindow = new google.maps.InfoWindow({content:"<b>Hawkd</b><br/>Vera Sandbergs All&eacute; 8<br/>411 33 Sverige" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
			</div>
		</div>
	</div>

	<?php endif; ?>




	
	
</article>



<?php endwhile; endif;  // end the loop

wp_reset_postdata();

get_footer(); ?>