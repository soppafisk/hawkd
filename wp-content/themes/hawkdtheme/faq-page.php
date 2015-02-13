<?php
/*
	Template Name: FAQ
*/

get_header(); ?>

<section id="content" role="main">
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
//left navigation
if ( $the_query -> have_posts() ) : while ( $the_query -> have_posts() ) :
	$the_query-> the_post();
?>
<h1><?php the_title(); ?></h1>

<?php endwhile; endif; ?>
<?php 
rewind_posts();
// main content loop
if ( $the_query -> have_posts() ) : while ( $the_query -> have_posts() ) :
	$the_query-> the_post();
?> 
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>

<?php endwhile; endif; ?>
</section> <!-- //content --> 
<?php get_footer(); ?>