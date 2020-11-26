<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer class="footer-container">
	<h1 class="footer-container-title">young, motivated,
	environmental friendly, orientated</h1>
	<div class="footer-grid">
		<?php //dynamic_sidebar( 'footer-widgets' ); ?>

		<section id="" class="">
		<h6>NAVIGATION</h6>
		<ul>
			<li><a href="">co nie co o nas</a></li>
			<li><a href="">posmakuj naszego świata</a></li>
			<li><a href="">jak palimy kawę / skąd pochodzi</a></li>
			<li><a href="">nasza galeria</a></li>
			<li><a href="">kontakt</a></li>
		</ul>

		</section>
		<section id="" class="">
		<h6>LOCATION</h6>
		<ul>
			<span class="bold-span">Office Indonesia</span>
			<li><a href="">Ruko Green Garden Blok A
			14/18 RT/RW: 005/003
			Kedoya Utara, Jakarta Barat
			11520</a></li>
			<span class="bold-span">Office Poland</span>
			<li><a href="">ul. Smulska 28
94-313 Łódź</a></li>
		</ul>

		</section>
		<section id="" class="">
		<h6>SOCIAL</h6>
		<ul>
			<li><a href="">Facebook</a></li>
			<li><a href="">Instagram</a></li>
			<li><a href="">Twitter</a></li>
		</ul>

		</section>
		
	</div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>
