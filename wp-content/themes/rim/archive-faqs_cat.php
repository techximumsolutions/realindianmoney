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
<h2>FAQs for Loan</h2>
<hr>
<div id="accordion">
	<?php 
	$queried_object = get_queried_object();
	echo "<pre>";
	print_r($queried_object);
	
	$args = array( 'post_type' => 'faqs','taxonomy' => 'faqs_cat','term' => 'income-tax', 'order' => 'ASC','posts_per_page' => -1 );
	//$args = array('post_type' => 'faqs','cat'=>9);
	query_posts($args);
	
	//query_posts($args); 
  while ( have_posts() ) : the_post();    ?>
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"> <?php the_tile(); ?> </button>
          </h5>
        </div>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
          <div class="card-body"> <?php the_title();?>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </div>
        </div>
      </div>
     <?php endwhile; ?> 
   </div>
</div>
</section>

<?php 
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
