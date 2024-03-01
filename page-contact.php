<?php
/*
Template Name: contact
*/
get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="c-breadcrumb">
			<ul class="c-breadcrumb_list">
				<li class="c-breadcrumb_item">
					<a href="/">HOME</a>
				</li>
				<li class="c-breadcrumb_item">
					<a href="/contact/">Contact</a>
				</li>
			</ul>
		</div>
		<div class="p-contact">
			<div class="p-contact__title">
				<p class="p-contact__title-txt01 order">CONTACT</p>
			</div>
		</div>
		<section class="p-contact-fm">
			<p class="notice noto">
				お問い合わせは以下よりお願いいたします。
			</p>

			<div class="p-contact__form">
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</div>

		</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
