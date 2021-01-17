<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Identidade_Digital_do_Governo_-_WordPress
 */
 $footer_cover = get_template_directory_uri() . '/assets/img/footer-cover.png';
?>
	<section id="footer-cover" style="background-image: url('<?php echo $footer_cover; ?>')"></section>
	<footer id="main-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h3 class="social-title text-uppercase">Redes sociais</h3>

					<?php get_template_part( 'template-parts/social-medias' ); ?>
				</div>
			</div>
			<div class="row menus">
				<?php if ( is_active_sidebar( 'footer-widgets-area' ) ) :
					dynamic_sidebar( 'footer-widgets-area' );
				endif; ?>
			</div>
			<div class="row">
				<div class="col-sm-12 col-lg-8">
					<p>Rua: ....., telefone...</p>
				</div>
				<div class="col-sm-12 col-lg-4 footer-brasil">
					<a class="logo-acesso-footer" target="_blank" href="https://www.acessoainformacao.gov.br/" alt="Acesso à informação" title="Acesso à informação" rel="noreferrer"></a>
					<a class="logo-governo-federal" target="_blank" href="https://www.brasil.gov.br/" alt="Governo Federal" title="Governo Federal" rel="noreferrer"></a>
				</div>
			</div>
		</div>
	</footer>

	<div id="overlay"></div>

<?php wp_footer(); ?>

</body>
</html>
