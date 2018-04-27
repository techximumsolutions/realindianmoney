<?php
/*
Template Name: Blog Template
 */
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post();
$image_name='feature-image-2';
if (MultiPostThumbnails::has_post_thumbnail('page', $image_name)) {
	$image_id = MultiPostThumbnails::get_post_thumbnail_id( 'page', $image_name, $post->ID );  // use the MultiPostThumbnails to get the image ID
    $image_feature_url = wp_get_attachment_image_src( $image_id,'feature-image' ); // define full size src based on image ID
} 
?>
<section class="about-wrap" <?php if($image_feature_url):echo 'style="background:url('.$image_feature_url[0].')  no-repeat"'; endif; ?>>
<div class="container">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
  </ol>
</nav>

<!--<div class="cap-about">
<h5>About Us</h5>
<p>We challenge the accepted</p>
</div>-->

</div>

</section>
<!-- end here -->
<?php
 endwhile;endif;wp_reset_postdata();
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args = array('post_type' => 'post','paged' => $paged );
	query_posts($args); 
	if ( have_posts() ) :
?>
<section class="content-rim">
<div class="container">
<h2><?php the_title(); ?></h2>
<div class="row margn-rim-35">
	<?php while (have_posts()) : the_post();
	$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array('220','220'));
	if($image){
		$image=$image[0];	
	}else{
		$image= get_template_directory_uri().'/images/default.png';
	}
	 ?>
	<div class="col-sm-12 col-md-4">
    <a href="<?php the_permalink() ?>"><img src="<?php echo $image; ?>" alt="<?php echo the_title(); ?>" class=" img-fluid"></a>
    <div class="grey-box">
	    <small><i class="fa fa-calendar"></i> <?php echo get_the_time('F j, Y'); ?></small>
	    <h5><?php echo substr(get_the_title(), 0,28).'....' ?></h5>
	    <p><?php echo substr(strip_tags(get_the_content()),0,150); ?>..</p>
	    <a href="<?php the_permalink() ?>">Read More</a>
    </div>
</div>
	<?php endwhile; ?>
</div>

</div>



</section>
<?php if(function_exists('wp_paginate')): ?>
<div class="container margn-rim-30">
  <?php  wp_paginate(); ?>
</div>	 
<?php endif; endif;  ?>
<?php get_footer(); ?>