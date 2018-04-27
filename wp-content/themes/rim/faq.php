<?php
/*
Template Name: Faq
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
<section class="content-rim">
<div class="container">
	<h2><?php the_title(); ?></h2>

<hr>

<div class="row">
<div class="col-sm-12">
<?php the_content(); ?>
</div>
</div>
</div>
</section> 
<?php endwhile;endif;
	 $terms = get_terms('faqs_cat'); // Get all terms of a taxonomy
	if ( $terms && !is_wp_error( $terms ) ) :
?>
	<section class="content-rim" style="margin-bottom: 20px;">
		<div class="container">
			<div class="row">
				<div class="col-3">
				    <div class="grey-box">
				      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		      			<?php $i=0; foreach($terms as $term){ $i++; ?>
		        			<a class="nav-link <?php if($i==1):echo "active show"; endif; ?>" id="v-pills-home-tab" data-toggle="pill" href="#<?php echo $term->slug; ?>" role="tab" aria-controls="v-pills-home" aria-selected="false"><?php echo $term->name; ?></a>
		        		<?php }  ?>
				        
				      </div>
				      </div>
			    </div>
			    <div class="col-9">
					<div class="tab-content" id="v-pills-tabContent">
						<?php $j=0; foreach($terms as $term){ $j++; ?>
							<div class="tab-pane fade <?php if($j==1):echo "active show"; endif; ?>" id="<?php echo $term->slug; ?>" role="tabpanel" aria-labelledby="v-pills-home-tab">
								<h4>FAQs For <?php echo $term->name; ?></h4>
								<div id="accordion">
									<?php $args = array( 'post_type' => 'faqs','taxonomy' => 'faqs_cat','term' => $term->slug,'order' => 'ASC','posts_per_page' => -1 );
										  $faq = new WP_Query( $args );	
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
									  <?php endwhile; ?>
								</div>	  
							  </div>	
							
							  
							  
						<?php } ?>		  
					</div>
				</div>	
			</div>
		</div>		
	</section>
<?php endif; ?>	 
<?php get_footer(); ?>