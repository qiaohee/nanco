
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

					<h4>实例</h4>
					<div class="html_mind">
						&lt;!DOCTYPE html&gt;<br>
						&lt;html&gt;<br>
						&lt;body&gt;<br>
						&lt;h1&gt;我的第一个标题&lt;/h1&gt;<br>
						&lt;p&gt;我的第一个段落。&lt;/p&gt;<br>
						&lt;/body&gt;<br>
						&lt;/html&gt;<br>
					</div>
					<h4>实例解析</h4>
					<ul>
						<li>DOCTYPE 声明了文档类型</li>
						<li>位于标签 &lt;html&gt; 与 &lt;/html&gt; 描述了文档类型</li>
						<li>位于标签 &lt;body&gt; 与 &lt;/body&gt; 为可视化网页内容 </li>
						<li>位于标签 &lt;h1&gt; 与 &lt;/h1&gt; 作为一个标题使用</li>
						<li>位于标签 &lt;p&gt; 与 &lt;/p&gt; 作为一个段落显示</li>
					</ul>
					<div class="html_mind_two">
						<p class="p1"><span><</span>!DOCTYPE html> 在HTML5中也是描述了文档类型。</p>
					</div>
					<h4>什么是HTML?</h4>
					<p>HTML 是用来描述网页的一种语言。</p>
					<ul>
						<li>HTML 指的是超文本标记语言: <b class="color">H</b>yper<b class="color">T</b>ext <b class="color">M</b>arkup <b class="color">L</b>anguage</li>
						<li>HTML 不是一种编程语言，而是一种<b class="color">标记</b>语言</li>
						<li>标记语言是一套<b class="color">标记标签</b> (markup tag)</li>
						<li>HTML 使用标记标签来<b class="color">描述</b>网页</li>
						<li>HTML 文档包含了HTML<b class="color"> 标签</b>及<b class="color">文本</b>内容</li>
						<li>HTML文档也叫做<b class="color"> web 页面</b></li>
					</ul>
					<h4>HTML 标签</h4>
					<p>HTML 标记标签通常被称为 HTML 标签 (HTML tag)。</p>
					<ul>
						<li>HTML 标签是由<b class="color">尖括号</b>包围的关键词，比如 &lt;html&gt;</li>
						<li>HTML 标签通常是<b class="color">成对出现</b>的，比如 &lt;b&gt; 和 &lt;/b&gt;</li>
						<li>标签对中的第一个标签是<b class="color">开始标签</b>，第二个标签是<b class="color">结束标签</b></li>
						<li>开始和结束标签也被称为<b class="color">开放标签</b>和<b class="color">闭合标签</b></li>
					</ul>
					<div class="html_mind_two">
						<p class="p2"><span><标签></span>内容<span>&lt;/标签></span></p>
					</div>
					<h4>HTML 元素</h4>
					<p>"HTML 标签" and "HTML 元素" 通常都是描述同样的意思.</p>
					<p>但是严格来讲, 一个 HTML 元素包含了开始标签与结束标签，如下实例: </p>
					<p>HTML 元素:</p>
					<div class="html_mind_two">
						<p class="p2"><span>&lt;p></span>这是一个段落。<span>&lt;/p></span></p>
					</div>
					<h4>Web 浏览器</h4>
					<p>Web浏览器（如谷歌浏览器，Internet Explorer，Firefox，Safari）是用于读取HTML文件，并将其作为网页显示。</p>
					<p>浏览器并不是直接显示的HTML标签，但可以使用标签来决定如何展现HTML页面的内容给用户：</p>
					<p>
						<img src="<?php echo base_url('/skin/images/html_one.png')?>">
					</p>
					<h4>HTML 网页结构</h4>
					<p>下面是一个可视化的HTML页面结构：</p>
					<div class="html_structure">&lt;html&gt;
						<div class="html_structure">&lt;head&gt;
							<div class="html_structure">&lt;title&gt;页面标题&lt;/title&gt;</div>&lt;/head&gt;
						</div>
						<div class="html_structure_one">&lt;body&gt;
							<div class="html_structure">&lt;h1&gt;这是一个标题&lt;/h1&gt; </div>
							<div class="html_structure">&lt;p&gt;这是一个段落。&lt;/p&gt; </div>
							<div class="html_structure">&lt;p&gt;这是另外一个段落。&lt;/p&gt; </div>&lt;/body&gt;
						</div>&lt;/html&gt;
					</div>
					<div class="html_mind_two">
						<p class="p1">只有 &lt;body&gt; 区域 (橘红边框部分) 才会在浏览器中显示。</p>
					</div>
					<h4>HTML版本</h4>
					<p>从初期的网络诞生后，已经出现了许多HTML版本:</p>
					<table>
						<tbody><tr>
							<th>版本</th>
							<th>发布时间</th>
						</tr>
						<tr>
							<td>HTML</td>
							<td>1991</td>
						</tr>
						<tr>
							<td>HTML+</td>
							<td>1993</td>
						</tr>
						<tr>
							<td>HTML 2.0</td>
							<td>1995</td>
						</tr>
						<tr>
							<td>HTML 3.2</td>
							<td>1997</td>
						</tr>
						<tr>
							<td>HTML 4.01</td>
							<td>1999</td>
						</tr>
						<tr>
							<td>XHTML 1.0</td>
							<td>2000</td>
						</tr>
						<tr>
							<td>HTML5</td>
							<td>2012</td>
						</tr>
						<tr>
							<td>XHTML5</td>
							<td>2013</td>
						</tr>

						</tbody></table>
					<h4> &lt;!DOCTYPE&gt; 声明</h4>
					<p>&lt;!DOCTYPE&gt;声明有助于浏览器中正确显示网页。</p>
					<p>网络上有很多不同的文件，如果能够正确声明HTML的版本，浏览器就能正确显示网页内容。</p>
					<p>doctype 声明是不区分大小写的，以下方式均可： </p>
					<div class="html_mind">
						<p>&lt;!DOCTYPE html&gt;</p>
						<p>&lt;!DOCTYPE HTML&gt;</p>
						<p>&lt;!doctype html&gt;</p>
						<p>&lt;!Doctype Html&gt;</p>
					</div>
					<h4>通用声明</h4>
					<h5>HTML5</h5>
					<div class="html_mind_two">
						<p class="p2">&lt;!DOCTYPE html></p>
					</div>
					<h5>HTML 4.01</h5>
					<div class="html_mind_two">
						<p class="p2">
							&lt;!DOCTYPE HTML PUBLIC
							"-//W3C//DTD HTML 4.01 Transitional//EN"<br>
							"http://www.w3.org/TR/html4/loose.dtd"&gt;
						</p>
					</div>
					<h5>XHTML 1.0</h5>
					<div class="html_mind_two">
						<p class="p2">&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
							"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"&gt;</p>
					</div>
					<h4>中文编码</h4>
					<p>目前在大部分浏览器中，直接输出中文会出现中文乱码的情况，这时候我们就需要在头部将字符声明为 UTF-8。</p>
					<div class="html_mind">
						&lt;!DOCTYPE html&gt;<br>
						&lt;html&gt;<br>
						&lt;head&gt;<br>
							&lt;meta charset="UTF-8"&gt;<br>
							&lt;title>页面标题&lt;/title&gt;<br>
							&lt;/head&gt;<br>
						&lt;body&gt;<br>
						&lt;h1&gt;我的第一个标题&lt;/h1&gt;<br>
						&lt;p&gt;我的第一个段落。&lt;/p&gt;<br>
						&lt;/body&gt;<br>
						&lt;/html&gt;<br>
					</div>
					<br>
					<br>
					<a class="html_a" href="/html/html_intro.html">HTML 教程</a>
					<a class="html_b" href="/html/html_editors.html">HTML 编辑器</a>

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