<?php //コメント数の多い順番 ?>
<?php query_posts( '&posts_per_page=5&orderby=comment_count&order=DESC&ignore_sticky_posts=1'  ); ?>
<div class="ranking box bt bs mb30">
  <h2>ランキング</h2>
  <div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php if ( has_post_thumbnail() ): // サムネイルを持っているときの処理 
        $x = 1; ?>
                <dl>
                    <dt class="popular-rank"><?php echo $x; ?></dt>
                    <dd class="popular-image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></dd>

                <?php else: // サムネイルを持っていないときの処理 ?>
                    <dd class="popular-image"><a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" alt="NO IMAGE" title="NO IMAGE" /></a></dd>
                <?php endif; ?>
  
                    <dd class="popular-title"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></dd>
                </dl>
<?php endwhile;

else :
  echo '<p>人気記事はありません。</p>';
endif; ?>
  </div><!-- /.popular-entry-thumb -->
</div><!-- /.popular-entry -->
<?php wp_reset_query(); ?>