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
    <?php while ( have_posts() ) : the_post(); ?>

    <section class="title-store">
        <div class="wrapper">
            <div class="title-page">
                <span class="segmento">
                    <?= the_field("segmento"); ?>
                </span>
                <h1><?= get_the_title(); ?></h1>
                <span class="location">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <?= the_field("localizacao");?>
                </span>           
            </div>
        </div>
    </section>

    <div id="primary" class="content-area">
        <main id="main" class="site-main-single" role="main">

        

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="wrapper">
                <section class="lojas-slider">
                    <?php 
                    $images = get_field('fotos');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    if( $images ): ?>
                        <ul class="owl-single-lojas owl-carousel">
                            <?php foreach( $images as $image ): ?>
                                <li>
                                    <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                </section>

                <section class="lojas-info">
                    <h4>Contatos</h4>
                    <p><a href="tel:<?= the_field("telefone"); ?>"><?= the_field("telefone"); ?></a></p>
                    <p><a href="mailto:<?= the_field("e-mail"); ?>"><?= the_field("e-mail"); ?></a></p>
                    <br>
                    <h4>Localização</h4>
                    <p><?= the_field("localizacao");?></p>
                    
                    <?php 
                        $facebook   = get_field("facebook");
                        $instagram  = get_field("instagram");
                        $twitter    = get_field("twitter"); 
                    ?>

                    <?php if(!empty($facebook) || !empty($instagram) || !empty($twitter)) { ?>

                        <ul class="social-links">
                            <li>
                                <a href="<?= $facebook ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="<?= $instagram ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="<?= $twitter ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                        </ul>

                    <?php } else { ?>

                    <?php } ?>
    

                </section>
            </div>  
        </article><!-- #post-## -->

        <?php endwhile; // end of the loop. ?>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php get_footer(); ?>