<?php
	
/*
	//setting thumbnail size :p
	set_post_thumbnail_size( 200, 200 ); //not working bc :/
*/
	
	function awesome_enqueue_script(){
		
		//css
		wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/css/bootstrap.min.css',array(),'4.0.0','all');
		wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/awesome.css',array(),'1.0.0','all');
		
		//jss
		wp_enqueue_script('jquery');
		wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '4.0.0', 'true');
		wp_enqueue_script('customjs', get_template_directory_uri() . '/js/awesome.js', array(), '1.0.0', 'true');
		
	}
	
	add_action('wp_enqueue_scripts','awesome_enqueue_script');
	
	function add_menu(){
		add_theme_support('menus'); 
		register_nav_menu('primary', 'primary navigation menu');
		register_nav_menu('secondary', 'secondary navigation menu');
	}
	add_action('init', 'add_menu');
	
	
	add_theme_support('custom-background');
	add_theme_support('custom-header');
	add_theme_support('post-thumbnails'); //its for thumbnail of post
	add_theme_support('post-formats', array('aside','image','video'));
	
	require get_template_directory() . '/bootstrap-navwalker.php';
	register_nav_menus( array(
    'menu-1' => esc_html__( 'Primary', 'theme-textdomain' ),
) );

	//adding sidebar
	
	function awesome_widget_setup(){
		register_sidebar( $args );
		$args = array(
	'name'          => 'sidebar',
	'id'            => 'sidebar-1',
	'description'   => 'standard sidebar',
	'class'         => 'custom',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => "</li>\n",
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => "</h2>\n",
);
		
	}
	
	add_action('widgets_init', 'awesome_widget_setup');
