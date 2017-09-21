<?php
/**
 * @package _asv
 */
?>

<?php
/**
 * The template for displaying all single posts.
 *
 * @package _asv
 */

get_header(); ?>

    <section class="title-page title-store">
        <div class="wrapper">
            <h1>Lojas</h1>
        </div>
    </section>
    <div id="primary" class="content-area">
        <main id="main" class="site-main-single" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="wrapper">
                <section class="lojas-slider">
                    <?php 
                    $image = get_field('fotos');
                    if( !empty($image) ): ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>

                    <?php if(empty($image)): ?>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/default.jpg" alt="Institucional Shopping Piratas" />
                    <?php endif; ?>
                </section>

                <section class="lojas-info">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    <ul>
                        <li>
                            <span>Localização:</span>
                            <?php the_field("localizacao");     ?>
                        </li>
                        <li>
                            <span>Telefone:</span>
                            <?php the_field("telefone"); ?>
                        </li>
                        <li>
                            <?php 

                                $web = get_field('website');

                            ?>
                        </li>
                    </ul>

                    <ul class="social-links">
                        <li>
                            <a href="<?php the_field("facebook"); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="<?php the_field("instagram"); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="<?php the_field("twitter"); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="mailto:<?php the_field("e-mail"); ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </section>
            </div>  
        </article><!-- #post-## -->

        <?php endwhile; // end of the loop. ?>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>