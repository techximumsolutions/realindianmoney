<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
get_header(); 
if ( have_posts() ){
if(get_post_type()=='faqs'){
?>	
	<section class="content-rim">
<div class="container">
<h2>FAQs for <?php echo str_replace('Category:','',get_the_archive_title()); ?></h2>
<hr>
<div id="accordion">
	<?php 
	 
	 $queried_object = get_queried_object();
	 $args = array( 'post_type' => 'faqs','taxonomy' => 'faqs_cat','term' => $queried_object->slug, 'order' => 'ASC','posts_per_page' => -1 );
	 $faq = new WP_Query( $args );	
	 while ( $faq->have_posts() ) : $faq->the_post();    ?>
        <div class="card">
        <div class="card-header" id="headingThree">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#faq_<?php echo get_the_ID(); ?>" aria-expanded="false" aria-controls="collapseThree"> <?php the_title(); ?> </button>
          </h5>
        </div>
        <div id="faq_<?php echo get_the_ID(); ?>" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
          <div class="card-body"><?php the_content(); ?></div>
        </div>
      </div>
     <?php endwhile; ?> 
   

   </div>
</div>
</section>

<?php 
}elseif(get_post_type()=='download'){
	get_template_part( 'archive-download_cat', 'page' );	
}
}else{ ?>
	<section class="about-wrap" style=" background:url(images/bank-page-banner.jpg);">
		<div class="container">
		<nav aria-label="breadcrumb">
		  <ol class="breadcrumb">
		    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
		    <li class="breadcrumb-item active" aria-current="page">Category</li>
		  </ol>
		</nav>
		</div>
		</section>
		
		<section class="content-rim blog-detl">
			<div class="container">
				<h1>Not Found</h1>
			</div>
		</section>
<?php }	
get_footer(); ?>
