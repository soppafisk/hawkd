<?php
/*
	Template Name: FAQ
*/

get_header(); ?>
	<div class="row"> 
		<div class="col-xs-12">
			<h1>Frequently asked questions</h1>
		</div>
	</div>
<section id="content" role="main" class="row">

<?php 

$args = array(
	'orderby' => 'post_date',
	'order' => 'ASC',
	'hierarchical' => 1,
	'exclude' => '',
	'child_of' => 0,
	'parent' => -1,
	'exclude_tree' => '',
	'number' => '',
	'offset' => 0,
	'post_type' => 'faq',
	'post_status' => 'publish'
);
$the_query = new WP_Query($args);
?>
<div class="col-md-3 col-xs-12">
	<ul class="faq-nav">
	<?php
	//left navigation
	if ( $the_query -> have_posts() ) : while ( $the_query -> have_posts() ) :
		$the_query-> the_post();
	?>
	<li><a class="faq_<?php the_ID(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

	<?php endwhile; endif; ?>
	</ul>
</div>
<div class="col-md-9 col-xs-12">

	<?php 
	rewind_posts();
	// main content loop
	if ( $the_query -> have_posts() ) : while ( $the_query -> have_posts() ) :
		$the_query-> the_post();
	?> 
	<article <?php post_class(); ?>>
	<h1><?php the_title(); ?></h1>
	<section class="entry-content" id="faq_<?php the_ID(); ?>">
	<?php the_content(); ?>
	</section>
</article>

	<?php endwhile; endif; ?>
</div>
</section> <!-- //content --> 
<?php get_footer(); ?>