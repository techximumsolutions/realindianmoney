<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
 $themeOptions = get_option( 'chrs_theme_options' ); 
?>

<!DOCTYPE html>
<html <?php  language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<section class="top-bar">
<div class="container">
<div class="row">
<div class="col-md-6 col-6 col-sm-6">
<ul class="list-numbr">
<li><a href="mailto:<?php echo $themeOptions['gpurl'] ?>"><i class="fa fa-envelope"></i>&nbsp;&nbsp;<?php echo $themeOptions['gpurl'] ?></a></li>
<li><a href="tel:<?php echo $themeOptions['pturl'] ?>"><i class="fa fa-phone"></i>&nbsp;&nbsp;<?php echo $themeOptions['pturl'] ?></a></li>
 </ul>
</div>
<div class="col-md-3 d-none d-sm-none d-md-block">
<ul class="list-social">
<li><a target="_blank" href="<?php echo $themeOptions['fburl'] ?>"><i class="fa fa-facebook-square"></i></a></li>
<li><a target="_blank" href="<?php echo $themeOptions['twurl'] ?>"><i class="fa fa-twitter-square"></i></a></li>
<li><a target="_blank" href="<?php echo $themeOptions['igurl'] ?>"><i class="fa fa-linkedin-square"></i></a></li>
</ul>
</div>

<div class="col-md-3 col-6 col-sm-6">
<ul class="top-btn">
<li><a href="<?php echo $themeOptions['yturl'] ?>"><i class="fa fa-briefcase"></i> CAREER</a></li>
<li><a target="_blank"  href="<?php echo $themeOptions['ypurl'] ?>"><i class="fa fa-user-plus"></i> LOGIN</a></li>
</ul>
</div>
</div>
</div>


</section>
<!-- end here -->
<!-- menu section start here -->
<section class="logo-bar">
<div class="container">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <?php twentysixteen_the_custom_logo(); ?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  	<?php
  //	echo "<pre>";
	$menu_name = 'primary';
  	$locations = get_nav_menu_locations();
 	$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
  	$menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
	?>
		<ul class="navbar-nav mr-auto">
		<?php
	  	$count = 0;
	    $submenu = false;
		foreach( $menuitems as $item ):
        $link = $item->url;
        $title = $item->title;
		$classesm = implode(' ',$item->classes);
        // item does not have a parent so menu_item_parent equals 0 (false)
        
        if ( !$item->menu_item_parent ):
        // save this id for later comparison with sub-menu items
        $parent_id = $item->ID;
		$activeclass = '';
		 if($item->object_id == $post->ID){
			$activeclass = 'active';
		}	
    ?>

    <li class="nav-item <?php echo $classesm.' '.$activeclass; ?>">
        <a href="<?php echo $link; ?>" <?php if(in_array('dropdown',$item->classes)){ ?> class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" <?php }else{ ?>class="nav-link" <?php } ?>>
            <?php echo $title; ?>
        </a>
    <?php endif; ?>

        <?php if ( $parent_id == $item->menu_item_parent ): ?>
            <?php if ( !$submenu ): $submenu = true; ?>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php endif; ?>

               
                    <a class="dropdown-item <?php echo $classesm; ?>"  href="<?php echo $link; ?>"><?php echo $title; ?></a>
                

            <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
            </div>
            <?php $submenu = false; endif; ?>

        <?php endif; ?>

    <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
    </li>                           
    <?php $submenu = false; endif; ?>

<?php $count++; endforeach; ?>

</ul>
	
  </div>
</nav>

</div>

</section>
<!-- end here -->