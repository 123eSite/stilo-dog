<?php

/*-----------------------------------------------------------------------------------*/
/* Configurações do admin
/*-----------------------------------------------------------------------------------*/

// Remove a versão do WP no front
remove_action('wp_head','wp_generator');

// Remove itens do menu

function remove_menus(){

  //remove_menu_page( 'index.php' );                  //Dashboard
  remove_menu_page( 'edit.php' );                   //Posts
  //remove_menu_page( 'upload.php' );                 //Media
  //remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments
  //remove_menu_page( 'themes.php' );                 //Appearance
  //remove_menu_page( 'plugins.php' );                //Plugins
  //remove_menu_page( 'users.php' );                  //Users
  //remove_menu_page( 'tools.php' );                  //Tools
  //remove_menu_page( 'options-general.php' );        //Settings

}
add_action( 'admin_menu', 'remove_menus' );

// Add suporte aos formatos de post
//add_theme_support( 'post-formats', array( 'gallery', 'image', 'video' ) );
//add_theme_support( 'post-thumbnails' );

// Não adiciona o jquery e scripts padrões do WP
function my_script() {
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', get_bloginfo('template_url').'/assets/js/jquery-3.6.0.min.js', false, NULL);
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'my_script');


// Altera imagem login

function custom_login_logo() {
    echo '<style type="text/css">
        .login h1 a { background-image:url("'.get_stylesheet_directory_uri().'/assets/images/stilo-dog.png") !important; background-size: 150px 150px; width: 150px; height: 150px; background-position: 0px 0px;}
    </style>';
}
add_action('login_head', 'custom_login_logo');


// Adiciona suporte a widgets

/**
 * Register our sidebars and widgetized areas.
 *
 */
/*if (function_exists('register_sidebar')) {

    register_sidebar(array(
        'name' => 'Sidebar Calendário',
        'id'   => 'sidebar-calendario',
        'description'   => 'Aqui pode inserir o calendário.',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));

}*/

// Registra o menu
register_nav_menus( array ('top-menu' => __( 'Menu Principal', 'Stilo dog' ), 'footer-menu' => __( 'Menu Rodapé', 'Stilo dog' )));


/*-----------------------------------------------------------------------------------*/
/* Configurações do tema
/*-----------------------------------------------------------------------------------*/

// html5 support
//add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

//title tag
//add_theme_support( 'title-tag' );


/*-----------------------------------------------------------------------------------*/
/* Paginação
/*-----------------------------------------------------------------------------------*/

function attach_pagination($url){
    global $wp_query;
    $page = max(get_query_var('paged'),1);
    $page_link = get_pagenum_link();
    $big = 999999999; // need an unlikely integer
    if(get_query_var('paged') == 0) $page_link .= '1/';

    $page_links = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'prev_next'    => false,
        'prev_text' => '',
        'next_text' => '',
        'total' => $wp_query->max_num_pages,
        'current' => $page,
        'type' => 'array'
    ));

    if ( $page_links ) {

    echo '<div class="paginations">';

        if(get_previous_posts_link()) {
			echo '<a class="post-pagination__prev" href="' . get_bloginfo('url') . $url . '"><i class="gv-icon-164"></i></a>';
        }
        foreach($page_links as $link) {
            echo   $link  ;
        }
        if(get_next_posts_link()) {
			echo '<a class="post-pagination__next" href="' . get_bloginfo('url') . $url . 'page/' . $wp_query->max_num_pages . '/' . '"><i class="gv-icon-165"></i></a>';
        }
    echo '</div>';
    }
}
// adiciona o nome do slug a função body_class
function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
        $classes[] = $post->post_name;
    }
    return $classes;
}
//add_filter( 'body_class', 'add_slug_body_class' );


// tamanho de imagens personalizadas

if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'carrossel', 679, 797, true);
    add_image_size( 'carrossel-fotos', 52, 52, true);
    add_image_size( 'categorias1', 332, 391, true);
    add_image_size( 'categorias2', 336, 385, true);
    add_image_size( 'produto-thumb', 126, 126, true);
    add_image_size( 'produto-thumb-p', 241, 237, true);
    add_image_size( 'produto-thumb-m', 328, 245, true);
    add_image_size( 'produto-thumb-g', 445, 445, true);
    add_image_size( 'produto-full', 1200, 1200, false);
    add_image_size( 'icone', 120, 120, true);
    add_image_size( 'sobre1', 331, 463, true);
    add_image_size( 'sobre2', 466, 669, true);
    add_image_size( 'depoimentos1', 73, 96, true);
    add_image_size( 'depoimentos2', 98, 141, true);
    add_image_size( 'depoimentos3', 122, 189, true);
    add_image_size( 'depoimentos4', 73, 109, true);
    add_image_size( 'depoimentos5', 159, 232, true);
    add_image_size( 'depoimentos6', 98, 147, true);
}

/* Options Tema */

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Conteúdos Adicionais',
        'menu_title'    => 'Conteúdos Adicionais',
        'menu_slug'     => 'conteudos-adicionais',
        'capability'    => 'edit_posts',
        'redirect'  => false
    ));

}

// Funções do Tema

//LIMITAR OS CARACTERES DO THE_EXCERTP() NO WORDPRESS
function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);

    if (count($excerpt)>=$limit) {

        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';

    } else {

        $excerpt = implode(" ",$excerpt);
    }

    $excerpt = preg_replace('`[[^]]*]`','',$excerpt);

    return $excerpt;
}

function cutText($limit, $s) {
    $max_length = $limit;

    if (strlen($s) > $max_length)
    {
        $offset = ($max_length - 3) - strlen($s);
        $s = substr($s, 0, strrpos($s, ' ', $offset)) . '...';
    }

    return $s;
}

// Verifica se a página é filha
function is_tree($pid) {
    global $post;

    if ( is_page($pid) )
        return true;

    $anc = get_post_ancestors( $post->ID );
    foreach ( $anc as $ancestor ) {
        if( is_page() && $ancestor == $pid ) {
            return true;
        }
    }
    return false;
}


// Retorna a Slug da Pag
function the_slug($echo=true){
	$slug = basename(get_permalink());
	do_action('before_slug', $slug);
	$slug = apply_filters('slug_filter', $slug);
	if( $echo ) echo $slug;
		do_action('after_slug', $slug);
	return $slug;
}


// Função para os compartilhamentos de todos os posts

function  addSharePost($link, $titulo/*, $imagem*/) {
    //render
    $str = '';

    //facebook
    $str .= '<a class="blog-one__share" original-title="FACEBOOK" href="http://www.facebook.com/sharer.php?u=' . urlencode( $link ) . '" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;"><i class="fab fa-facebook"></i></a>';

    //twitter
    $str .= '<a class="blog-one__share" original-title="TWITTER" href="https://twitter.com/intent/tweet?text=' . urlencode( strip_tags( $titulo ) ) . '&amp;url=' . urlencode( $link ) . '&amp;via=' . urlencode( $twitter_user ? $twitter_user : get_bloginfo( 'name' ) ) . '" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;"><i class="fab fa-twitter"></i></a>';

    //google plus
    /*$str .= '<a original-title="GOOGLE" href="http://plus.google.com/share?url=' . urlencode( $link ) . '" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;"><i class="fab fa-google"></i></a>';*/

    //pinterest
    /*$str .= '<a original-title="PINTEREST" href="http://pinterest.com/pin/create/button/?url=' . urlencode( $link ) . '&amp;media=' . ( ! empty( $imagem ) ? $imagem : '' ) . '" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;"><i class="fa fa-pinterest"></i></a>';*/

    //linkedin
    $str .= '<a class="blog-one__share" original-title="LINKEDIN" href="http://linkedin.com/shareArticle?mini=true&amp;url=' . urlencode( $link ) . '&amp;title=' . urlencode( strip_tags( $titulo ) ) . '" onclick="window.open(this.href, \'mywin\',\'left=50,top=50,width=600,height=350,toolbar=0\'); return false;"><i class="fab fa-linkedin-in"></i></a>';


    return $str;
}

/* Parse the video uri/url to determine the video type/source and the video id */
function parse_video_uri( $url ) {

	// Parse the url
	$parse = parse_url( $url );

	// Set blank variables
	$video_type = '';
	$video_id = '';

	// Url is http://youtu.be/xxxx
	if ( $parse['host'] == 'youtu.be' ) {

		$video_type = 'youtube';

		$video_id = ltrim( $parse['path'],'/' );

	}

	// Url is http://www.youtube.com/watch?v=xxxx
	// or http://www.youtube.com/watch?feature=player_embedded&v=xxx
	// or http://www.youtube.com/embed/xxxx
	if ( ( $parse['host'] == 'youtube.com' ) || ( $parse['host'] == 'www.youtube.com' ) ) {

		$video_type = 'youtube';

		parse_str( $parse['query'] );

		$video_id = $v;

		if ( !empty( $feature ) )
			$video_id = end( explode( 'v=', $parse['query'] ) );

		if ( strpos( $parse['path'], 'embed' ) == 1 )
			$video_id = end( explode( '/', $parse['path'] ) );

	}

	// Url is http://www.vimeo.com
	if ( ( $parse['host'] == 'vimeo.com' ) || ( $parse['host'] == 'www.vimeo.com' ) ) {

		$video_type = 'vimeo';

		$video_id = ltrim( $parse['path'],'/' );

	}
	$host_names = explode(".", $parse['host'] );
	$rebuild = ( ! empty( $host_names[1] ) ? $host_names[1] : '') . '.' . ( ! empty($host_names[2] ) ? $host_names[2] : '');
	// Url is an oembed url wistia.com
	if ( ( $rebuild == 'wistia.com' ) || ( $rebuild == 'wi.st.com' ) ) {

		$video_type = 'wistia';

		if ( strpos( $parse['path'], 'medias' ) == 1 )
				$video_id = end( explode( '/', $parse['path'] ) );

	}

	// If recognised type return video array
	if ( !empty( $video_type ) ) {

		$video_array = array(
			'type' => $video_type,
			'id' => $video_id
		);

		return $video_array;

	} else {

		return false;

	}

}

/* Ajusta o funcionamento da páginação nas páginas de Archivo e Busca */
function custom_posts_per_page( $query ) {

    if ( $query->is_archive() ) {
        set_query_var('posts_per_page', 5);
    }

	if ( $query->is_search() ) {
        set_query_var('posts_per_page', 5);
    }
}
//add_action( 'pre_get_posts', 'custom_posts_per_page' );


/* Customize wp get archives */

/*add_filter( 'get_archives_link', function( $link_html, $url, $text, $format, $before, $after ) {

    if ( 'custom' == $format ) {
        $link_html = "\t<li><a href='$url' class='clearfix'><span class='inner clearfix'><span class='txt1'>$text</span></a></li>\n";
    }

    return $link_html;

}, 10, 6 );*/


/* add_filter( 'wp_nav_menu_objects', 'add_has_children_to_nav_items' );

function add_has_children_to_nav_items( $items )
{
    $parents = wp_list_pluck( $items, 'menu_item_parent');

    foreach ( $items as $item )
        in_array( $item->ID, $parents ) && $item->classes[] = 'dropdown';

    return $items;
} */



// Adiciona Classe a tag a do menu
function add_menu_link_class($atts, $item, $args)
{
    $atts['class'] = 'nav-link';
    return $atts;
}
//add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);

// Adiciona Classe a li do menu
function add_classes_on_li($classes, $item, $args) {
  $classes[] = 'has-submenu';
  return $classes;
}
//add_filter('nav_menu_css_class','add_classes_on_li',1,3);

function replace_submenu_class($menu) {
    $menu = preg_replace('/ class="sub-menu"/','/ class="submenu-nav" /',$menu);
    return $menu;
  }
//add_filter('wp_nav_menu','replace_submenu_class');

function clean($string) {
    $string = str_replace(' ', '', $string); // Replaces all spaces with hyphens.

    return str_replace(["-", "–"], '', $string);
    // Removes special chars.
 }


 /* -------------- WOOCOMMERCE -------------- */

// Adiciona suporte ao Woocommerce
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'woocommerce_support' );

// -------------------- Register Sidebar --------------------- //
if (!function_exists('vivacom_widgets_init')) {
    add_action('widgets_init', 'vivacom_widgets_init');
    function vivacom_widgets_init()
    {
        register_sidebar(array(
            'name' => 'Woocommerce Sidebar',
            'id' => 'woocommerce-widget',
            'description' => esc_html__('Itens na lateral da págiona dos produtos', 'Yaoh'),
            'before_widget' => ' ',
            'after_widget' => '',
            'before_title' => '<h2 class="single-filter-widget--title">',
            'after_title' => '</h2>',
        ));
    }
}

// Change button text
function ts_change_proceed_to_checkout_text($translated_text, $text, $domain) {
    if ($text === 'Proceed to checkout') {
        $translated_text = 'Finalizar compra'; // Change to your desired text
    }
    return $translated_text;
}
add_filter('gettext', 'ts_change_proceed_to_checkout_text', 20, 3);


// Change "Add to Cart" > "Add to Bag" in Single Page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_single_page_add_to_cart_callback' );
function woocommerce_single_page_add_to_cart_callback() {
    return __( 'Adicionar ao carrinho', 'text-domain' );
}

// Remove CSS and/or JS for Select2 used by WooCommerce, see https://gist.github.com/Willem-Siebe/c6d798ccba249d5bf080.

    // add_action( 'wp_enqueue_scripts', 'wsis_dequeue_stylesandscripts_select2', 100 );

    // function wsis_dequeue_stylesandscripts_select2() {
    //     if ( class_exists( 'woocommerce' ) ) {
    //         wp_dequeue_style( 'selectWoo' );
    //         wp_deregister_style( 'selectWoo' );

    //         wp_dequeue_script( 'selectWoo');
    //         wp_deregister_script('selectWoo');
    //     }
    // }


// Bootstrap 5 wp_nav_menu walker
class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu
{
  private $current_item;
  private $dropdown_menu_alignment_values = [
    'dropdown-menu-start',
    'dropdown-menu-end',
    'dropdown-menu-sm-start',
    'dropdown-menu-sm-end',
    'dropdown-menu-md-start',
    'dropdown-menu-md-end',
    'dropdown-menu-lg-start',
    'dropdown-menu-lg-end',
    'dropdown-menu-xl-start',
    'dropdown-menu-xl-end',
    'dropdown-menu-xxl-start',
    'dropdown-menu-xxl-end'
  ];

  function start_lvl(&$output, $depth = 0, $args = null)
  {
    $dropdown_menu_class[] = '';
    foreach($this->current_item->classes as $class) {
      if(in_array($class, $this->dropdown_menu_alignment_values)) {
        $dropdown_menu_class[] = $class;
      }
    }
    $indent = str_repeat("\t", $depth);
    $submenu = ($depth > 0) ? ' sub-menu' : '';
    $output .= "\n$indent<div class='dropdown-menu drop-down-content'><ul class=\"list-unstyled drop-down-pages $submenu " . esc_attr(implode(" ",$dropdown_menu_class)) . " depth_$depth\">\n";
  }
  public function end_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "$indent</ul></div>\n";
  }

  function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
  {
    $this->current_item = $item;

    $indent = ($depth) ? str_repeat("\t", $depth) : '';

    $li_attributes = '';
    $class_names = $value = '';

    $classes = empty($item->classes) ? array() : (array) $item->classes;

    $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
    $classes[] = 'nav-item';
    $classes[] = 'nav-item-' . $item->ID;
    if ($depth && $args->walker->has_children) {
      $classes[] = 'dropdown-menu dropdown-menu-end';
    }

    $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
    $class_names = ' class="' . esc_attr($class_names) . '"';

    $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
    $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

    $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

    $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
    $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
    $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
    $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

    $active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
    $nav_link_class = ( $depth > 0 ) ? 'nav-link ' : 'nav-link ';
    $attributes .= ( $args->walker->has_children ) ? ' class="'. $nav_link_class . $active_class . ' dropdown-toggle dropdown-color navbar-text-color" title="' . apply_filters('the_title', $item->title, $item->ID) . '" data-toggle="dropdown" aria-haspopup="true"
    aria-expanded="false"' : 'title="' . apply_filters('the_title', $item->title, $item->ID) . '" class="'. $nav_link_class . $active_class . '"';

    $item_output = $args->before;
    $item_output .= '<a' . $attributes . '>';
    $item_output .= $args->link_before . '<span>' . apply_filters('the_title', $item->title, $item->ID) . '</span>' . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }
}