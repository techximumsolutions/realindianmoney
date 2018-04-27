<?php
/*
Template Name: Area_calculator
 */
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post();
$image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'full');
$image_name='feature-image-2';
if (MultiPostThumbnails::has_post_thumbnail('page', $image_name)) {
	$image_id = MultiPostThumbnails::get_post_thumbnail_id( 'page', $image_name, $post->ID );  // use the MultiPostThumbnails to get the image ID
    $image_feature_url = wp_get_attachment_image_src( $image_id,'feature-image' ); // define full size src based on image ID
} 

global $wpdb;

  $table_name = $wpdb->prefix . "units";
  $units = $wpdb->get_results( "SELECT * FROM $table_name" );
 if(isset($_POST) && $_POST){
 	$area_num=$_POST['area_num'];
	$fromUnit=$_POST['fromUnit'];
	$toUnit=$_POST['toUnit'];
 	$data = $wpdb->get_row( "SELECT * FROM $table_name where id=$fromUnit" );
	$data_rev = $wpdb->get_row( "SELECT * FROM $table_name where id=$toUnit" );
	$result=$area_num/$data->unit_value*$data_rev->unit_value;
	
	
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
<?php if($image): ?>
		<section class="content-rim">
			<div class="container">
				<div class="row">
					<div class="col-sm-7">
						<h2><?php the_title(); ?></h2>
							<?php the_content(); ?>
							<div class="grey-bg5">
								<form class="form" id="form1" method="post">
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
										        <div class="input-group mb-2">
										            <div class="input-group-prepend">
										                <div class="input-group-text">Area</div>
										              </div>
										         	<input type="text" value="<?php echo isset($area_num)?$area_num:''; ?>" name="area_num" class="form-control" id="area">
										         </div>
										     </div>
										  </div>
										<div class="col-sm-6">
											<div class="form-group">
											<select id="fromUnit" name="fromUnit" class="form-control">
												<option value="">--- Unit---</option>
												<?php foreach($units as $item){ ?>
													<option value="<?php echo $item->id ?>" <?php echo (isset($fromUnit) && $fromUnit==$item->id)?'selected="selected"':''; ?>><?php echo $item->unit_name; ?></option>
												<?php } ?>
											</select>
											</div>
										</div>
									</div>
								
									<div class="row">
										<div class="col-sm-12">
											<div class="form-group">
									           <div class="input-group mb-2">
									              <div class="input-group-prepend">
									                	<div class="input-group-text">Convert to</div>
									              </div>
									              <select id="toUnit" name="toUnit" class="form-control">
														<option value="">--- Unit---</option>
														<?php foreach($units as $item){ ?>
															<option value="<?php echo $item->id ?>"  <?php echo (isset($toUnit) && $toUnit==$item->id)?'selected="selected"':''; ?>><?php echo $item->unit_name; ?></option>
														<?php } ?>
												  </select>
									            </div>
									          </div>
									     </div>
									</div>
									<hr>
									<button type="submit" class="btn btn-primary"  onclick="return onlyNumericValue()">Calculate</button>
									<hr>
									<div class="form-group">
							            <div class="input-group mb-2">
							              <div class="input-group-prepend">
							                <div class="input-group-text">Result</div>
							              </div>
							              <input type="text" value="<?php echo (isset($result) && $result!='INF')?round($result, 2):'0'; ?>" class="form-control" id="inlineFormInputGroup" disabled="">
							            </div>
									</div>
								</form>
							</div>
					</div>
					<div class="col-sm-5">
						<img src="<?php echo $image[0] ?>" alt="" class="img-fluid">
					</div>
				</div>
			</div>
		</section>
<?php endif; endwhile;endif; ?>
<?php get_footer(); ?>

<script type="text/javascript" language="javascript">
	function onlyNumericValue(){
		if (isNaN(document.forms['form1'].elements['area'].value))
        {
            alert("Please enter numeric values In Area Fields ." );
            document.forms['form1'].elements['area'].focus();
            return false;
        }
        if (document.getElementById("area").value=='')
        {
        	alert("Please enter some numeric values In Area Fields ." );
            	document.getElementById("area").focus();
            return false;
        }
        if (document.getElementById("area").value !='')
        {
			var ar = document.getElementById("area").value;
        	if(ar.trim() ==''){
        	alert("Please enter some numeric values In Area Fields ." );
            	document.getElementById("area").focus();
            	return false;
        	}
        }
        if (document.getElementById("fromUnit").value=='')
        {
        	alert("Please Select From Unit ." );
            document.getElementById("fromUnit").focus();
            return false;
        }
        if (document.getElementById("toUnit").value=='')
        {
        	alert("Please Select To Unit  ." );
            document.getElementById("toUnit").focus();
            return false;
        }
    }
	
	
	</script>