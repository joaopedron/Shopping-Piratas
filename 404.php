<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package _asv
 */

get_header(); ?>
    <section class="title-page title-404 breadcrumb">
        <div class="wrapper">
            <h1>Página não encontrada</h1>
        </div>
    </section>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="wrapper">
				<section class="not-found">

					<header class="page-header">
						<h1 class="erro-404">404</h1>
						<h2 class="page-title"><?php _e( 'A página que você está buscando não foi encontrada!', '_asv' ); ?></h2>

					</header><!-- .page-header -->

					<section class="entry-404">
						<p><?php _e( 'A página que você está buscando não existe, quer tentar pesquisar novamente ?', '_asv' ); ?></p>
						<?php get_search_form(); ?>
					</section>
				</section>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
