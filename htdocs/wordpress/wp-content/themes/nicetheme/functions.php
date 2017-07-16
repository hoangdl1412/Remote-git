<?php  
/**
@Khai bao hang gia tri
@theme_URL= duong dan den thu muc theme
@core= lay duong dan cua thu muc core
**/
define('THEME_URL',get_stylesheet_directory_uri() );
define('CORE',THEME_URL."/core");
/**Nhung file /core/init.php
**/
require_once(CORE."/init.php");
/*thiet lap chieu rong noi dung*/
if(!isset($content_width)){
	$content_width=620;
}
/**
@khai bao chuc nang cua theme
**/
if(function_exists('nicetheme_theme_setup')){
	function nicetheme_theme_setup(){
		/*thiet lap textdomain*/
		$languages_folder= THEME_URL.'/languages';
		load_theme_textdomain( 'nicetheme', $languages_folder );
		/*tu dong them link RSS len <head>*/
		add_theme_support('automatic-feed-links');
		/*them post thumbnail*/
		add_theme_support('post-thumbnails');
		/*them kieu post-post format*/
		add_theme_support('post-formats',array(
			'image',
			'video',
			'gallery',
			'quote',
			'link'));
		/* Them title-tag*/
		add_theme_support('title-tag');
		/* custom background*/
		$default_background=array(
			'default_color'=>'#e8e8e8');
		add_theme_support('custom-background',$default_background);
		/*them vi tri hien thi menu*/
		register_nav_menu('primary-menu',__('Primary Menu','nicetheme'));
		/* tao side_bar*/
		$sidebar=array(
		'name'=>__('Main Sidebar','nicetheme'),
		'id'=>'main-sidebar',
		'description'=>__('Default Sidebar'),
		'class'=>'main-sidebar',
		'before-title'=>'<h3 class="widgettitle">',
		'after_title'=>'</h3>'
		);
		register_sidebar($sidebar);
	}
	add_action('init','nicetheme_theme_setup' );
}
/* Template_funtions*/
if(!function_exists('nicetheme_header')){
	function nicetheme_header(){
		?>
		<div class="site-name">
		<?php 
		if(is_home()){
		printf('<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
			get_bloginfo('url'),
			get_bloginfo('description'),
			get_bloginfo('sitename'));
		}
		else{
			printf('<p><a href="%1$s" title="%2$s">%3$s</a></p>',
				get_bloginfo('url'),
				get_bloginfo('description'),
				get_bloginfo('sitename'));
		} 
		?>
		</div>
		<div class="site-description"><?php bloginfo('description'); ?>
		</div>
		<?php
	}
}
/** thiet lap menu**/
if(!function_exists('nicetheme_menu')){
	function nicetheme_menu($menu){
		$menu=array(
			'theme_location'=>$menu,
			'container'=>'nav',
			'container_class'=>$menu
			);
		wp_nav_menu($menu);
	}
}
/*Ham giup phan trang cho index*/
if(!function_exists('nicetheme_pagination')){
	function nicetheme_pagination(){
		if($GLOBALS['WP_Query']->max_num_pages<2){
			return '';
		}
		?>
		<nav class="pagination" role="navigation">
    <?php if ( get_next_post_link() ) : ?>
      <div class="prev"><?php next_posts_link( __('Older Posts', 'nicetheme') ); ?></div>
    <?php endif; ?>
 
    <?php if ( get_previous_post_link() ) : ?>
      <div class="next"><?php previous_posts_link( __('Newer Posts', 'nicetheme') ); ?></div>
    <?php endif; ?>
 
  </nav><?php
	}
}
?>

