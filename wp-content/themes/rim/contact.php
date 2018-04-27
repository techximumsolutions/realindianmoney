<?php
/*
Template Name: Contact
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
<h2><?php the_title(); ?></h2>
<hr>
<?php if(get_post_custom_values('contact-form',$post->ID)[0]): ?>

<div class="row">
<div class="col-sm-7">
<?php get_post_custom_values('contact-form',$post->ID)[0]; ?>
</div>
<div class="col-sm-5">
<iframe src="<?php echo get_post_custom_values('map url',$post->ID)[0] ?>" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

<div>
        <p><?php the_content(); ?> </p>
        <p><i class="fa fa-phone"></i>&nbsp;&nbsp;<?php echo get_post_custom_values('mobile',$post->ID)[0] ?></p>
        <p><i class="fa fa-envelope"></i>&nbsp;&nbsp;<?php echo get_post_custom_values('email',$post->ID)[0] ?></p>

      </div>
</div>
</div>

<?php else: ?>
<div class="row">
<div class="col-sm-12">
<iframe src="<?php echo get_post_custom_values('map url',$post->ID)[0] ?>" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

<div>
        <p><?php the_content(); ?> </p>
        <p><i class="fa fa-phone"></i>&nbsp;&nbsp;<?php echo get_post_custom_values('mobile',$post->ID)[0] ?></p>
        <p><i class="fa fa-envelope"></i>&nbsp;&nbsp;<?php echo get_post_custom_values('email',$post->ID)[0] ?></p>

      </div>
</div>
</div>



<?php endif; ?>






</div>
<div class="margn-rim-30"></div>



</section>
<?php endwhile;endif; ?>
	 
<?php get_footer(); ?>