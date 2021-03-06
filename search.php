<?php
get_header();
?>
    <section class="breadcrumb">
        <div class="wrapper">
            <h1>Busca</h1>
        </div>
    </section>

      <section id="primary" class="content-area">
          <!-- sidebar -->
          <section id="sidebar-store" class="sidebar stores">
              <h4>Categorias</h4>
              <?php
                  $args = array('parent' => 4);
                  $categories = get_categories( $args );
                  echo '<ul>';
                  foreach($categories as $category) {
                      echo '<li>';
                          echo '<a href="' . get_category_link( $category->term_id ) . '">' . $category->name . ' (<span>'. $category->count .'</span>)</a>';
                      echo '</li>';
                  }
                  echo '</ul>';
              ?>
          </section>
          <!-- sidebar -->
            <div id="content" class="site-content search-content" role="main">

            <?php if ( have_posts() ) : ?>
                
                <header class="page-header">
                    <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                </header><!-- .page-header -->

                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'content', 'search' ); ?>

                <?php endwhile; ?>


            <?php else : ?>

                <?php get_template_part( 'no-results', 'search' ); ?>

            <?php endif; ?>

            </div><!-- #content .site-content -->
        </section><!-- #primary .content-area -->

<?php get_footer(); ?>