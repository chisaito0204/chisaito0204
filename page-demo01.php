<?php
/*
Template Name: demo01
*/
get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="demo01">
			<div class="demo01Flow">

			<!-- テキスト文言 -->
				<div class="demo01FlowInner">
					<h2 class="demo01FlowText">
						<span class="demo01FlowText--txt01">
							桜咲く、舞い落ちる<br>
							何もない僕の手の上
						</span>
						<span class="demo01FlowText--txt02">
							儚くて優しくて、壊れそう<br>
							君みたいな花
						</span>
					</h2>
				</div>
				<!-- / テキスト文言 -->

				<!-- 背景に流れる画像 -->
				<div class="demo01FlowImgs">
					<div class="demo01FlowImgs--img01">
						<figure class="img01 js-trigger01">
							<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/demo/01/img01.jpg')); ?>" alt="昼桜" width="303" height="292">
						</figure>
						<figure class="img01 js-trigger01">
							<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/demo/01/img02.jpg')); ?>" alt="昼桜" width="288" height="432">
						</figure>
						<figure class="img01 js-trigger01">
							<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/demo/01/img03.jpg')); ?>" alt="昼桜" width="439" height="267">
						</figure>
						<figure class="img01 js-trigger01">
							<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/demo/01/img04.jpg')); ?>" alt="昼桜" width="323" height="299">
						</figure>
						<figure class="img01 js-trigger01">
							<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/demo/01/img05.jpg')); ?>" alt="昼桜" width="316" height="273">
						</figure>
						<figure class="img01 js-trigger01">
							<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/demo/01/img06.jpg')); ?>" alt="夜桜" width="360" height="360">
						</figure>
						<figure class="img01 js-trigger01">
							<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/demo/01/img07.jpg')); ?>" alt="夜桜" width="254" height="215">
						</figure>
						<figure class="img01 js-trigger01">
							<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/demo/01/img08.jpg')); ?>" alt="夜桜" width="520" height="340">
						</figure>
						<figure class="img01 js-trigger01">
							<img src="<?php echo esc_url(get_theme_file_uri('/assets/img/demo/01/img09.jpg')); ?>" alt="夜桜" width="384" height="478">
						</figure>
					</div>
				</div>
				<!-- / 背景に流れる画像 -->
			</div>
		</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
