<?php
/**
 * Basic WooCommerce support
 * For an alternative integration method see WC docs
 * http://docs.woothemes.com/document/third-party-custom-theme-compatibility/
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="main-container 1">
	<div class="main-grid">
		<main class="content-wrapper">
		11111111111111111111
			<?php woocommerce_content(); ?>
			11111111111111111111
		</main>
	<?php //get_sidebar(); ?>
	</div>
</div>
<?php get_footer();
