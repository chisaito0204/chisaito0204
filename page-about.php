<?php
/*
Template Name: about
*/
get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="about">
			<div class="modTtlBox">
				<h2 class="modTitle about">About..</h2>
			</div>
			<div class="aboutContent">
				<div class="aboutContentInner">
					<p class="aboutContentInner__txt01">当サイトに訪問いただきありがとうございます。</p>

					<p class="aboutContentInner__txt02"><span>01. </span>Webに興味を持ったきっかけ</p>
					<p class="aboutContentInner__txt02-en">What sparked interest</p>
					<p class="aboutContentInner__txt03"><span class="large">初</span>めてコードに触れたのはYahoo!ブログの記事ページをカスタマイズした時です。<br>
						親の仕事の都合でタイに住んでいた中学生の頃、当時はスマホもなく向こうではガラケーが使えなかったため学校の友達との主なやり取りがブログを通してでした。<br>
						当時は今ほどサービスが充実していなかったこともあり、個人サイトなど自分でカスタマイズできるものが流通していて、Yahoo!ブログはタグが利用できたこともあり手短にHTMLコードやCSSに触れることができました。<br>
						ブログを通して初めてHTMLコードに触れて、パソコンの中に自分の世界を自由に作ることができたことが当時はすごく画期的に感じて、それがWebに興味を持ったきっかけだと思います。<br>
						当時はバナーもgifで作成して、サイトで音が鳴ったり、とにかく個人で色々作っていた時代だったと思います。(あのときのインターネットがすごく好きでした。）<br>
						今でもスマホでサイトを見るよりも、パソコンでネットサーフィンする方が好きです。<br>
						それから大学でWebデザインの講義でコーディングにまた触れる機会があり、そのときに簡易的な自己紹介ページを作る課題があったのですが、何がなんでも周りよりも頭一つ抜けたものを作りたいと思い、拾ったjQueryのコードをカスタマイズしてあれこれ動きを入れて作り込みました。そこから本格的にWeb制作の仕事をしていこうと思ったのが最終的な動機で、今に至ります。
					</p>

					<p class="aboutContentInner__txt02"><span>02. </span>このサイトについて</p>
					<p class="aboutContentInner__txt02-en">About this site</p>
					<div class="aboutContentInner__txt03">
						<span class="large">こ</span>のポートフォリオサイトは、見ての通り桜をテーマに作成しています。タイトルなどの文字の動きは桜のはなびらが落ちる動きを連想させるような、上から下へ動くアニメーションをGSAPで実装しました。<br />
						毎年趣味で撮影している桜のギャラリーはおまけです。飽き性で仕事以外物事があまり続かない自分が唯一毎年欠かさず続けていることが桜の撮影だったので、桜をテーマに決めました。<br />
						構成は下記で作成しています。<br />
						<div class="aboutContentInner__txt03Box">
							<span class="indent01"><span class="pink">・</span>CMS：WordPress</span>
							<span class="indent01"><span class="pink">・</span>フレームワーク：Astro</span>
							<span class="indent01"><span class="pink">・</span>コンパイラ：npm script</span>
							<span class="indent01"><span class="pink">・</span>デプロイ：github</span>
							<span class="indent01"><span class="pink">・</span>サーバー：エックスサーバー</span>
							<span class="indent01"><span class="pink">・</span>使用ライブラリ：GSAP、lenis、jQuery、Muuri、Luminous</span>
							<span class="indent01"><span class="pink">・</span>使用プラグイン：Contact Form7</span>
							<span class="indent01"><span class="pink">・</span>制作期間：デザイン含め約３週間</span>
						</div>
						フレームワークはAstroを使用しましたが、ビルドして静的作成したものを手動でWordPressへ組み込んでいます。<br />
						最近流行りのAstroを使ったヘッドレス化にしようか迷いましたが、個人的にPHPであれこれカスタマイズすることが好きなこともあり、作り自体は以前と同じWordPressをオリジナルテーマで普通にカスタマイズして作成しました。<br />
						パフォーマンスを落とさないように、アニメーションは最小限にしています。<br />
						WordPressのローカル環境はwp-envとDockerで構築しました。動的環境は今までVirtualboxを仮想環境にvagrantで起動していましたが、
						Apple SiliconのMacBookに買い替えた影響でVirtualboxを使えなくなったので、vagrantを使うことが面倒になりDockerに切り替えました。<br />
						<br />
						<span class="sub">・デザインについて</span><br>
						普段仕事ではデザインはやっていませんが、ポートフォリオなので一からFigmaでデザインを引いて制作しました。<br />
						暖かい印象を与える桜のようなベビーピンクのふわっとした色合いに、メリハリをつけるために黒色とグレーを組み合わせています。フォントはNoto Sans、Poppinsを使用。<br />
						トップページは、日の丸構図を意識して、Cの文字をセンタリングしてデザインしました。ハンバーガーメニューに視線誘導するために、右上から桜が落ちるアニメーションをCSSで入れています。<br>
						ヘッダーメニューはあえて今流行りのレスポンシブファーストなデザインにしました。<br>
						プロフィールは、GSAPで背景がスクロールで左からスライドインする動きを入れて、左側の写真を固定にして右側のみスクロールするようにしています。<br>
						左下のトップへ戻るボタンとなっているハリネズミの影は、GSAPで歩いている動きを入れています。<br>
						GSAPを利用してお遊び的な動きを入れたかったので、トップへ戻るボタンをこのように実装しました。昔ボカロのとある曲で動画画面下に固定でずっと猫が歩いているMVがあって可愛かったので、そこから着想を得ました。<br>
						Worksの画像や、Contactの背景画像は、パララックスの動きを入れています。<br>
						Blogのページだけ他ページと差別化を図るため水色も使用しています。ブログ機能自体アプローチにも繋がるので、カスタマイズで実装しています。<br />
						このAboutページは自分にとってウェブに触れる大きなきっかけとなったタイ・バンコクの風景を入れています。生活していた時に馴染みのある場所の写真にしました。<br />
						Galleryページはサイトのテーマに説得力をつけるためにおまけで入れました。Muuriライブラリを使用してカテゴリーごとにタブ遷移で切り替えできるようになっています。<br />
						また、全体的に慣性スクロールのlenisを使用しています。他のアニメーションライブラリとバッティングしなかったのでこちらを選定しました。<br />
					</div>

				</div>
			</div>
		</div>
</div>
</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
