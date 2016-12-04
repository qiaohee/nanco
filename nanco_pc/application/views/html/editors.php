
<!-- Start of Page Container -->
<div class="page-container">
	<div class="container">
		<div class="row">
			<!-- start of sidebar -->
			<aside class="span2 page-sidebar">
				<section class="widget">
					<div class="quick-links-widget">
						<h3 class="title">HTML 教程</h3>
						<ul id="menu-quick-links" class="menu clearfix">
							<?php foreach($son_type as $k=>$v){?>
								<li><a href="<?php echo site_url('/'.$type['link'].'/'.$type['link'].'_'.$v['linkurl']);?>"><?php echo strtoupper($type['link']).' '.$v['typename'];?></a></li>
							<?php }?>
						</ul>
					</div>
				</section>

			</aside>
			<!-- end of sidebar -->

			<!-- start of page content -->
			<div class="span8 page-content">

				<article class="type-post format-standard hentry clearfix">
					<h1>HTML 教程- (HTML5 标准)</h1>

					<div class="post-meta clearfix">
						<span class="date">2016年12月2日</span>
						<span class="category">收藏</span>
						<span class="comments">赞</span>
						<span class="like-count">分享</span>
					</div><!-- end of post meta -->

					<?php echo $content;?>

					<a class="html_a" href="/html/html_intro.html">开始学习HTML!</a>

				</article>

			</div>
			<!-- end of page content -->

			<!-- start of sidebar -->
			<aside class="span2 page-sidebar">
				<section class="widget">
					<div class="quick-links-widget">
						<h3 class="title">分类导航</h3>
						<ul id="menu-quick-links" class="menu clearfix">
							<?php foreach($type_all as $k=>$v){?>
								<li><a href="<?php echo site_url('/'.$v['link'].'/'.$v['link'].'_'.$v['linkurl']);?>"><?php echo $v['typename'];?></a></li>
							<?php }?>
						</ul>
					</div>
				</section>

			</aside>
			<!-- end of sidebar -->
		</div>
	</div>
</div>
<!-- End of Page Container -->

</div>
</div>
</div>
<!-- End of Page Container -->
<script>
	$(function(){
		layer.tips('差点不知道，这是就是运行结果，我要努力了！', '#html_mind', {
			tips: [1, '#cb8579'],
			time: 0
		});
	})
</script>