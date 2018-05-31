<?php
/*
Template Name: Loan
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
<section class="loan-banner" <?php if($image_feature_url):echo 'style="background:url('.$image_feature_url[0].')  no-repeat"'; endif; ?>>
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
<?php include 'loan-form/'.get_query_var('pagename').'.php'; ?>
</div>

</section>
<!-- end here -->
<!-- about section start here -->
<?php if($image): ?>
<section class="inner-white-bg">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      </div>
      <div class="col-sm-12 col-md-6"> <img src="<?php echo $image[0] ?>" alt="" class="img-fluid"> </div>
    </div>
  </div>
</section>
<!-----Purpose Imgae Deault View--------->
<?php 
	$purposeSection = get_field('purpose_section', $post->ID);
 	if($purposeSection!='circle'){ 
?>
			<section class="grey-bg">
			  <div class="container">
			    <div class="headn-title-h3">
			      <h3><?php echo get_post_custom_values('Purpose Heading',$post->ID)[0] ?></h3>
			      <?php if(isset(get_post_custom_values('Purpose Tagline',$post->ID)[0]) && get_post_custom_values('Purpose Tagline',$post->ID)[0]){ ?><h5 class="text-center"><?php echo get_post_custom_values('Purpose Tagline',$post->ID)[0]; ?></h5><?php } ?>
			    </div>
			    <div class="row">
			      <div class="col-sm-12 col-md-4">
			        <div class="types-loan"> <a href="javascript:void(0)" data-content="<?php echo get_field('purpose_description_1', $post->ID); ?>" class="dataClick"> <img src="<?php echo get_field('purpose_image_1', $post->ID); ?>" alt="" class="img-fluid">
			          <h4><?php echo get_field('purpose_title', $post->ID); ?></h4>
			          <p><?php echo get_field('purpose_short_description_1', $post->ID); ?></p>
					  </a>
			        </div>
			      </div>
			      <div class="col-sm-12 col-md-4">
			        <div class="types-loan"> <a href="javascript:void(0)" data-content="<?php echo get_field('purpose_description_1', $post->ID); ?>" class="dataClick"> <img src="<?php echo get_field('purpose_image_2', $post->ID); ?>" alt="" class="img-fluid">
			          <h4><?php echo get_field('purpose_title_2', $post->ID); ?></h4>
			          <p><?php echo get_field('purpose_short_description_2', $post->ID); ?></p></a>
			        </div>
			      </div>
			      <div class="col-sm-12 col-md-4">
			        <div class="types-loan"> 
						<a href="javascript:void(0)" data-content="<?php echo get_field('purpose_description_1', $post->ID); ?>" class="dataClick"> 
							<img src="<?php echo get_field('purpose_image_3', $post->ID); ?>" alt="" class="img-fluid">
			          <h4><?php echo get_field('purpose_title_3', $post->ID); ?></h4>
			          <p><?php echo get_field('purpose_short_description_3', $post->ID); ?></p></a>
					 
			        </div>
			      </div>
			    </div>
			    <div class="row">
			      <div class="col-sm-12 col-md-4">
			        <div class="types-loan"> <a href="javascript:void(0)" data-content="<?php echo get_field('purpose_description_1', $post->ID); ?>" class="dataClick"> <img src="<?php echo get_field('purpose_image_4', $post->ID); ?>" alt="" class="img-fluid">
			          <h4><?php echo get_field('purpose_title_4', $post->ID); ?></h4>
			          <p><?php echo get_field('purpose_short_description_4', $post->ID); ?></p></a>
			        </div>
			      </div>
			      <div class="col-sm-12 col-md-4">
			        <div class="types-loan"> <a href="javascript:void(0)" data-content="<?php echo get_field('purpose_description_1', $post->ID); ?>" class="dataClick"> <img src="<?php echo get_field('purpose_image_5', $post->ID); ?>" alt="" class="img-fluid">
			          <h4><?php echo get_field('purpose_title_5', $post->ID); ?></h4>
			          <p><?php echo get_field('purpose_short_description_5', $post->ID); ?></p></a>
			        </div>
			      </div>
			      <div class="col-sm-12 col-md-4">
			        <div class="types-loan"> <a href="javascript:void(0)" data-content="<?php echo get_field('purpose_description_1', $post->ID); ?>" class="dataClick"> <img src="<?php echo get_field('purpose_image_6', $post->ID); ?>" alt="" class="img-fluid">
			          <h4><?php echo get_field('purpose_title_6', $post->ID); ?></h4>
			          <p><?php echo get_field('purpose_short_description_6', $post->ID); ?></p></a>
			        </div>
			      </div>
			    </div>
			  </div>
			</section>
<?php }else{ ?>
<!-----Image Circle View-------------->

		<section class="grey-bg">
		  <div class="container">
		    <div class="headn-title-h3">
		        <h3><?php echo get_post_custom_values('Purpose Heading',$post->ID)[0] ?></h3>
		      <?php if(isset(get_post_custom_values('Purpose Tagline',$post->ID)[0]) && get_post_custom_values('Purpose Tagline',$post->ID)[0]){ ?><h5 class="text-center"><?php echo get_post_custom_values('Purpose Tagline',$post->ID)[0]; ?></h5><?php } ?>
		    </div>
		    <div class="row margn-rim-30">
		      <div class="col-sm-4 col-6">
		        <div class="types-loan"><a href="javascript:void(0)" data-content="<?php echo get_field('purpose_description_1', $post->ID); ?>" class="dataClick"> <img src="<?php echo get_field('purpose_image_1', $post->ID); ?>" alt="" class="img-circle img-thumbnail">
		          <h4><?php echo get_field('purpose_title', $post->ID); ?></h4></a>
		        </div>
		      </div>
		      <div class="col-sm-4 col-6">
		        <div class="types-loan"><a href="javascript:void(0)" data-content="<?php echo get_field('purpose_description_1', $post->ID); ?>" class="dataClick"> <img src="<?php echo get_field('purpose_image_2', $post->ID); ?>" alt="" class="img-circle img-thumbnail">
		          <h4><?php echo get_field('purpose_title_2', $post->ID); ?></h4></a>
		        </div>
		      </div>
		      <div class="col-sm-4 col-12">
		        <div class="types-loan"><a href="javascript:void(0)" data-content="<?php echo get_field('purpose_description_1', $post->ID); ?>" class="dataClick"> <img src="<?php echo get_field('purpose_image_3', $post->ID); ?>" alt="" class="img-circle img-thumbnail">
		          <h4><?php echo get_field('purpose_title_3', $post->ID); ?></h4></a>
		        </div>
		      </div>
		    </div>
		    <div class="row margn-rim-30">
		      <div class="col-sm-4 col-6">
		        <div class="types-loan"><a href="javascript:void(0)" data-content="<?php echo get_field('purpose_description_1', $post->ID); ?>" class="dataClick"> <img src="<?php echo get_field('purpose_image_4', $post->ID); ?>" alt="" class="img-circle img-thumbnail">
		          <h4><?php echo get_field('purpose_title_4', $post->ID); ?></h4></a>
		        </div>
		      </div>
		      <div class="col-sm-4 col-6">
		        <div class="types-loan"><a href="javascript:void(0)" data-content="<?php echo get_field('purpose_description_1', $post->ID); ?>" class="dataClick"> <img src="<?php echo get_field('purpose_image_5', $post->ID); ?>" alt="" class="img-circle img-thumbnail">
		          <h4><?php echo get_field('purpose_title_5', $post->ID); ?></h4></a>
		        </div>
		      </div>
		      <div class="col-sm-4 col-12">
		        <div class="types-loan"><a href="javascript:void(0)" data-content="<?php echo get_field('purpose_description_1', $post->ID); ?>" class="dataClick"> <img src="<?php echo get_field('purpose_image_6', $post->ID); ?>" alt="" class="img-circle img-thumbnail">
		          <h4><?php echo get_field('purpose_title_6', $post->ID); ?></h4></a>
		        </div>
		      </div>
		    </div>
		  </div>
		</section>
<?php } ?>
<!--modal start--->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="purposeHeading"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body" id="purposeContent"></div>
    </div>
  </div>
</div>

<!---Modal End---->

<section class="inner-white-bg" style="padding: 40px 0;">
  <div class="container">
    <div class="headn-title-h3">
      <h3><?php echo get_post_custom_values('Benefits Title',$post->ID)[0] ?></h3>
    </div>
    <div id="accordion">
       <?php 
		    $args = array( 'post_type' => 'loan','taxonomy' => 'loan_cat','term' => get_query_var('pagename'), 'order' => 'ASC','posts_per_page' => -1 );
			$faq = new WP_Query( $args );
			//print_r($faq);die;	 
			while ( $faq->have_posts() ) : $faq->the_post();    ?>
				  <div class="card">
				       <div class="card-header" id="heading<?php echo get_the_ID(); ?>">
				          <h5 class="mb-0">
				             <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq_<?php echo get_the_ID(); ?>" aria-expanded="false" aria-controls="faq_<?php echo get_the_ID(); ?>"> <?php the_title(); ?> </button>
				          </h5>
				        </div>
				        <div id="faq_<?php echo get_the_ID(); ?>" class="collapse" aria-labelledby="heading<?php echo get_the_ID(); ?>" data-parent="#accordion">
				          <div class="card-body"><?php the_content(); ?></div>
				        </div>
			      </div>
		  <?php endwhile; wp_reset_postdata();?>    
    </div>
  </div>
</section>

<section class="fast-response">
  <div class="container">
    <div class="headn-title-h3">
      <h3 style="color:#fff;"><?php echo get_post_custom_values('Key Tilte',$post->ID)[0] ?></h3>
    </div>
    <div class="row">
      <div class="col-md-7">
        <?php 
        	echo $second_description = get_field('second_description', $post->ID);
		?>
      </div>
      <div class="col-md-5">
        <div class="white-bg-wrap">
          <?php echo $third_description  = get_field('third_description', $post->ID); ?>
          <a href="#" class="btn btn-warning btn-lg">Apply Now!</a> </div>
      </div>
    </div>
  </div>
</section>

<section class="bank-list-section" <?php if(get_field('footer_image', $post->ID)):echo 'style="background-image:url('.get_field('footer_image', $post->ID).') "'; endif; ?>>
  <div class="container">
    <div class="headn-title-h3">
      <h3 style="color:#fff;"><?php echo get_post_custom_values('Bank Title',$post->ID)[0] ?></h3>
    </div>
    <?php
    	$arags = array(
		    'post_type'      => 'page',
		    'posts_per_page' => -1,
		    'post_parent'    => $post->ID,
		    'order'          => 'ASC',
		    'orderby'        => 'menu_order'
		 );
		$parent = new WP_Query( $arags );
		if ( $parent->have_posts() ) :
	?>
		    <div class="row margn-rim-30">
		      <?php 
		      		while ( $parent->have_posts() ) : $parent->the_post();
					$image_name='feature-image-2';
					if (MultiPostThumbnails::has_post_thumbnail('page', $image_name)) {
						$image_id = MultiPostThumbnails::get_post_thumbnail_id( 'page', $image_name, $post->ID );  // use the MultiPostThumbnails to get the image ID
					    $image_feature_url = wp_get_attachment_image_src( $image_id,'feature-image' ); // define full size src based on image ID
					} 
		      ?>
				      <div class="col-sm-4" style="margin-bottom:30px"> 
				      	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					        <div class="green-bg">
					          <div class="row">
					            <div class="col-sm-12 col-3 col-md-2 col-lg-2 col-xl-2">
					              <div class="circle-bg"> <img src="<?php echo $image_feature_url[0]; ?>" class="img-fluid"> </div>
					            </div>
					            <div class="col-sm-12 col-9 col-md-10 col-lg-10 col-xl-10">
					              <p><?php the_title(); ?></p>
					            </div>
					          </div>
					        </div>
				        </a> 
				     </div>
				<?php endwhile; ?>     
		    </div>
	<?php endif; wp_reset_postdata(); ?>
    
    
  </div>
</section>		
<?php endif; endwhile;endif; ?>
<?php get_footer(); ?>
<script>
	$(document).ready(function(){
		$('.dataClick').on('click',function(){
			var cont=$(this).data('content');
			var heading=$(this).children('h4').text();
			$('#purposeHeading').text(heading);
			$('#purposeContent').html(cont);
			$('#exampleModalCenter').modal('show');
		});
	});
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/loan-form.js"></script>