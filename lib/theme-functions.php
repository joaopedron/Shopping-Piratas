<?php
/**
 * _asv theme functions definted in /lib/init.php
 *
 * @package _asv
 */

/**
 * Register Widget Areas
 */
function mb_widgets_init() {
	// Main Sidebar
	register_sidebar( array(
		'name'          => __( 'Sidebar', '_asv' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar Lojas', '_asv' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', '_asv' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="box-footer %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer 2', '_asv' ),
		'id'            => 'footer-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="box-footer %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

}

/**
 * Remove Dashboard Meta Boxes
 */
function mb_remove_dashboard_widgets() {
	global $wp_meta_boxes;
	// unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts']);
	// unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}

/**
 * Change Admin Menu Order
 */
function mb_custom_menu_order( $menu_ord ) {
	if ( !$menu_ord ) return true;
	return array(
		// 'index.php', // Dashboard
		// 'separator1', // First separator
		// 'edit.php?post_type=page', // Pages
		// 'edit.php', // Posts
		// 'upload.php', // Media
		// 'gf_edit_forms', // Gravity Forms
		// 'genesis', // Genesis
		// 'edit-comments.php', // Comments
		// 'separator2', // Second separator
		// 'themes.php', // Appearance
		// 'plugins.php', // Plugins
		// 'users.php', // Users
		// 'tools.php', // Tools
		// 'options-general.php', // Settings
		// 'separator-last', // Last separator
	);
}

/**
 * Hide Admin Areas that are not used
 */
function mb_remove_menu_pages() {
	// remove_menu_page( 'link-manager.php' );
}

/**
 * Remove default link for images
 */
function mb_imagelink_setup() {
	$image_set = get_option( 'image_default_link_type' );
	if ( $image_set !== 'none' ) {
		update_option( 'image_default_link_type', 'none' );
	}
}

/**
 * Enqueue scripts
 */
function mb_scripts() {
	wp_enqueue_style( '_asv-style', get_stylesheet_uri() );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( !is_admin() ) {
		wp_enqueue_script( 'jquery', false, array(), false, false );
		wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), NULL, true );
		wp_enqueue_script( 'insta-feed', get_template_directory_uri() . '/assets/js/instafeed.min.js', NULL, true );
		wp_enqueue_script( 'customplugins', get_template_directory_uri() . '/assets/js/plugins.min.js', array('jquery'), NULL, true );
		wp_enqueue_script( 'customscripts', get_template_directory_uri() . '/assets/js/main.min.js', array('jquery'), NULL, true );

	}
}


if (class_exists('MultiPostThumbnails')) {
	new MultiPostThumbnails(array(
	'label' => 'Imagem destacada – Interna',
	'id' => 'secondary-image',
	'post_type' => 'post'
	));
}



// if (class_exists('MultiPostThumbnails')
// &amp;&amp; MultiPostThumbnails::has_post_thumbnail('post', 'secondary-image')) :
// MultiPostThumbnails::the_post_thumbnail('post', 'secondary-image', NULL, 'post-secondary-image-thumbnail'); endif;

add_image_size( 'food-slider', 800, 500, array( 'center', 'center' ) );
add_image_size( 'thumb-blog-home', 200, 150, array( 'center', 'center' ) );
add_image_size( 'featured-blog', 520, 450, array( 'center', 'center' ) );
add_image_size( 'thumb-list-store', 410, 460, array( 'center', 'center' ) );



function limitPost($max_char, $more_link_text = '[...]',$notagp = false, $stripteaser = 0, $more_file = '') {
    
    $content = get_the_content($more_link_text, $stripteaser, $more_file);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]&gt;', $content);
    $content = strip_tags($content);
 
   if (isset($_GET['p']) > 0) {
      if($notagp) {
      echo substr($content,0,$max_char);
      }
      else {
      echo '<p>';
      echo substr($content,0,$max_char);
      echo "</p>";
      }
   }
   else if ((strlen($content)>$max_char) && ($espacio = strpos($content, " ", $max_char ))) {
        $content = substr($content, 0, $espacio);
        $content = $content;
        if($notagp) {
        echo substr($content,0,$max_char);
        echo $more_link_text;
        }
        else {
        echo '<p>';
        echo substr($content,0,$max_char);
        echo $more_link_text;
        echo "</p>";
        }
   }
   else {
      if($notagp) {
      echo substr($content,0,$max_char);
      }
      else {
      echo '<p>';
      echo substr($content,0,$max_char);
      echo "</p>";
      }
   }
}


/**
 * Remove Query Strings From Static Resources
 */
function mb_remove_script_version( $src ){
	$parts = explode( '?ver', $src );
	return $parts[0];
}

/**
 * Remove Read More Jump
 */
function mb_remove_more_jump_link( $link ) {
	$offset = strpos( $link, '#more-' );
	if ($offset) {
		$end = strpos( $link, '"',$offset );
	}
	if ($end) {
		$link = substr_replace( $link, '', $offset, $end-$offset );
	}
	return $link;
}

// Custom Type Posts (Lojistas)

// Register Custom Post Type
function addStore() {

	$labels = array(
		'name'                  => _x( 'Lojas', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Loja', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Lojas', 'text_domain' ),
		'name_admin_bar'        => __( 'Lojas', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Todas as lojas', 'text_domain' ),
		'add_new_item'          => __( 'Adicionar nova loja', 'text_domain' ),
		'add_new'               => __( 'Adicionar loja', 'text_domain' ),
		'new_item'              => __( 'Add Novo', 'text_domain' ),
		'edit_item'             => __( 'Editar Loja', 'text_domain' ),
		'update_item'           => __( 'Atualizar Loja', 'text_domain' ),
		'view_item'             => __( 'Ver Loja', 'text_domain' ),
		'view_items'            => __( 'Ver Lojas', 'text_domain' ),
		'search_items'          => __( 'Procurar Loja', 'text_domain' ),
		'not_found'             => __( 'Não encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'Não encontrado na lixeira', 'text_domain' ),
		'featured_image'        => __( 'Imagem de destaque', 'text_domain' ),
		'set_featured_image'    => __( 'Definir imagem destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Remover imagem destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagem destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Inserir dentro do item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Item de lista', 'text_domain' ),
		'items_list_navigation' => __( 'Item de navegação', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar itens da lista', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Loja', 'text_domain' ),
		'description'           => __( 'Incluir e remover lojistas do website', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'custom-fields', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'				=> 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'lojas', $args );

}
add_action( 'init', 'addStore', 0 );


function sliderFood() {
    $args = array(
        'post_type'             => 'lojas' ,
        'category_name'         => 'gastronomia',
        'posts_per_page'        => '5',
        'orderby'               => 'date',
        'order'                 => 'ASC'
);
    $exec = new WP_Query($args);
    
    if($exec->have_posts()):
        echo '<ul class="owl-carousel owl-home slider-home">';
        while($exec->have_posts()):
            $exec->the_post();
                echo "<li>";
                    echo '<a href=" '. get_the_permalink() .' ">';
                    echo the_post_thumbnail();
                    echo "</a>";
                echo "</li>";
        endwhile;
        echo "</ul>";
    endif;
}

function sliderHome() {
	$args = array(
		'post_type'     		=> 'post' ,
		'category_name'			=> 'Destaque',
		'posts_per_page'     	=> '5',
		'orderby'				=> 'date',
		'order'					=> 'DESC'
);
	$exec = new WP_Query($args);
	
	if($exec->have_posts()):
		echo '<ul class="owl-carousel owl-home slider-home">';
		while($exec->have_posts()):
			$exec->the_post();
				echo "<li>";
					echo '<a href=" '. get_the_permalink() .' ">';
					the_post_thumbnail();
					echo "</a>";
				echo "</li>";
		endwhile;
		echo "</ul>";
	endif;
}

// Query CPT stores

// Figure and figcaption addedd inside listStore function
function listStore() {
	$args = array(
		'post_type'     		=> 'lojas' ,
		'category_name'			=> 'ancoras',
		'posts_per_page'     	=> '10',
		'orderby'				=> 'title',
		'order'					=> 'ASC'
);
	$exec = new WP_Query($args);
	if($exec->have_posts()):
		echo '<ul class="owl-carousel owl-store list-store">';
		while($exec->have_posts()):
			$exec->the_post();
				echo "<li>";
					echo '<a href=" '. get_the_permalink() .' ">';
						echo "<figure class='effect-bubba'>";
							echo the_post_thumbnail('thumb-list-store');
							echo "<figcaption>";
									echo '<h1>';
										echo the_title();
									echo '</h1>';
									echo '<span class="tag-location">';
										echo the_field('localizacao');
									echo '</span>';
							echo "</figcaption>";
						echo"</figure>";
					echo "</a>";
				echo "</li>";
		endwhile;
		echo "</ul>";
	endif;
}






function custom_pagination($numpages = '', $pagerange = '', $paged='') {

  if (empty($pagerange)) {
    $pagerange = 2;
  }

  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   * 
   * It's good because we can now override default pagination
   * in our theme, and use this function in default quries
   * and custom queries.
   */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }

  /** 
   * We construct the pagination arguments to enter into our paginate_links
   * function. 
   */
  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('&laquo;'),
    'next_text'       => __('&raquo;'),
    'type'            => 'plain',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);

  if ($paginate_links) {
    echo "<nav class='custom-pagination'>";
      echo "<span class='page-numbers page-num'>Página " . $paged . " de " . $numpages . "</span> ";
      echo $paginate_links;
    echo "</nav>";
  }

}

function listCategory() {

    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $currentUrl = $_SERVER['REQUEST_URI'];
    $currentCategory = basename($currentUrl);

	$args = array(
		'post_type'     		=>	'lojas' ,
		'posts_per_page' 		=>	5,
		'orderby'				=>	'title',
		'order'					=>	'ASC',
		'category_name'			=>  $currentCategory,
		'paged' 				=>	$paged
);

 	/* Added $paged variable */

	$exec = new WP_Query($args);
	
	if($exec->have_posts()):
		echo '<ul class="single-store">';
		while($exec->have_posts()):
			$exec->the_post();
			$categories = get_the_category($post->ID);
				echo "<li class='store-box'>";
					echo '<a href=" '. get_the_permalink() .' ">';
						echo '<h1>';
							echo the_title();
						echo '</h1>';
					echo "</a>";

					echo '<div class="store-info-box">';
						echo '<span>';
							echo '<i class="fa fa-map-marker" aria-hidden="true"></i>';
							echo the_field('localizacao');
						echo '</span>';
						echo '<span>';
							echo $categories[0]->name;
						echo '</span>';
					echo '</div>';
					
				echo "</li>";
		endwhile;
		echo '</ul>';
		if (function_exists(custom_pagination)) {
			custom_pagination($exec->max_num_pages,"",$paged);
		}
	endif;
}

function storeSingle() {

    $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

	$args = array(
		'post_type'     		=>	'lojas' ,
		'posts_per_page' 		=>	5,
		'orderby'				=>	'title',
		'order'					=>	'ASC',
		'paged' 				=>	$paged
);

 	/* Added $paged variable */

	$exec = new WP_Query($args);
	
	if($exec->have_posts()):
		echo '<ul class="single-store">';
		while($exec->have_posts()):
			$exec->the_post();
			$categories = get_the_category($post->ID);
				echo "<li class='store-box'>";
					echo '<a href=" '. get_the_permalink() .' ">';
						echo '<h1>';
							echo the_title();
						echo '</h1>';
					echo "</a>";

					echo '<div class="store-info-box">';
						echo '<span>';
							echo '<i class="fa fa-map-marker" aria-hidden="true"></i>';
							echo the_field('localizacao');
						echo '</span>';
						echo '<span>';
							echo $categories[0]->name;
						echo '</span>';
					echo '</div>';
					
				echo "</li>";
		endwhile;
		echo '</ul>';
		if (function_exists(custom_pagination)) {
			custom_pagination($exec->max_num_pages,"",$paged);
		}
	endif;
}

//gastronomia

function foodSingle() {

	$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

    $args = array(
        'post_type'             =>  'lojas' ,
        'category_name'         => 'Gastronomia',
        'posts_per_page'        =>  5,
        'orderby'               =>  'title',
        'order'                 =>  'ASC',
        'paged'                 =>  $paged
);


    $exec = new WP_Query($args);
    
    if($exec->have_posts()):
        echo '<ul class="single-store">';
        while($exec->have_posts()):
            $exec->the_post();
            $categories = get_the_category($post->ID);
                echo "<li class='store-box'>";
                    echo '<a href=" '. get_the_permalink() .' ">';
                        echo '<h1>';
                            echo the_title();
                        echo '</h1>';
                    echo "</a>";

                    echo '<div class="store-info-box">';
                        echo '<span>';
                            echo '<i class="fa fa-map-marker" aria-hidden="true"></i>';
                            echo the_field('localizacao');
                        echo '</span>';
                        echo '<span>';
                            echo $categories[0]->name;
                        echo '</span>';
                    echo '</div>';
                    
                echo "</li>";
        endwhile;
        echo '</ul>';
        if (function_exists(custom_pagination)) {
            custom_pagination($exec->max_num_pages,"",$paged);
        }
    endif;
}



// Custom Type Posts (CineShow)
function addMovie() {

	$labels = array(
		'name'                  => _x( 'CineShow', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'CineShow', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'CineShow', 'text_domain' ),
		'name_admin_bar'        => __( 'CineShow', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Todos os filmes', 'text_domain' ),
		'add_new_item'          => __( 'Adicionar filme', 'text_domain' ),
		'add_new'               => __( 'Adicionar filme', 'text_domain' ),
		'new_item'              => __( 'Add Novo', 'text_domain' ),
		'edit_item'             => __( 'Editar Filme', 'text_domain' ),
		'update_item'           => __( 'Atualizar Filme', 'text_domain' ),
		'view_item'             => __( 'Ver Filme', 'text_domain' ),
		'view_items'            => __( 'Ver Filmes', 'text_domain' ),
		'search_items'          => __( 'Procurar Filme', 'text_domain' ),
		'not_found'             => __( 'Não encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'Não encontrado na lixeira', 'text_domain' ),
		'featured_image'        => __( 'Imagem de destaque', 'text_domain' ),
		'set_featured_image'    => __( 'Definir imagem destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Remover imagem destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagem destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Inserir dentro do item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Item de lista', 'text_domain' ),
		'items_list_navigation' => __( 'Item de navegação', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar itens da lista', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Filme', 'text_domain' ),
		'description'           => __( 'Incluir e remover lojistas do website', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'custom-fields', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'menu_icon'				=> 'dashicons-tickets',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'movie', $args );

}
add_action( 'init', 'addMovie', 0 );


// Query CPT stores

function listMovie() {
	$args = array(
		'post_type'     		=> 'movie' ,
		'posts_per_page'     	=> '15',
		'orderby'				=> 'date',
		'order'					=> 'ASC'
);
	$exec = new WP_Query($args);

	if($exec->have_posts()):
		$count = 0;
		echo '<div class="owl-carousel owl-movie list-movie">';
		while($exec->have_posts()):
			$exec->the_post();
			echo '<div>';
				echo '<a href="javascript:void(0)" id="link-movie" data-item="'.$count.'">';
					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					}
				echo "</a>";

			echo "</div>";
			$count++;
			$post_data[] = array(
			    'title' 	 			=> get_the_title(),
			    'thumb'					=> get_the_post_thumbnail(),
			    'legenda'				=> get_field('legenda'),
			    'imagem'				=> get_field('imagem'),
			    'sinopse'				=> get_field('sinopse'),
			    'trailer'				=> get_field('trailer'),
			    'link'					=> get_field('link'),
			    'time'					=> get_field('time')
			);
		endwhile;
		
		$dataJs = json_encode( $post_data );

		echo '</div>';
		echo '
			<div data-modal class="modal">
				<div class="wrapper">
					<div class="modal-box">
						<div data-modal-thumb></div>
						<div class="info">
							<span class="tag quality" data-modal-imagem></span>
							<span class="tag legenda" data-modal-legenda></span>
							<span class="tag time" data-modal-time></span>
							<h1 class="title-box" data-modal-title></h1>
                            <ul class="meta-box">
                               <li>
                               		<a data-modal-trailer target="_blank">
                               			<i class="fa fa-play-circle-o" aria-hidden="true"></i> Ver trailer
                               		</a>
                               	</li>
                               <li>
                               		<a data-modal-link target="_blank">
                               			<i class="fa fa-plus" aria-hidden="true"></i> Detalhes do filme
                               		</a>
                               </li>
                               <li>
                               		<a href="http://www.ingresso.com/angra-dos-reis/home/local/cinema/cine-show-angra-dos-reis/#/bairro=Centro" target="_blank">
                               			<i class="fa fa-usd" aria-hidden="true"></i> Comprar Ingresso
                               		</a>
                               </li>
                            </ul>	
							<p class="description-box" data-modal-sinopse></p>	
							<span class="modal-close" data-modal-remove>
								<i class="fa fa-times-circle" aria-hidden="true"></i>
							</span>
						</div>
					</div>
				</div>
			</div>';

        echo "<script>
				(function($) {
				$('[data-item]').on('click', function(){
				    var ind = Number($(this).attr('data-item'));
				    var movie = {$dataJs}[ind];
				    $('[data-modal]').addClass('active');
				    $('[data-modal-title]').append(movie.title);
				    $('[data-modal-thumb]').append(movie.thumb);
				    $('[data-modal-legenda]').append(movie.legenda);
				    $('[data-modal-imagem]').append(movie.imagem);
				    $('[data-modal-time]').append(movie.time);
				    $('[data-modal-sinopse]').append(movie.sinopse);
					$('[data-modal-trailer]').each(function(){
						this.href = movie.trailer;
					});
					$('[data-modal-link]').each(function(){
						this.href = movie.link;
					});
					$('[data-modal-legenda]').each(function(){
						if(movie.legenda === 'Dublado') {
							$(this).addClass('dublado');
							$(this).removeClass('legendado');
						}else {
							$(this).addClass('legendado');
							$(this).removeClass('dublado');
						}
					});
				});     
				$('[data-modal-remove]').click(function(){
				    $('[data-modal]').removeClass('active');
				    setTimeout(function() {
				        $('[data-modal-title], [data-modal-thumb],[data-modal-legenda], [data-modal-imagem],[data-modal-sinopse], [data-modal-time]').empty();
				    }, 300);
				});
				})(jQuery);
        	</script>";
	endif;
}

/**
 * Post from category blog
 */
function listBlog() {

  $the_query = new WP_Query( array(
    'showposts' => '3',
    'orderby' => 'date',
    'category_name' => 'blog'
  ) );

  echo '<ul class="news">';
  while ( $the_query->have_posts() ) : $the_query->the_post();
    echo '<li>';
		echo '<a href="' . get_the_permalink() .'" class="featured-link">';
	        echo '<figure>';
				if (class_exists('MultiPostThumbnails')
				&& MultiPostThumbnails::has_post_thumbnail('post', 'secondary-image')) :
				MultiPostThumbnails::the_post_thumbnail('post', 'secondary-image', NULL, 'thumb-blog-home'); endif;
	        echo '</figure>';
		echo '</a>';

		echo  '<div class="blog-list">';
			echo '<span class="category">';
				echo the_field('tagline');
			echo '</span>';
			echo '<h4 class="blog-title">'. get_the_title() .'</h4>';
			echo '<div class="blog-text">';
				limitPost(130, ' [ ... ] <br> <a href="'. get_the_permalink() .'">Leia Mais </a>');
			echo '</div>';
		echo  '</div>';

    echo '</li>';
  endwhile;
  echo '<a href="'. esc_url( home_url( '/blog/' ) ) .'" class="button">Ver todas</a>';
  echo '</ul>';
  wp_reset_query();
}

function firstBlog() {
	$the_query = new WP_Query(array(
		'showposts' => '1',
		'orderby' => 'date',
		'category_name' => 'Campanha do mês'
	));

	while ( $the_query->have_posts() ): $the_query->the_post();

		// Show image from ACF
		$banner = get_field('banner_lateral');
		if(!empty($banner)):
			echo '<img src=" '. $banner['url'] .' " alt="" title="">';
		endif;
		// End show image from ACF

	endwhile;

	
}

function listBlogSingle() {

  $the_query = new WP_Query( array(
    'showposts' => '5',
    'orderby' => 'date',
    'category_name' => 'blog'
  ) );

  echo '<ul class="news-single">';
  while ( $the_query->have_posts() ) : $the_query->the_post();
    echo '<li>';
		echo '<a href="' . get_the_permalink() .'" class="featured-link">';
	        echo '<figure>';
				if (class_exists('MultiPostThumbnails')
				&& MultiPostThumbnails::has_post_thumbnail('post', 'secondary-image')) :
				MultiPostThumbnails::the_post_thumbnail('post', 'secondary-image', NULL, 'thumb-blog-home'); endif;
	        echo '</figure>';
		echo '</a>';

		echo  '<div class="blog-list-single">';
			echo '<span class="category">';
				echo the_field('tagline');
			echo '</span>';
			echo '<h4 class="blog-title">'. get_the_title() .'</h4>';
			echo '<div class="blog-text">';
				limitPost(130, ' [ ... ] <br> <a href="'. get_the_permalink() .'">Leia Mais </a>');
			echo '</div>';
		echo  '</div>';

    echo '</li>';
  endwhile;
  echo '</ul>';
  wp_reset_query();
}


function singleStore() {
    $args = array(
        'post_type'             => 'lojas' ,
        'posts_per_page'        => '20',
        'orderby'               => 'title',
        'order'                 => 'ASC'
);
    
    $exec = new WP_Query($args);
    
    if($exec->have_posts()):
        echo '<ul class="single-store">';
        while($exec->have_posts()):
            $exec->the_post();
                echo "<li>";
                    echo '<a href=" '. get_the_permalink() .' ">';
                        echo '<h1>';
                            echo the_title();
                        echo '</h1>';
                        echo "<br>";
						$categories = get_the_category();
						if ( ! empty( $categories ) ) {
						    echo esc_html( $categories[0]->name );   
						}
						echo "<hr>";
                    echo "</a>";
                echo "</li>";
        endwhile;
        echo "</ul>";
    endif;
}

/**
 * Extend WordPress search to include custom fields
 *
 * http://adambalee.com
 */

/**
 * Join posts and postmeta tables
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_join
 */
function cf_search_join( $join ) {
    global $wpdb;

    if ( is_search() ) {    
        $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
    }
    
    return $join;
}
add_filter('posts_join', 'cf_search_join' );

/**
 * Modify the search query with posts_where
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
 */
function cf_search_where( $where ) {
    global $wpdb;
   
    if ( is_search() ) {
        $where = preg_replace(
            "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
    }

    return $where;
}
add_filter( 'posts_where', 'cf_search_where' );

/**
 * Prevent duplicates
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
 */
function cf_search_distinct( $where ) {
    global $wpdb;

    if ( is_search() ) {
        return "DISTINCT";
    }

    return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );

//

function menus(){
	register_nav_menus(
		array(
			'dropdown-menu-left' => __('Menu dropdown esquerda'),
			'dropdown-menu-right' => __('Menu dropdown direita'),
		)
	);
}
add_action('init', 'menus');