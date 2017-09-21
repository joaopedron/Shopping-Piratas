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
                    <header class="sectionTitle">
                        <h1>Centro Gastronômico</h1>
                        <span class="tagline">O melhor da gastronomia está aqui!</span>
                    </header>
                    <!-- slider food -->
                    <div class="slider-food">
                        <!-- rev slider food -->
                        <?php sliderFood(); ?>
                        <!-- #rev slider food -->
                    </div>
                    <!-- #slider food -->

                    <!-- custom search food -->
                    <div class="custom-search">
                        <h1>Encontre um restaurante</h1>
                        <p>“Nossas opções gatstronomicas são simplesmente as melhores <br> da costa verde.”</p>
                        <!-- buttons -->
                        <a href="<?php site_url(); ?>/gastronomia/" class="button">Descruba novos sabores</a>
                        <!-- buttons -->
                    </div>
                    <!-- #custom search food -->
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
                    <div id="instagram" class="show"></div>
                </div>
            </section>
            <!-- #instagram feed -->
            
            
            <!-- blog -->
            <section class="blog">
                <div class="wrapper">
                    <header class="sectionTitle">
                        <h1>Últimas novidades</h1>
                        <span class="tagline">Fique por dentro do nosso blog</span>
                    </header>
                    <!-- list blog -->
                    <?php listBlog(); ?>
                    <!-- #list blog -->
                    <!-- featured-image -->
                    <div class="news-featured">
                        <div class="block">
                            <?php firstBlog(); ?>
                        </div>
                    </div>
                    <!-- featured-image -->

                </div>
            </section>
            <!-- #blog -->
            
		</main><!-- #main -->
	</div><!-- #primary -->
    
<?php get_footer(); ?>
