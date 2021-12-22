<?php
//* Habilitando imagens destacadas *
add_theme_support ('post-thumbnails');
//add_image_size('custom', 600, 300, true);


// * registro do menu *
add_theme_support ('menus');
register_nav_menus( array(
    'primary' => __( 'Menu-header', 'menu-header' ),
) );  

// * registro custom pot type Slider *

add_action( 'init', 'slider_register' );
function slider_register() {
    $labels = array(
      'name' => _x('Slider', 'post type general name'),
      'singular_name' => _x('Slider', 'post type general name'),
      'add_new' =>_x('Adicionar slider', 'slider'),
      'add_new_item' => _('Adicionar slider'),
      'edit_item' => _('Editar slider'),
      'new_item' => _( 'Novo slider' ),
      'view_item'  => _('ver slider'),
      'search_items' => _( 'procurar slider'),
	  'not_found' => _( 'Nada encontrado'),
	  'not_found_in_trash' => _( 'Nada encontrado no lixo'),
	  'parent_item_colon' => ''
    );
	$args = array(
	'labels' =>  $labels,
	'public' => true,
	'publicly_queryable' => true,
	'show_ul' => true,
	'query_var' => true,
	'rewrite' => true,
	'has_archive'  => true,
	'menu_icon' => 'dashicons-images-alt',
	'capability_type' => 'post',
	'hierarchical' => false,
	'menu_position' => 6,
	'supports' => array ('title' , 'thumbnail'),
  );
	register_post_type( 'slider', $args );
}
// -------- Create single page post


add_filter('single_template', 'create_single_template');

function create_single_template( $template ) {
	global $post;

	$categories = get_the_category();
	// caso não tenhamos categoria retornamos o template default.
	if ( ! $categories )
			return $template; 

	//resgatando o post type
	$post_type = get_post_type( $post->ID );

	$templates = array();

	foreach ( $categories as $category ) {
			// adicionando templates por id e slug
			$templates[] = "single-{$post_type}-{$category->slug}.php";
			$templates[] = "single-{$post_type}-{$category->term_id}.php";
	}

	// adicionando os templates padrões
	$templates[] = "single-{$post_type}.php";
	$templates[] = 'single.php';
	$templates[] = 'singular.php';
	$templates[] = 'index.php';

	return locate_template( $templates );
}