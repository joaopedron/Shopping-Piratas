<?php
/**
 * The template for displaying the front page.
 * This is the template that displays on the front page only.
 *
 * @package _asv
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            
            <!-- lojas -->
            <section class="lojas">
                <div class="wrapper">
                    <header class="sectionTitle">
                        <h1>Nossas Lojas</h1>
                        <span class="tagline">compras, entretenimento e diversão</span>
                    </header>
                    <!-- Loop listSotre and custom navigation -->
                    <?php listStore(); ?>
                    <!-- Loop listSotre and custom navigation -->
                    <!-- link more -->
                    <a href="<?= esc_url( home_url( '/lojas' ) ); ?>" class="button link-more">
                    ver todas
                    </a><!-- #link more -->
                </div><!-- #wrapper -->
            </section><!-- #lojas -->    

            <!-- cineshow -->
            <section class="cineshow">
                <div class="wrapper">
                    <header class="sectionTitle">
                        <h1>Cineshow</h1>
                        <span class="tagline">#vemprocineshow</span>
                    </header>
                    <!-- Loop listMovie  -->
                    <?php listMovie(); ?>
                    <!-- Loop listMovie -->
                    <!-- link more -->
                    <a href="http://www.redecineshow.com.br/programacao/2/angra-dos-reis.html" target="_blank" class="button link-more light">
                    ver programação
                    </a><!-- #link more -->
                </div><!-- #wrapper -->
            </section>   
            <!--  #cineshow -->
            
            <!-- wrapper -->
            <div class="wrapper">
                <!-- centro gastronomico -->
                <section class="food">
                    <!-- slider food -->
                    <div class="slider-food">
                        <div class="food-banner">
                            <div class="food-texts">
                                <h1>Centro Gastronômico</h1>
                                <span class="tagline">O melhor da gastronomia está aqui!</span>
                                <a href="<?= esc_url( home_url( '/gastronomia' ) ); ?>" class="button-food">Explore nossos sabores</a>
                            </div>
                        </div>
                    </div>
                    <!-- #slider food -->
                </section>
                <!-- #centro gastronomico -->
            </div><!-- #wrapper -->
            
            <!-- instagram feed -->
            <section class="feed-instagram">
                <div class="wrapper">
                    <header class="sectionTitle">
                        <h1>Siga-nos no instagram</h1>
                        <span class="tagline"><a href="https://instagram.com/shoppingpiratas">@shoppingpiratas</a></span>
                    </header>
                    <?= do_shortcode('[the_grid name="Grid Instagram"]'); ?>
                </div>
            </section>
            <!-- #instagram feed -->
            
            <!-- wrapper -->
            <div class="wrapper">
                <!-- centro gastronomico -->
                <section class="food">
                    <!-- slider food -->
                    <div class="box-boat">
                        <div class="banner-boat">
                            <div class="food-texts">
                                <h1>Centro Naútico</h1>
                                <span class="tagline">Tudo que você precisa para sua embarcação</span>
                                <a href="<?= esc_url( home_url( '/centro-nautico' ) ); ?>" class="button-food">Navegue em nosso mar</a>
                            </div>
                        </div>
                    </div>
                    <!-- #slider food -->
                </section>
                <!-- #centro gastronomico -->
            </div><!-- #wrapper -->
            
            <!-- blog -->
            <section class="blog">
                <div class="wrapper">
                    <header class="sectionTitle">
                        <h1>Últimas novidades</h1>
                        <span class="tagline">Fique por dentro do nosso blog</span>
                    </header>
                    <!-- list blog -->
                    <?= do_shortcode('[the_grid name="Blog"]'); ?>
                    <!-- #list blog -->
                    <section class="footer-blog">
                        <!-- link more -->
                        <a href="<?= esc_url( home_url( '/blog' ) ); ?>" class="button link-more">
                        ver todas as novidades
                        </a><!-- #link more -->
                    </section>
                </div>
            </section>
            <!-- #blog -->
            
		</main><!-- #main -->
	</div><!-- #primary -->
    
<?php get_footer(); ?>

