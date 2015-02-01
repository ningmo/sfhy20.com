<?php get_header(); ?>
    
    <div class="content-wrap">
	<div class="content">
		<div class="quicker">
        
            <h3>分类目录</h3>
            <ul>
              
                <li><?php wp_list_categories('title_li='); ?></li>  
                
            </ul>

		</div>
		
		<ul class="excerpt">
		
		  <?php while (have_posts()) : the_post(); ?> 
            <!-- content -->    	
			<li>
				<div class="post_date">
					<span class="date_d"><?php the_time('d') ?></span>
					<span class="date_ym"><?php the_time('Y') ?>.<?php echo date('m',get_the_time('U'));?></span>
					</div>
				<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<div class="note"><?php echo mb_strimwidth(strip_tags(apply_filters('the_excerpt', $post->post_content)), 0, 1000,"...");?></div><br>
				<span><?php the_tags('标签：', ', ', ''); ?><span>
			</li>
            <!-- content end-->    
          <?php endwhile; ?>
            
		</ul>
        
        
	   <div class="paging">
               <?php kriesi_pagination($query_string); ?>  
       </div>
</div>
</div>
    <?php get_sidebar();  //右侧栏 ?>   
</div>
<style>
	.blue{
		background:blue;
	}
	.btntwo{border:1px solid #02598E;width:15px;background-color:#1E7BB3;color:#ffffff;border-radius: 8px 8px 8px 8px;}
</style>
<script>
$(function(){
   $("#wp-calendar td").mouseover(function(){
		var num = Number($(this).html());
		$(this).addClass('btntwo');
		$("#wp-calendar td").each(function(){
			if(Number($(this).html()) !== num){
				$(this).removeClass('btntwo');
			}
		});
   }); 
});
</script>
<?php get_footer(); ?>