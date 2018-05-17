<?php get_header(); ?>
<section class="about-wrap">
<div class="container">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
    <li class="breadcrumb-item"><a href="#">Downloads</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo str_replace('Download Category:','',get_the_archive_title()); ?></li>
  </ol>
</nav>



</div>

</section>
<!-- end here -->
<!-- bank list section start here -->
<section class="content-rim margn-btms">
<div class="container">
<h2><?php echo str_replace('Category:','',get_the_archive_title()); ?></h2>
<hr>
<?php the_archive_description(); 
 $queried_object = get_queried_object();
 $args = array( 'post_type' => 'download','taxonomy' => 'download_cat','term' => $queried_object->slug, 'order' => 'desc','posts_per_page' => -1 );
 $download = new WP_Query( $args );	
 if($download->have_posts()):
?>
	<table class="table table-bordered dcmnt-reqred">
	<thead>
	<tr>
	<th>Format Name</th>
	<th>Download</th>
	</tr>
	</thead>
	<tbody>
	<?php  while ( $download->have_posts() ) : $download->the_post();    
		$a = new SimpleXMLElement(get_the_content()); 
		?>	
		<tr>
			<td><?php the_title(); ?></td>
			<td><a href="<?php echo $a['href']; ?>" target="_blank" download><i class="fa fa-file-pdf-o"></i> Download <i class="fa fa-download"></i></a></td>
		</tr>
	<?php endwhile; ?>		
	</tbody>
	</table>
<?php endif; ?>	




    











</div>
</section>

 
<?php get_footer(); ?>