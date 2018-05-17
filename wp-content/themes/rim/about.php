<?php
/*
Template Name: About
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

<!--<div class="cap-about">
<h5>About Us</h5>
<p>We challenge the accepted</p>
</div>-->

</div>

</section>
<!-- end here -->
<!-- about section start here -->
<?php if($image): ?>
<section class="content-rim">
<div class="container">
<h2><?php the_title(); ?></h2>
<hr>
<div class="row">
<div class="col-sm-7">
<?php the_content(); ?>
</div>
<div class="col-sm-5">
<img src="<?php echo $image[0] ?>" alt="" class="img-fluid">
</div>
</div>
<p class="text-center" style="margin-top:25px;"><?php echo get_post_custom_values('Short Description',$post->ID)[0] ?></p>
</div>
</section>
<?php else: ?>
	<section class="content-rim">
<div class="container">
	<h2><?php the_title(); ?></h2>
	<hr/>
<div class="row">
<div class="col-sm-12">
<?php the_content(); ?>
</div>
</div>
<p class="text-center" style="margin-top:25px;"><?php echo get_post_custom_values('Short Description',$post->ID)[0] ?></p>
</div>
</section> 
<?php endif; endwhile;endif; 
wp_reset_postdata();
if(get_query_var('pagename')=="downloads"){
$terms = get_terms('download_cat'); // Get all terms of a taxonomy
if ( $terms && !is_wp_error( $terms ) ) : 
	?>
	<section class="content-rim margn-btms">
<div class="container">
	<?php 
	foreach(array_chunk($terms,5) as $terms){
		//print_r($terms);
?>
		<div class="row margn-rim-30">
			<?php foreach ($terms as $value) {
					$image = get_field('category_image', 'download_cat_'. $value->term_id); 
					// Get the URL of this category
				    $category_link = get_category_link( $value->term_id );
			?>
				 <div class="col">
					<div class="types-loan">
						<a href="<?php echo esc_url( $category_link ); ?>"> <img src="<?=$image['url']?>" alt="<?=$value->slug?>" class="img-circle img-thumbnail"></a>
					</div>
		  		</div>
		  	<?php } ?>	
		</div>
<?php } ?></div></section><?php endif; } 
if(get_query_var('pagename')=="emi-calculator"){
echo '<section class="content-rim margn-btms"><div class="container">';
include 'emi-cal.php';
echo '</div></section>';
}elseif(get_query_var('pagename')=="balance-transfer-calculator"){
	include 'balance-calc.php';
}
?>
	 
<?php get_footer(); if(get_query_var('pagename')=="emi-calculator"){ ?>
	<script>
$(document).ready(function(){
	 $(".btnClick").click(function(){
		 if($(this).text()=='save'){
			$('#emi-loan-form').submit();
		}
		 var id =$(this).data('id');
		$(this).text('save');
		$('.'+id).prop('disabled', false);
	});
	$(".inputKeyup").keyup(function(){
		$('.new_principle').val($(this).val());
		$('.emisame').val($('.getval_'+$(this).data('time')).val());
		$('.left_time').val($(this).data('time'));
	});
	$(".onchange").on('change',function(){
		$('.emisame').val($(this).val());
		$('.new_principle').val($('.getInputval_'+$(this).data('time')).val());
		$('.left_time').val($(this).data('time'));
	});
});
</script>
<?php } ?>