<?php get_header(); ?>

	<div class="content-wrap">
	<div class="content">

          <?php while (have_posts()) : the_post(); ?>
		   <div class="meta">
				<h1 class="meta-tit">
				       <a href="<?php the_permalink() ?>" title="<?php printf(__('%s', 'kubrick'), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a>
				</h1>
		    </div>
		
		
		
		<div class="entry">
		 <?php the_content(); ?>
         <br><br>
    	</div>
      
      <?php endwhile; ?>
		<ul class="post-related">
		
		         <?php
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
				    <li><a href="<?php the_permalink(); ?>"><img src="<?php  echo catch_that_image(); ?>" alt="<?php the_title_attribute();?>" /><?php the_title(); ?></a></li>
				
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