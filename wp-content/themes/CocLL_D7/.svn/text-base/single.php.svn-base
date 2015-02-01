<?php get_header(); ?>

	<div class="content-wrap">
	<div class="content">

          <?php while (have_posts()) : the_post(); ?>
		   <div class="meta">
				<h1 class="meta-tit">
				       <a href="<?php the_permalink() ?>" title="<?php printf(__('%s', 'kubrick'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a>
				</h1>

				<p class="meta-info">
					<?php the_time(__('Y/m/d')) ?>  &nbsp;&nbsp; 
					分类：<?php the_category(',') ?> &nbsp;&nbsp; 
					<a class="comm" href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
					<?php if(function_exists('the_views')) { the_views(); } ?>人评论</a>
					<span class="view"><?php if(function_exists('the_views')) {the_views();} ?>次浏览</span>	
				</p>
		    </div>
		
		
		<div class="entry">
		 <?php the_content(); ?>
    	</div>
      
      <?php endwhile; ?>
		<div class="db_post" style="margin:-15px 0 15px 0;">
</div>		
		<div class="single-tag">
			继续查看有关 <?php the_category(',') ?> 的文章
		</div>

		<ul class="post-related">
		
		         <div style="margin-left:0px;float:left;">相关文章：</div><br><?php
					global $post;
					$cats = wp_get_post_categories($post->ID);
					if ($cats) {
					$args = array(
							'category__in' => array( $cats[0] ),
							'post__not_in' => array( $post->ID ),
							'showposts' => 4,
							'caller_get_posts' => 1
						);
					query_posts($args);

					if (have_posts()) :
						while (have_posts()) : the_post(); update_post_caches($posts); ?>
				   <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				
				<?php endwhile; else : ?>
					<li>* 暂无相关文章</li>
				<?php endif; wp_reset_query(); } ?>	
        </ul>
		
		
             <?php comments_template(); ?> 
   </div>
			
</div>

<?php get_sidebar();  //右侧栏 ?>   

</div>
<script src="<?php bloginfo('template_directory'); ?>/js/post.js"></script>

<?php get_footer(); ?>