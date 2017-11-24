		<div id="sidebar">
				<div class="category box bt bs mb30">
						<h2>カテゴリー</h2>
						<ul class="tagCrowd">
						<?php
						    $cat_all = get_terms( "category", "fields=all&get=all" );
						    foreach($cat_all as $value):
						 ?>
								<li><a href="<?php echo get_category_link($value->term_id); ?>"><?php echo $value->name;?></a></li>
						<?php endforeach; ?>
						</ul><!--tagCrowd-->
				</div><!--category-->
				<div class="search bs mb30">
						<form action="#" method="get">
								<input type="text" name="keyword" Placeholder="検索">
								<button type="submit"><img src="<?php bloginfo('template_url'); ?>/img/icon_search.png" alt="検索アイコン"></button>
						</form>
				</div><!--search-->
				<div class="ranking box bt bs mb30">
				    <h2>ランキング</h2>
				    <div>
				<?php echo most_viewed_posts(); ?>
				    </div>
				</div>
<!-- 				<div class="ranking box bt bs mb30">
						<h2>ランキング</h2>
						<div>
								<dl>
										<dt>1</dt>
										<dd>ここに記事タイトルが入ります。</dd>
								</dl>
								<dl>
										<dt>2</dt>
										<dd>ここに記事タイトルが入ります。</dd>
								</dl>
								<dl>
										<dt>3</dt>
										<dd>ここに記事タイトルが入ります。</dd>
								</dl>
								<dl>
										<dt>4</dt>
										<dd>ここに記事タイトルが入ります。</dd>
								</dl>
								<dl>
										<dt>5</dt>
										<dd>ここに記事タイトルが入ります。</dd>
								</dl>
						</div>
				</div> -->
				<div class="ad bs">
						<p>ここに広告入ります。</p>
				</div>
		</div><!--sidebar-->