<?php
/*
Template Name: Bank
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
<section class="loan-banner" <?php if($image):echo 'style="background:url('.$image[0].')  no-repeat"'; endif; ?>>
<div class="container">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
  </ol>
</nav>
<h2>Apply for <span><?php the_title(); ?></span></h2>
<style>
	.loan-banner{
		min-height:593px;
	}
</style>
<?php include 'loan-form/'.get_post($post->post_parent)->post_name.'.php'; ?>
<!--<div class="cap-about">
<img src="<?=$image_feature_url[0];?>" alt="" class="img-fluid">
<h5><?php the_title(); ?></h5>
<button type="submit" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#apply-now">Apply Now!</button>
</div>-->

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
		<div class="headn-h3">
			<h3><?php echo get_post_custom_values('Document title',$post->ID)[0] ?></h3>
		</div>


<div id="accordion">
	<?php

	$args = array(
				'sort_order' => 'asc',
				'sort_column' => 'post_title',
				'hierarchical' => 1,
				'exclude' => '',
				'include' => '',
				'meta_key' => '',
				'meta_value' => '',
				'authors' => '',
				'child_of' =>$post->ID,
				'parent' => -1,
				'exclude_tree' => '',
				'number' => '',
				'offset' => 0,
				'post_type' => 'page',
				'post_status' => 'publish'
			); 
			$parent = get_pages($args);
			if ( $parent) :
				//echo"<pre>";print_r($parent);
			$i==0;foreach ($parent as $value) {$i++;
			if($i==1){
				continue;
			}			
	?>
      <div class="card">
        <div class="card-header" id="heading_<?=$value->ID?>">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse_<?=$value->ID?>" aria-expanded="true" aria-controls="collapse_<?=$value->ID?>"><?=$value->post_title?></button>
          </h5>
        </div>
        <div id="collapse_<?=$value->ID?>" class="collapse <?php if($i==2){ ?>show<?php } ?>" aria-labelledby="heading_<?=$value->ID?>" data-parent="#accordion">
          <div class="card-body" id="printablediv_<?=$value->ID?>">
          <?=$value->post_content?>
          <a class="pull-right" href="#" onclick="javascript:printDiv('printablediv_<?=$value->ID?>')"  title="print"><i class="fa fa-print"></i></a>
          </div>
        </div>
      </div>
      <?php } endif; ?>
    </div>
<div class="headn-h3">
<h3><?php echo get_post_custom_values('Charges Title',$post->ID)[0] ?></h3>
</div>
<?php

	$args = array(
				'sort_order' => 'asc',
				'sort_column' => 'post_title',
				'hierarchical' => 1,
				'exclude' => '',
				'include' => '',
				'meta_key' => '',
				'meta_value' => '',
				'authors' => '',
				'child_of' =>$post->ID,
				'parent' => -1,
				'exclude_tree' => '',
				'number' => '',
				'offset' => 0,
				'post_type' => 'page',
				'post_status' => 'publish'
			); 
			$parent = get_pages($args);
			if ( $parent) :
			
?>
<p>Click here to view the <a href="<?php echo get_permalink($parent[0]->ID); ?>">Home Loan Interest Rates and Service Charges</a></p>
<?php  endif; wp_reset_postdata(); ?>

</div>
</section>
	 <section class="grey-bg">
<div class="container">
<div class="headn-title-h3">
      <h3>EMI <span>Calculator</span> </h3>
    </div>
    <div class="calculator-section margn-rim-30">
   <?php include 'emi-cal.php'; ?>
        <button type="submit" class="btn btn-warning btn-lg center-blocks" data-toggle="modal" data-target="#apply-now">Apply Now!</button>

    </div>
</div>
</section>
<?php get_footer(); ?>
<script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>
