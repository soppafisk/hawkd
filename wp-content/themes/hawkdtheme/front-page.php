<?php get_header(); ?>



<section id="content" role="main">
<?php
$args = array(
	'orderby' => 'ID',
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

<article id="post-<?php the_ID(); ?>" <?php post_class();?>>
	<div class="article-body">
	<h1 class="text-center"><?php print the_title(); ?></h1>

	<?php print the_content(); ?>
	</div>
</article>


<?php endwhile; endif;  

wp_reset_postdata();

get_footer(); ?>