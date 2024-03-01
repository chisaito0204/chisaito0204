<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 */

?>

</div><!-- #content -->

<!--footer-->
<footer class="footer">
	<div class="footer__contents">
		<div class="footer__logo">
			<a href="/">
				<figure class="cLogo">
					<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/clogo.svg')); ?>" alt="ロゴ" width="133" height="138">
				</figure>
			</a>
			<p class="footer__logo--txt">Chisa's Portfolio</p>
		</div>

		<div class="footer__nav">
			<nav class="footer__navList">
				<ul class="footer__navList__list">
					<li class="">
						<a href="/about">About</a>
					</li>
					<li class="">
						<a href="/works">Works</a>
					</li>
					<li class="">
						<a href="/gallery">Gallery</a>
					</li>
					<li class="">
						<a href="/blog">Blog</a>
					</li>
					<li class="">
						<a href="/#contact">Contact</a>
					</li>
				</ul>
			</nav>

			<div class="footer__navLink">
				<div class="footer__navLinkSns">
					<a href="https://www.instagram.com/02_chiii" target="_blank"><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/instagram.svg')); ?>" width="30" height="30" alt="Instagram" /></a>
					<a href="https://note.com/calm_hornet146" target="_blank"><img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/note.svg')); ?>" width="35" height="35" alt="note" /></a>
				</div>
			</div>
		</div>
	</div>
	<small class="copyright poppins">©<?php echo date( 'Y' ); ?> Chisa Ito Portfolio. All Rights Reserved.</small>
</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

<script type="module" src="<?php echo esc_url(get_theme_file_uri('/assets/js/jquery-3.7.1.min.js')); ?>"></script>
<script src="https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"></script>
<script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script>
<script src="<?php echo esc_url(get_theme_file_uri('/assets/js/luminous.min.js')); ?>"></script>
<script type="module" src="<?php echo esc_url(get_theme_file_uri('/assets/js/script.js')); ?>"></script>

</body>

</html>