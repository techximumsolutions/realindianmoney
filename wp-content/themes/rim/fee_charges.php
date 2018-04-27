<?php
/*
Template Name: Fee_charges
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

<!-- end here -->
<!-- about section start here -->
<section class="content-rim">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php the_content(); ?>
			</div>
		</div>
		<p class="text-center" style="margin-top:25px;"><?php echo get_post_custom_values('Short Description',$post->ID)[0] ?></p>
	</div>
</section>
<?php endwhile;endif; 
wp_reset_postdata();
 ?>
 
<section class="content-rim">
	<div class="container">
		<!--- Roi Section---->
		<div class="headn-h3"><h3><?php echo get_field('roi_title', $post->ID); ?></h3></div>
		<?php echo get_field('roi_description', $post->ID); ?>
		<!--- Processing Section---->
		<div class="headn-h3"><h3><?php echo get_field('processing_title', $post->ID); ?></h3></div>
		<?php echo get_field('processing_description', $post->ID); ?>
		<!--- Other Section---->
		<div class="headn-h3"><h3><?php echo get_field('other_title', $post->ID); ?></h3></div>
		<?php echo get_field('other__description', $post->ID); ?>
	</div>
</section>
	
<?php get_footer(); ?>