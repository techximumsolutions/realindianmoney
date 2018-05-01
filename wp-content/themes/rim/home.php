<?php
/*
Template Name: Home Page
 */
get_header();
$banner = new WP_Query( array( 'post_type' => 'slider') );
if ( $banner->have_posts() ) : 
	
?>

 <!-- slider section start here -->
<section class="slider-rim">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php  $i=0; while ( $banner->have_posts() ) : $banner->the_post(); $i++; ?> 
	    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $post->ID; ?>" class="<?php if($i==1):echo "active"; endif;?>"></li>
	<?php endwhile;wp_reset_postdata();  ?>
  </ol>
  <div class="carousel-inner">
  	<?php
  		$j=0;while ( $banner->have_posts() ) : $banner->the_post(); $j++;
	 $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array('220','220'));
		$image=$image[0];
  	 ?>
	    <div class="carousel-item <?php if($j==1):echo "active"; endif;  ?>">
	      <img src="<?php echo $image; ?>" alt="<?php  the_title(); ?>">
	    </div>
   <?php endwhile;
   wp_reset_postdata();  ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="serach-boxs">
<h2><?php echo get_post_custom_values('Slider Heading',$post->ID)[0] ?></h2>
<select class="custom-select custom-select-lg mb-3" onchange="location = this.value;">
  <?php $sliderText = new WP_Query( array( 'post_type' => 'slidertext') );
	if ( $sliderText->have_posts() ) : 
	while($sliderText->have_posts()):$sliderText->the_post();
	?>
		<option value="<?php echo get_post_custom_values('url',$post->ID)[0]; ?>"><?php the_title(); ?></option>
	<?php endwhile;wp_reset_postdata();endif; ?>
</select>
<p><?php echo get_post_custom_values('slider tagline',$post->ID)[0]; ?></p>
</div>

</section>

<?php endif;  ?> 

<!-- end here -->
<!-- services section start here -->
<section class="service-bg">
<div class="container">
<div class="row">
<div class="col-md-10 offset-md-1 col-12 col-sm-12">
<h1><?php echo get_post_custom_values('About Title',$post->ID)[0] ?></h1>
<h4><?php echo get_post_custom_values('About Description',$post->ID)[0] ?></h4>
</div>
</div>

<div class="row margn-rim-35">
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="servi-thumb">
<img src="<?php echo get_field('image_1', $post->ID); ?>" alt="" class="img-fluid2">
<div class="transbg">
                <div class="details">
                  <p><?php echo get_field('description_1', $post->ID); ?><br>
                    <a href="<?php echo get_field('url_1', $post->ID); ?>"><span>Apply Now</span></a>
                  </p>
                </div>
                <div class="title"><h3>
                  <?php echo get_field('title_1', $post->ID); ?></h3></div>
            </div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="servi-thumb">
<img src="<?php echo get_field('image_2', $post->ID); ?>" alt="" class="img-fluid2">
<div class="transbg">
                <div class="details">
                  <p><?php echo get_field('description_2', $post->ID); ?><br>
                    <a href="<?php echo get_field('url_2', $post->ID); ?>"><span>Apply Now</span></a>
                  </p>
                </div>
                <div class="title"><h3>
                  <?php echo get_field('title_2', $post->ID); ?></h3></div>
            </div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 col-12 d-md-none d-lg-block">
<div class="servi-thumb">
<img src="<?php echo get_field('image_3', $post->ID); ?>" alt="" class="img-fluid2">
<div class="transbg">
                <div class="details">
                  <p><?php echo get_field('description_3', $post->ID); ?><br>
                    <a href="<?php echo get_field('url_3', $post->ID); ?>"><span>Apply Now</span></a>
                  </p>
                </div>
                <div class="title"><h3>
                  <?php echo get_field('title_3', $post->ID); ?></h3></div>
            </div>
</div>
</div>
</div>


<div class="row margn-rim-35">
<div class="col-lg-6 col-md-12 col-sm-12 col-12">
<div class="servi-thumb">
<img src="<?php echo get_field('image_4', $post->ID); ?>" alt="" class="img-fluid2">
<div class="transbg">
                <div class="details">
                  <p><?php echo get_field('description_4', $post->ID); ?><br>
                    <a href="<?php echo get_field('url_4', $post->ID); ?>"><span>Apply Now</span></a>
                  </p>
                </div>
                <div class="title"><h3>
                  <?php echo get_field('title_4', $post->ID); ?></h3></div>
            </div>
</div>
</div>
<div class="col-lg-6 col-md-12 col-sm-12 col-12">
<div class="servi-thumb">
<img src="<?php echo get_field('image_5', $post->ID); ?>" alt="" class="img-fluid2">
<div class="transbg">
                <div class="details">
                  <p><?php echo get_field('description_5', $post->ID); ?><br>
                    <a href="<?php echo get_field('url_5', $post->ID); ?>"><span>Apply Now</span></a>
                  </p>
                </div>
                <div class="title"><h3>
                  <?php echo get_field('title_5', $post->ID); ?></h3></div>
            </div>
</div>
</div>

</div>


<div class="row margn-rim-35">
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="servi-thumb">
<img src="<?php echo get_field('image_6', $post->ID); ?>" alt="" class="img-fluid2">
<div class="transbg">
                <div class="details">
                  <p><?php echo get_field('description_6', $post->ID); ?><br>
                    <a href="<?php echo get_field('url_6', $post->ID); ?>"><span>Apply Now</span></a>
                  </p>
                </div>
                <div class="title"><h3>
                  <?php echo get_field('title_6', $post->ID); ?></h3></div>
            </div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="servi-thumb">
<img src="<?php echo get_field('image_7', $post->ID); ?>" alt="" class="img-fluid2">
<div class="transbg">
                <div class="details">
                  <p><?php echo get_field('description_7', $post->ID); ?><br>
                    <a href="<?php echo get_field('url_7', $post->ID); ?>"><span>Apply Now</span></a>
                  </p>
                </div>
                <div class="title"><h3>
                  <?php echo get_field('title_7', $post->ID); ?></h3></div>
            </div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 col-12">
<div class="servi-thumb">
<img src="<?php echo get_field('image_8', $post->ID); ?>" alt="" class="img-fluid2">
<div class="transbg">
                <div class="details">
                  <p><?php echo get_field('description_8', $post->ID); ?><br>
                    <a href="<?php echo get_field('url_8', $post->ID); ?>"><span>Apply Now</span></a>
                  </p>
                </div>
                <div class="title"><h3>
                  <?php echo get_field('title_8', $post->ID); ?></h3></div>
            </div>
</div>
</div>
<div class="col-lg-4 col-md-6 col-sm-12 col-12 d-lg-none d-xl-none">
<div class="servi-thumb">
<img src="<?php echo get_field('image_3', $post->ID); ?>" alt="" class="img-fluid2">
<div class="transbg">
                <div class="details">
                  <p><?php echo get_field('description_3', $post->ID); ?><br>
                    <a href="<?php echo get_field('url_3', $post->ID); ?>"><span>Apply Now</span></a>
                  </p>
                </div>
                <div class="title"><h3>
                  <?php echo get_field('title_3', $post->ID); ?></h3></div>
            </div>
</div>
</div>
</div>

</div>
</section>
<!-- end here -->
<!-- good thing section start here -->
<section class="good-thing">
<div class="container">
<div class="row">
<div class="col-md-10 offset-md-1 col-12 col-sm-12">
<h2><?php echo get_post_custom_values('Good Thing title',$post->ID)[0] ?></h2>
<h4><?php echo get_post_custom_values('Good Thing Description',$post->ID)[0] ?></h4>
</div>
</div>
<div class="row margn-rim-30" >
<?php $goodThing = new WP_Query( array( 'post_type' => 'goodthing') );
	if ( $goodThing->have_posts() ) : 
	while($goodThing->have_posts()):$goodThing->the_post();
	$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array('220','220'));
	?>
		<div class="col-sm-4">
			<div class="icon-list">
				<img src="<?php echo $image[0] ?>" alt="<?php the_title(); ?>" class="img-fluid">
			</div>
			<h3><?php the_title(); ?></h3>
			<?php the_content(); ?>
		</div>
<?php endwhile;wp_reset_postdata();endif; ?>	

</div>


</div>
</section>
<!-- end here -->
<!-- latest blog section start here -->
<section class="blog-section">
<div class="container">
<h2><?php echo get_post_custom_values('Blog Title',$post->ID)[0] ?></h2>

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
<!-- end here -->
<!-- testimonials section start  here -->
<section class="testimonial-wrap">
<div class="container">
<h2><?php echo get_post_custom_values('Testimonial Title',$post->ID)[0] ?></h2>
<?php 
	$testimonial=new WP_Query( array( 'post_type' => 'testimonials') );
	if ( $testimonial->have_posts() ) :  
?>
<div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
 
  <div class="carousel-inner">
  	<?php $k=0;while($testimonial->have_posts()): $testimonial->the_post(); $k++;
	      $image=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array('115','115'));
			
  	?>
	    <div class="carousel-item <?php if($k==1): echo "active "; endif; ?> text-center">
	    <img src="<?php echo $image[0]; ?>" alt="" class=" img-fluid">
	   	<?php the_content(); ?>
	    <div class="id-name">- <?php the_title(); ?>, <span><?php echo get_post_custom_values('Location',$post->ID)[0];  ?></span></div>
	    </div>
	 <?php endwhile; ?>   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php endif; wp_reset_postdata();  ?>
</div>
</section>
<!-- end here -->

<!-- finance-partners section start  here -->
<?php get_footer(); ?>