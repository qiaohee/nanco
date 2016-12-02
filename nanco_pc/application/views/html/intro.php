
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
					<h1>HTML 简介</h1>

					<div class="post-meta clearfix">
						<span class="date">2016年12月2日</span>
						<span class="category">收藏</span>
						<span class="comments">赞</span>
						<span class="like-count">分享</span>
					</div><!-- end of post meta -->

					<div>
						<p>您可以使用 HTML 来建立自己的 WEB 站点。</p>
						<p>在本教程中，您将学习如何使用 HTML 来创建站点。</p>
						<p>HTML 易学习，相信您能很快学会它，切记注意细节！</p>
					</div>

					<h4>HTML 实例</h4>
					<div>
						<p>本教程包含了数百个 HTML 实例。</p>
						<p>使用本站的实例，您可以轻松的查看运行结果。</p>
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
					<div class="html_mind">
						<h1 id="html_mind">我的第一个标题</h1><br>
						<p>我的第一个段落</p>
					</div>
					<br>
					<br>
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