<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
 $themeOptions = get_option( 'chrs_theme_options' ); 
 $foot = get_field('footer_display', $post->ID);
 if($foot!='no'){ 
?>


<section class="finance-partners" <?php if(get_field('financier_background_image', $post->ID)):echo 'style="background:url('.get_field('financier_background_image', $post->ID).')  no-repeat"'; endif; ?>>
<div class="container-fluid">
<h2><?php echo $themeOptions['tburl']; ?></h2>
<h4><?php echo $themeOptions['fkurl']; ?></h4>
<?php
	$partners = new WP_Query( array( 'post_type' => 'partners') );
	if ( $partners->have_posts() ) : 
?>
<div class="owl-carousel owl-theme margn-tp margn-rim-30" id="owl-exampl4">
	<?php while( $partners->have_posts() ) : $partners->the_post();  
		 $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array('220','220'));
		?>
	 <div class="item"><img src="<?php echo $image[0] ?>" alt="<?php echo the_title() ?>"> </div>
	 <?php endwhile; ?>
</div>
<?php endif; wp_reset_postdata(); ?>
</div>
</section>
<?php } ?>
<footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-xs-12">
        <h6 class="text-center"><?php echo $themeOptions['wpurl']; ?></h6>
        <hr>
       <?php
			wp_nav_menu( array(
				'theme_location' => 'footer',
				'menu_class'     => '',
			 ) );
		?>
      </div>
      
      
      
    </div>
  </div>
</footer>
<div class="footer2">
<p><?php echo $themeOptions['liurl']; ?></p>
</div>


			
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<?php 
if(get_query_var('pagename')=="balance-transfer-calculator"){ ?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/balance-transfer.js" type="text/javascript"></script>
<?php }
?>  
<script>
            $(document).ready(function() {
			   var owl = $('#owl-exampl4');
              owl.owlCarousel({
               
                margin: 20,
                navRewind: true,
				autoplay: true,
				loop:true,

                responsive: {
                  0: {
                    items: 3
                  },
                  600: {
                    items: 4
                  },
                  1000: {
                    items: 5
                  }
                }
              })
			  
            })
			
          </script> 

