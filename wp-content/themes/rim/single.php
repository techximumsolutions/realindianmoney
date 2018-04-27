<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header(); 
if ( have_posts() ) : while ( have_posts() ) : the_post();
$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
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
</div>
</section>
<section class="content-rim blog-detl">
<div class="container">
<h2><?php the_title(); ?></h2>
 <small><i class="fa fa-calendar"></i> <?php echo get_the_time('F j, Y'); ?></small>
 <hr>
 <img src="<?php echo $image[0]; ?>" alt="" class="img-fluid">
<?php the_content(); ?>
</div>



</section>
<?php endwhile;endif;
$themeOptions = get_option( 'chrs_theme_options' );
 ?>

<section class="blog-section" style=" background:#f1f1f1;">
<div class="container">
<h2><?php echo $themeOptions['msurl'] ?></h2>

<div class="row margn-rim-35">
<?php wp_reset_postdata();$the_query = new WP_Query( 'posts_per_page=3' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post();
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
<?php 
endwhile;
wp_reset_postdata();
?>	
</div>

</div>
</section>
<?php get_footer(); ?>
