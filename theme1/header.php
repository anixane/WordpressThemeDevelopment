<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>this is new theme title</title>
	<?php wp_head(); ?>
</head>

<?php if(is_home()): 
	$info=array('homepage'); //for wordpress, always the page having post loop is homepage
	else:
	$info=array('no homepage');
	endif;
?>

<body <?php body_class($info) ?>> <!--navigation bar-->


<div class="container">
	
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#">Awesome Theme</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbar-content">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
			'container'      => false,
			'depth'          => 2,
			'menu_class'     => 'navbar-nav ml-auto',
			'walker'         => new Bootstrap_NavWalker(),
			'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
		) );
		?>
	</div>
</nav>
								
			
			
			
	<img src="<?php header_image(); ?>"  alt="" /> 
