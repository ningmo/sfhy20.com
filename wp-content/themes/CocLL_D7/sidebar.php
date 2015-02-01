<div class="sidebar">
	<div class="widget widget_d_theme">
		<h3 class="widget_tit">日历</h3>
		<?php get_calendar(); ?>
	</div>

	<ul class="tab_menu">
		<li class="current widget_tit">热门围观</li>
		<li class="widget_tit">最新文章</li>
		<li class="widget_tit">最新评论</li>
	</ul>
	<div class="tab_content widget_d_comment">
		<div>
			<ul class="tab_post_links">
			<?php simple_get_most_viewed(); ?>
			</ul>
		</div>
		<div class="hide" id="yincang">
			<ul class="tab_post_links">
			<?php $myposts = get_posts('numberposts=10&offset=0');foreach($myposts as $post) :?>
				<li><a href="<?php the_permalink(); ?>" rel="bookmark"
					style="padding-left: 0;" target="_blank"
					title="详细阅读 <?php the_title_attribute(); ?>"><?php echo cut_str($post->post_title,37); ?>
				</a></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div class="hide" id="yincang">
			<div class="r_comment">
				<ul>
				<?php
				global $wpdb;
				$sql = "SELECT DISTINCT ID, post_title, post_password, comment_ID, comment_post_ID, comment_author, comment_date_gmt, comment_approved, comment_type,comment_author_url,comment_author_email, SUBSTRING(comment_content,1,16) AS com_excerpt FROM $wpdb->comments LEFT OUTER JOIN $wpdb->posts ON ($wpdb->comments.comment_post_ID = $wpdb->posts.ID) WHERE comment_approved = '1' AND comment_type = '' AND post_password = '' AND user_id='0' ORDER BY comment_date_gmt DESC LIMIT 10";
				$comments = $wpdb->get_results($sql);
				$output = $pre_HTML;
				if(!empty($comments))
				{
					foreach ($comments as $comment) {$output .= "\n<li>".get_avatar(get_comment_author_email(), 32).strip_tags($comment->comment_author).":<br />" . " <a href=\"" . get_permalink($comment->ID) ."#comment-" . $comment->comment_ID . "\" title=\"查看 " .$comment->post_title . "\">" . strip_tags($comment->com_excerpt)."</a></li>";}
					$output .= $post_HTML;
					$output = convert_smilies($output);
					echo $output;
				}
				?>
				</ul>
			</div>
		</div>
	</div>
		<a data-type="3" data-tmpl="250x250" data-tmplid="185" data-rd="2" data-style="2" data-border="1" href="#"></a>
	<?php /*
	<div class="widget widget_links">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('小工具1') ) : ?>
		<?php endif; ?>
	</div>
	<!--link -->
	
	<div class="widget widget_links">
		<h3 class="widget_tit">友情链接</h3>
		<ul class='xoxo blogroll'>
			<?php get_links('-1', '<li>', '</li>', '<br />', FALSE, 'id', FALSE, FALSE, -1, FALSE); ?>
		</ul>
	</div>
	<!--link  end-->
	*/
	?>
</div>


<script type="text/javascript">
<!--
	//侧边栏TAB效果
jQuery(document).ready(function(){
	jQuery('#yincang').hide()
	jQuery('.tab_menu li').mouseover(function(){
		jQuery(this).addClass("current").siblings().removeClass();
			jQuery(".tab_content > div").eq(jQuery('.tab_menu li').index(this)).fadeIn(650).siblings().hide();
	});
});
//-->
</script>
<script type="text/javascript"> (function(win,doc){ var s = doc.createElement("script"), h = doc.getElementsByTagName("head")[0]; if (!win.alimamatk_show) { s.charset = "gbk"; s.async = true; s.src = "http://a.alimama.cn/tkapi.js"; h.insertBefore(s, h.firstChild); }; var o = { pid: "mm_34046455_7526228_25482592",/*推广单元ID，用于区分不同的推广渠道*/ appkey: "",/*通过TOP平台申请的appkey，设置后引导成交会关联appkey*/ unid: ""/*自定义统计字段*/ }; win.alimamatk_onload = win.alimamatk_onload || []; win.alimamatk_onload.push(o); })(window,document);</script>