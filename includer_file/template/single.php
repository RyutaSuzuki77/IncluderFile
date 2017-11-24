<?php get_header(); ?>
<div id="wrapper">
		<div id="contents">
				<div class="articlebox box bs">
						<?php if(have_posts()): while ( have_posts() ) : the_post(); ?>
						<div class="articlebox-in">
								<h2 class="bl"><?php the_title(); ?></h2>
								<ul class="tag">
									<?php $cat_all = get_terms( "category", "fields=all&get=all" );
									foreach($cat_all as $value): ?>
									<li><a href="<?php echo get_category_link($value->term_id); ?>" ><?php echo $value->name;?></a></li>
								<?php endforeach; ?>
								</ul>
								<p class="articleImage"><?php the_post_thumbnail(); ?></p>
								<p><?php the_content(); ?></p>
						</div>
<!-- 						<div class="articlebox-in">
								<h3 class="bl">ここにh3が入ります。</h3>
								<p>ここに短文が入ります。ここに短文が入ります。ここに短文が入ります。ここに短文が入ります。ここに短文が入ります。ここに短文が入ります。ここに短文が入ります。ここに短文が入ります。ここに短文が入ります。ここに短文が入ります。ここに短文が入ります。</p>
						</div>
						<div class="articlebox-in">
								<h4 class="bl">ここにh4が入ります。</h4>
								<p>ここに短文が入ります。ここに短文が入ります。ここに短文が入ります。ここに短文が入ります。ここに短文が入ります。ここに短文が入ります。ここに短文が入ります。ここに短文が入ります。ここに短文が入ります。ここに短文が入ります。</p>
						</div> -->
						<div class="writer">
								<p class="title">この記事を書いたライター</p>
								<div class="writer-in">
										<div class="portlate"><a href="<?php echo get_author_posts_url( get_the_author_id() ); ?>"><?php echo get_avatar( get_the_author_id() ); ?></a></div><!--portlate-->
										<div class="author-name"><a href="<?php echo get_author_posts_url( get_the_author_id() ); ?>"><?php the_author(); ?></a></div>
										<div class="text">
												<p><?php the_author_meta('description'); ?></p>
									</div><!--text-->
								</div><!--writer-in-->
								<div class="sns">
										<ul>
												<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/f_icon_facebook.png" alt="#"></a></li>
												<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/f_icon_twitter.png" alt="#"></a></li>
												<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/f_icon_google.png" alt="#"></a></li>
										</ul>
								</div>
						</div><!--writer-->
						<?php endwhile; endif; ?>
				</div><!--articlebox-->
		</div><!--contents-->
		<?php get_sidebar(); ?>
</div><!--wrapper-->
<?php get_footer(); ?>
