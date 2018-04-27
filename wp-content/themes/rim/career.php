<?php
/*
Template Name: Career Template
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
	$args = array('post_type' => 'career','paged' => $paged );
	query_posts($args); 
	if ( have_posts() ) :
?>
<section class="content-rim">
<div class="container">
<h2><?php the_title(); ?></h2>
<hr/>
<?php the_content(); ?>
<div class="row margn-rim-35">
	<?php while (have_posts()) : the_post();
	 ?>
	<div class="col-sm-12 col-md-6" style="margin-bottom:20px;">
    <div class="grey-box">
	    <small><i class="fa fa-calendar"></i> <?php echo get_the_time('F j, Y'); ?></small>
	    <h5><?php the_title(); ?></h5>
	    <?php the_content(); ?>
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