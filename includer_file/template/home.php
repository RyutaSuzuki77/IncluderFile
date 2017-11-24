<?php get_header(); ?>
<div id="wrapper">
		<div id="contents">
				<div class="aboutUs box mb30 bs">
						<?php //固定ページスラッグ”whats”を参照
							$page_info = get_page_by_path('whats');
							$page = get_post($page_info);
						?>
						<h2 class="title mb30"><?php echo $page->post_title; ?></h2>
						<p><?php echo $page->post_content; ?></p>
				</div><!--aboutUs-->
				<div class="newArrivals box bs bt">
						<h2>新着記事</h2>
						<div class="newArrivals-in">
						<?php query_posts( 'posts_per_page=5' );
						    if(have_posts()):
						      while(have_posts()):the_post();
						?>
						<dl>
								<dt><?php the_time("m月d日"); ?></dt>
								<dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
						</dl>
						<?php endwhile; endif;
						      wp_reset_postdata(); wp_reset_query(); ?>
						</div><!--newArrivals-in-->
				</div><!--newArrivals-->
		</div><!--contents-->
		<?php get_sidebar(); ?>
</div><!--wrapper-->
<?php get_footer(); ?>
