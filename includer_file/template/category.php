<?php
/*
Template Name: contents
*/

get_header();
?>
<?php query_posts('post_type=post&paged='.$paged); ?>
<div id="wrapper">
		<div id="contents">
				<ul class="articleList">
					<?php if(in_category("git")) : ?>
					<?php while (have_posts()) : the_post(); ?>
<?php
$image_id = get_post_thumbnail_id();
$image_url = wp_get_attachment_image_src($image_id, true);
?>

						<li class="bt bs">
							<div class="lBox"><img src="<?php echo $image_url[0]; ?>" class="thunb"></div><!--lBox-->
							<div class="rBox">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<ul class="tag">
									<li><a href="<?php echo get_category_link($value->term_id); ?>" ><?php the_category(', '); ?></a></li>
								</ul>
								<p><?php echo mb_substr(strip_tags($post-> post_content), 0, 100).'...'; ?></p>
							</div><!--rBox-->
						</li>
					<?php endwhile; ?>
					<?php else : ?>
						<div class="post">
							<h2>記事が見つかりません</h2>
							<p>記事が存在しないときのテキスト</p>
						</div>
					<?php endif; ?>
						<div class="pager">
              <?php if (function_exists('responsive_pagination')) {
                responsive_pagination($additional_loop->max_num_pages);
              } ?>
		<!-- 					<ul>
								<li class="prev"><a href="#">＜</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li class="next"><a href="#">＞</a></li>
							</ul> -->
							</div>
				</ul><!--articleList-->
		</div><!--contents-->
		<?php get_sidebar(); ?>
</div><!--wrapper-->
<?php get_footer(); ?>
