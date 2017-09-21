<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _asv
 */
?>

	</div><!-- #content -->

    <!-- top footer -->
    <section class="top-footer">
        <div class="wrapper">
            <!-- box -->
            <div class="box">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <h4>Endereço</h4>
                <span>
                    Estrada Municipal, 200, Praia do Jardim<br>
                    Angra dos Reis, CEP 23907-900
                </span>
                <a href="<?= site_url(); ?>/como-chegar/" class="button">como chegar</a>
            </div>
            <!-- #box -->

            <!-- box -->
            <div class="box">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <h4>Funcionamento</h4>
                <span>
                    Lojas: Segunda a domingo: 10h às 22h<br>
                    Portaria: Segunda a domingo: 8h às 22h
                </span>
                <a href="<?= site_url(); ?>/grade-de-horarios/" class="button">Grade de horários</a>
            </div>
            <!-- #box -->

            <!-- box -->
            <div class="box">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <h4>Telefones</h4>
                <span>
                    Administração: +55 24 3365-2640<br>
                    SAC: +55 24 3365-3546
                </span>
                <a href="<?= site_url(); ?>/contato/" class="button">Entre em contato</a>
            </div>
            <!-- #box -->
        </div><!-- #wrapper -->
    </section>
    <!-- #top footer -->
	<footer id="colophon" class="site-footer" role="contentinfo">
        <div class="wrapper">
            
            <ul class="box-footer">
                <li><h4>Siga a gente!</h4></li>
                <div class="social-footer">
                    <a href="https://www.facebook.com/shoppingpiratas/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="https://twitter.com/piratasmall" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/shoppingpiratas/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
                <li><h4><a href="http://www.redecineshow.com.br/programacao/2/angra-dos-reis.html">Cineshow</a></h4></li>
                <li><h4><a href="<?= site_url(); ?>/lojas">Lojas</a></h4></li>
            </ul>
            
            <?php dynamic_sidebar( 'footer-1' ); ?>
            <?php dynamic_sidebar( 'footer-2' ); ?>

            <ul class="box-footer">
                <li><h4>Newsletter</h4><span>Receba as nossas novidades e ofertas</span></li>
                <li>
                    <?php include("newsletter.php"); ?>
                </li>
            </ul>
        </div><!-- wrapper -->
        <hr>
        <div class="wrapper">
            <section class="sub-info">
                <ul>
                    <li>
                        <a href="<?= site_url(); ?>/tourist-info/" class="button-language"><span class="flag-icon flag-icon-us"></span> EN</a>
                    </li>
                    <li>
                        <a href="<?= site_url(); ?>/informacion-turistica/" class="button-language"><span class="flag-icon flag-icon-es"></span> ES</a>
                    </li>
                </ul>

                <div class="developer">
                    <span>Feito por: <a href="https://alternativasv.com.br" class="button-language">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/asv.svg" alt="" width="40" height="16"></a>
                    </span>
                </div>
            </section>
        </div>
        
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
