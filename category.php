<?php get_header(); ?>

<div id="container" class="wrapper">
  <main>
		<div class="c-breadcrumb">
			<ul class="c-breadcrumb_list">
				<li class="c-breadcrumb_item">
					<a href="/">HOME</a>
				</li>
				<li class="c-breadcrumb_item">
					<a href="/company.html">Blog</a>
				</li>
			</ul>
		</div>
    <?php
      $cat = get_the_category();
      $catname = $cat[0]->cat_name;
    ?>
    <h1 class="page-title"><?php echo $catname; ?>一覧</h1>

		<div class="container">
			<section class="p-blog">
				<div class="p-blog__contents">

						<div class="p-blog__contents-box noto">
							<div class="p-blog__contents-box-inner">
								<p class="p-blog__contents-box-inner-ctg">
									<?php
									$terms = get_terms('blog_category');
									foreach ( $terms as $term ) {
										echo '<a href="'.get_term_link($term).'">'.$term->name.'</a>';
									}
									?>
								</p>
								<?php if(have_posts()): ?>
						      <?php while(have_posts()):the_post(); ?>

								<p class="p-blog__contents-box-inner-txt01"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
							</div>
							<p class="p-blog__contents-box-txt02"><?php the_time( get_option( 'date_format' ) ); ?></p>
						</div>

						<div class="readmore"><a href="<?php the_permalink(); ?>">READ MORE</a></div>
					</div>
				<?php endwhile; ?>

				<?php
					if (function_exists("pagination")) {
						pagination($wp_query->max_num_pages);
					}
				?>
				<?php endif; ?>
			</section>

		</div>
  </main>

  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
