<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage chisa
 * @since chisa
 */

get_header();
?>

<div id="primary" class="content-area">
	<main>
		<div class="top">
			<progress class="scrollBar" max="100" value=""></progress>
			<div class="top__roll">
				<a href="#top">
					<p class="top__rollText">Top!</p>
					<figure class="rollBody">
						<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/roll-body.svg')); ?>" alt="ハリネズミ-体" width="357" height="226" />
					</figure>
					<figure class="rollFront rollFront--f01">
						<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/roll-front01.svg')); ?>" alt="ハリネズミ-前足" width="36" height="41" />
					</figure>
					<figure class="rollFront rollFront--f02">
						<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/roll-front02.svg')); ?>" alt="ハリネズミ-前足" width="36" height="41" />
					</figure>
					<figure class="rollBack rollBack--b01">
						<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/roll-back01.svg')); ?>" alt="ハリネズミ-後ろ足" width="36" height="41" />
					</figure>
					<figure class="rollBack rollBack--b02">
						<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/roll-back02.svg')); ?>" alt="ハリネズミ-後ろ足" width="36" height="41" />
					</figure>
				</a>
			</div>
			<div class="top__mainLogo">
				<figure class="cLogo js-cLogo">
					<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/c.png')); ?>" alt="夜桜" width="398" height="443">
				</figure>
				<h1 class="top__mainLogo__title" id="ttl">Chis<span>a</span>'s <br /><span>P</span>ortfolio</h1>

				<div class="top__mainLogo__menu">
					<a href="#about" class="top__mainLogo__menu--txt">About</a>
					<a href="#works" class="top__mainLogo__menu--txt">Works</a>
					<a href="#gallery" class="top__mainLogo__menu--txt">Gallery</a>
					<a href="#contact" class="top__mainLogo__menu--txt">Contact</a>
				</div>
				<div class="scroll">
					<span class="text poppins">scroll</span>
					<div class="circle"></div>
					<div class="circle"></div>
					<div class="circle"></div>
				</div>
			</div>

			<div class="top__sakura">
				<figure class="sakura m01">
					<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/hanabira01.png')); ?>" alt="桜のはなびら" width="46" height="46">
				</figure>
				<figure class="sakura m02">
					<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/hanabira02.png')); ?>" alt="桜のはなびら" width="39" height="40">
				</figure>
				<figure class="sakura m03">
					<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/hanabira03.png')); ?>" alt="桜のはなびら" width="33" height="34">
				</figure>
				<figure class="sakura m04">
					<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/hanabira02.png')); ?>" alt="桜のはなびら" width="39" height="40">
				</figure>
				<figure class="sakura m05">
					<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/hanabira01.png')); ?>" alt="桜のはなびら" width="46" height="46">
				</figure>
				<figure class="sakura m06">
					<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/hanabira03.png')); ?>" alt="桜のはなびら" width="33" height="34">
				</figure>
				<figure class="sakura m07">
					<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/hanabira02.png')); ?>" alt="桜のはなびら" width="39" height="40">
				</figure>
				<figure class="sakura m08">
					<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/hanabira03.png')); ?>" alt="桜のはなびら" width="33" height="34">
				</figure>
				<figure class="sakura m09">
					<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/hanabira02.png')); ?>" alt="桜のはなびら" width="39" height="40">
				</figure>
				<figure class="sakura m10">
					<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/hanabira03.png')); ?>" alt="桜のはなびら" width="33" height="34">
				</figure>
			</div>
		</div>

		<section class="top__about" id="about">
			<div class="top__aboutBox">
				<div class="top__aboutBox__profile01">
					<h2 class="modTitle about">About..</h2>
					<div class="top__aboutBox__profile01--txt">
						<p class="top__aboutBox__profile01--txt01">
							<span class="small poppins">Name</span> : 伊藤 千紗（<span class="poppins">Chisa Ito</span>）<br />
							<span class="small poppins">Job role</span> :フロントエンドエンジニア（<span class="poppins">Web Developer</span>）
						</p>
					</div>
					<div class="top__aboutBox__profile01--img">
						<picture>
							<source srcset="<?php echo esc_url(get_theme_file_uri('/assets/img/top/me.webp')); ?>" type="image/webp">
							<source srcset="<?php echo esc_url(get_theme_file_uri('/assets/img/top/me.jpg')); ?>" type="image/jpeg">
							<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/me.jpg')); ?>" alt="伊藤千紗" width="346" height="430">
						</picture>
					</div>
				</div>
				<div class="top__aboutBox__profile02">
					<p class="top__aboutBox__profile02--ttl">
						<span class="num poppins">01</span> . Profile <span class="sub noto"><span class="white">自</span>己紹介</span>
					</p>
					<p class="top__aboutBox__profile02--txt01">
						1996/02/04うまれ(<?php
										// 現在日付
										$now = date('Ymd');

										// 誕生日
										$birthday = "1996-02-04";
										$birthday = str_replace("-", "", $birthday);

										// 年齢
										$age = floor(($now - $birthday) / 10000);
										echo $age; ?>)、みずがめ座、埼玉出身。<br />
						親の仕事の都合で埼玉→タイ→東京と転々。<br>趣味は競馬を細々と、あとは旅行しながら一眼で撮影するのが好きです。<br />
						WordPressの組み込みやGSAPを用いたアニメーション制作、LP制作、ECサイト内部の機能開発などをやってきました。<br />
					</p>
					<p class="top__aboutBox__profile02--ttl">
						<span class="num poppins">02</span> . Career <span class="sub noto"><span class="white">経</span>歴</span>
					</p>
					<p class="top__aboutBox__profile02--txt01">
						<span class="indent04">2018年~ 共立女子大学家政学部建築デザイン学科デザインコース(グラフィック専攻)卒業</span>
						<span class="indent04">2018年~ SES企業にてITを学ぶ、現場ではMySQLを学ぶ</span>
						<span class="indent04">2019年~ スタートアップ企業にてフロントエンドエンジニアとしてECを中心とした Web制作・開発に携わる</span>
						<span class="indent04">2023年~ 現在。Web受託会社へ、アニメーションを中心としたWeb制作に携わる</span>
					</p>
					<p class="top__aboutBox__profile02--ttl">
						<span class="num poppins">03</span> . Skills <span class="sub noto">技<span class="white">術</span></span>
					</p>
					<p class="top__aboutBox__profile02--txt01 poppins"><span class="sk">Tools</span></p>
					<p class="top__aboutBox__profile02--txt02 poppins"><span class="indent01">・VSCode / Github / Docker / vagrant / iTerm2 / Photoshop / Illustrator / XD / Figma</span></p>
					<p class="top__aboutBox__profile02--txt01 poppins"><span class="sk">Languages</span></p>
					<p class="top__aboutBox__profile02--txt02 poppins"><span class="indent01">・HTML5 / CSS(sass) / PHP / JavaScript / TypeScript / MySQL</span></p>
					<p class="top__aboutBox__profile02--txt01 poppins"><span class="sk">Library・Framework・CMS・etc</span></p>
					<p class="top__aboutBox__profile02--txt02 poppins"><span class="indent01">・gulp / webpack / ejs / Astro / Vue.js / Node.js / npm script / Linux / jQuery / GSAP / Swiper.js / Tailwind CSS / WordPress / EC-CUBE / Smarty / Twig / microCMS / Shopify</span></p>
					<p class="top__aboutBox__profile02--ttl">
						<span class="num poppins">04</span> . Favorite <span class="sub noto">すき<span class="white">な</span>もの</span>
					</p>
					<p class="top__aboutBox__profile02--txt01">
						辛いもの、高いチョコ、パズルゲーム、毛の生えた動物、桜<br />
						好きなライブラリ：jQuery
					</p>
					<a href="/about" class="modBtn"><span class="allow">more</span></a>
				</div>
			</div>
		</section>

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
							<img class="js-parallax lg-only" src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/works01.webp')); ?>" width="1200" height="300" alt="株式会社mjo" />
							<img class="js-parallax sm-only" src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/sp/works01.webp')); ?>" width="500" height="310" alt="株式会社mjo" />
						</figure>
					</a>
					<p class="top__worksList--txt">
						株式会社mjo<br />
						コーディング実装対応
					</p>
				</li>

			</ul>
			<a href="/works" class="modBtn"><span class="allow">more</span></a>
		</section>

		<section class="top__gallery" id="gallery">
			<figure class="top__gallery--sakura">
				<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/common/hanabira01.png')); ?>" alt="桜のはなびら" width="46" height="46">
			</figure>
			<h2 class="modTitle gallery">Gallery..</h2>
			<p class="modSubTitle">毎年撮影している桜の写真です。場所はまちまちです。</p>
			<ul class="top__galleryList">
				<li class="top__galleryList__item">
					<figure class="top__galleryList--img">
						<picture>
							<source srcset="<?php echo esc_url(get_theme_file_uri('/assets/img/top/s01.webp')); ?>" type="image/webp">
							<source srcset="<?php echo esc_url(get_theme_file_uri('/assets/img/top/s01.jpg')); ?>" type="image/jpeg">
							<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/s01.jpg')); ?>" alt="桜の写真" width="390" height="260">
						</picture>
					</figure>
				</li>
				<li class="top__galleryList__item">
					<figure class="top__galleryList--img">
						<picture>
							<source srcset="<?php echo esc_url(get_theme_file_uri('/assets/img/top/s02.webp')); ?>" type="image/webp">
							<source srcset="<?php echo esc_url(get_theme_file_uri('/assets/img/top/s02.jpg')); ?>" type="image/jpeg">
							<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/s02.jpg')); ?>" alt="桜の写真" width="390" height="260">
						</picture>
					</figure>
				</li>
				<li class="top__galleryList__item">
					<figure class="top__galleryList--img">
						<picture>
							<source srcset="<?php echo esc_url(get_theme_file_uri('/assets/img/top/s03.webp')); ?>" type="image/webp">
							<source srcset="<?php echo esc_url(get_theme_file_uri('/assets/img/top/s03.jpg')); ?>" type="image/jpeg">
							<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/s03.jpg')); ?>" alt="桜の写真" width="390" height="260">
						</picture>
					</figure>
				</li>
				<li class="top__galleryList__item">
					<figure class="top__galleryList--img">
						<picture>
							<source srcset="<?php echo esc_url(get_theme_file_uri('/assets/img/top/s04.webp')); ?>" type="image/webp">
							<source srcset="<?php echo esc_url(get_theme_file_uri('/assets/img/top/s04.jpg')); ?>" type="image/jpeg">
							<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/s04.jpg')); ?>" alt="桜の写真" width="390" height="260">
						</picture>
					</figure>
				</li>
				<li class="top__galleryList__item">
					<figure class="top__galleryList--img">
						<picture>
							<source srcset="<?php echo esc_url(get_theme_file_uri('/assets/img/top/s05.webp')); ?>" type="image/webp">
							<source srcset="<?php echo esc_url(get_theme_file_uri('/assets/img/top/s05.jpg')); ?>" type="image/jpeg">
							<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/s05.jpg')); ?>" alt="桜の写真" width="390" height="260">
						</picture>
					</figure>
				</li>
				<li class="top__galleryList__item">
					<figure class="top__galleryList--img">
						<picture>
							<source srcset="<?php echo esc_url(get_theme_file_uri('/assets/img/top/s06.webp')); ?>" type="image/webp">
							<source srcset="<?php echo esc_url(get_theme_file_uri('/assets/img/top/s06.jpg')); ?>" type="image/jpeg">
							<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/s06.jpg')); ?>" alt="桜の写真" width="390" height="260">
						</picture>
					</figure>
				</li>
				<li class="top__galleryList__item">
					<figure class="top__galleryList--img">
						<picture>
							<source srcset="<?php echo esc_url(get_theme_file_uri('/assets/img/top/s07.webp')); ?>" type="image/webp">
							<source srcset="<?php echo esc_url(get_theme_file_uri('/assets/img/top/s07.jpg')); ?>" type="image/jpeg">
							<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/s07.jpg')); ?>" alt="桜の写真" width="390" height="260">
						</picture>
					</figure>
				</li>
				<li class="top__galleryList__item">
					<figure class="top__galleryList--img">
						<picture>
							<source srcset="<?php echo esc_url(get_theme_file_uri('/assets/img/top/s08.webp')); ?>" type="image/webp">
							<source srcset="<?php echo esc_url(get_theme_file_uri('/assets/img/top/s08.jpg')); ?>" type="image/jpeg">
							<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/s08.jpg')); ?>" alt="桜の写真" width="390" height="260">
						</picture>
					</figure>
				</li>
				<li class="top__galleryList__item lg-only">
					<figure class="top__galleryList--img">
						<picture>
							<source srcset="<?php echo esc_url(get_theme_file_uri('/assets/img/top/s09.webp')); ?>" type="image/webp">
							<source srcset="<?php echo esc_url(get_theme_file_uri('/assets/img/top/s09.jpg')); ?>" type="image/jpeg">
							<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/top/s09.jpg')); ?>" alt="桜の写真" width="390" height="260">
						</picture>
					</figure>
				</li>
			</ul>
			<a href="/gallery" class="modBtn"><span class="allow">more</span></a>
		</section>

		<section class="top__contact" id="contact">
			<div class="top__contactBg">
				<h2 class="modTitle contact">Contact..</h2>
				<?php echo apply_shortcodes('[contact-form-7 id="20" title="Contact"]'); ?>
			</div>
		</section>
	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php
get_footer();
