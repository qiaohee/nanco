
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
					<h3>HTML 教程- (HTML5 标准)</h3>

					<div class="post-meta clearfix">
						<span class="date">25 Feb, 2013</span>
						<span class="category">收藏</span>
						<span class="comments">赞</span>
						<span class="like-count">分享</span>
					</div><!-- end of post meta -->

					<div>
					<p>您可以使用 HTML 来建立自己的 WEB 站点。</p>
					<p>在本教程中，您将学习如何使用 HTML 来创建站点。</p>
					<p>HTML 很容易学习！相信您能很快学会它！</p>
					</div>

					<h4>HTML 实例</h4>
					<div>
						<p>本教程包含了数百个 HTML 实例。</p>
						<p>使用本站的编辑器，您可以轻松实现在线修改 HTML，并查看实例运行结果。</p>
					</div>
					<div class="html_mind">
						<p><i>注意：对于中文网页需要使用<span> <</span>meta charset="utf-8"<span>> </span> 声明编码，否则会出现乱码。</i></p>
					</div>
					<br>
					<h4>实例</h4>
					<div class="html_mind">
						<span> <</span>!DOCTYPE html><br>
						<span> <</span>html><br>
						<span> <</span>body><br>
						<span> <</span>h1>我的第一个标题<span><</span>/h1><br>
						<span> <</span>p>我的第一个段落<span><</span>/p><br>
						<span> <</span>/body><br>
						<span> <</span>/html><br>
					</div>
					<div class="html_mind" id="html_mind">
						<h1>我的第一个标题</h1><br>
						<p>我的第一个段落</p>
					</div>
					<br>
					<br>
					<a href="/html/html_intro.html">开始学习HTML!</a>

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