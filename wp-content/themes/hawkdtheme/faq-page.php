<?php
/*
	Template Name: FAQ
*/

get_header(); ?>

<section id="content" role="main" class="row">
	<div class="col-xs-12 col-md-8-offset-2">
		<h1 class="text-center">Frequently asked questions</h1>
	</div>

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

<div class="col-lg-2 col-lg-offset-2 visible-lg-block">
	<ul class="faq-nav well">
	<?php
	//left navigation
	if ( $the_query -> have_posts() ) : while ( $the_query -> have_posts() ) :
		$the_query-> the_post();
	?>
	<li><a class="faq_<?php the_ID(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

	<?php endwhile; endif; ?>
	</ul>
</div>
<div class="col-lg-6 col-lg-offset-0 col-xs-10 col-xs-offset-1">

	<?php 
	rewind_posts();
	// main content loop
	if ( $the_query -> have_posts() ) : while ( $the_query -> have_posts() ) :
		$the_query-> the_post();
	?> 
	<article <?php post_class(); ?> id="faq_<?php the_ID(); ?>">
		<div class="panel-group">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title"><span class="faq-arrow glyphicon glyphicon-chevron-right"></span><?php the_title(); ?></h4>
				</div>
				<section class="entry-content panel-body">
					<?php the_content(); ?>
				</section>
			</div>

		</div>

	</article>

	<?php endwhile; endif; ?>
</div>
</section> <!-- //content --> 
<?php get_footer(); ?>