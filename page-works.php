<?php
/*
Template Name: works
*/
get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
	<section class="top__works" id="works">
      <h2 class="modTitle works">Works..</h2>
      <p class="modSubTitle">個人で請け負って制作したものです。</p>
      <ul class="top__worksList">
      <li>
					<a href="https://leia-dance.jp/" target="_blank">
						<figure class="top__worksList--img">
							<img class="js-parallax lg-only" src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/works03.webp')); ?>" width="1200" height="300" alt="Leia Dance Studio" />
							<img class="js-parallax sm-only" src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/sp/works03.webp')); ?>" width="500" height="310" alt="Leia Dance Studio" />
						</figure>
					</a>
					<p class="top__worksList--txt">
					Leia Dance Studio<br />
						構成・要件定義・デザイン/コーディング/WordPress実装対応
					</p>
				</li>
        <li>
          <a href="https://mjo-style.com/" target="_blank">
            <figure class="top__worksList--img">
              <img class="js-parallax lg-only" src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/works01.jpg')); ?>" width="1200" height="300" alt="株式会社mjo" />
              <img class="js-parallax sm-only" src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/sp/works01.jpg')); ?>" width="742" height="587" alt="株式会社mjo" />
            </figure>
          </a>
          <p class="top__worksList--txt">
            株式会社mjo<br />
            コーディング実装対応
          </p>
        </li>
        <li>
          <a href="https://www.matsumicorp.com/" target="_blank">
            <figure class="top__worksList--img">
              <img class="js-parallax lg-only" src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/works02.jpg')); ?>" width="1200" height="300" alt="松美商事株式会社" />
              <img class="js-parallax sm-only" src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/sp/works02.jpg')); ?>" width="1014" height="628" alt="松美商事株式会社" />
            </figure>
          </a>
          <p class="top__worksList--txt">
            松美商事株式会社<br />
            コーディング実装対応
          </p>
        </li>
      </ul>
    </section>
</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
