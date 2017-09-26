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
    <?php include('inc/top-footer.php'); ?>
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
