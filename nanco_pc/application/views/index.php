
<!-- Start of Page Container -->
<div class="page-container">
	<div class="container">
		<div class="row">
			<!-- start of sidebar -->
			<aside class="span2 page-sidebar">
				<section class="widget">
					<div class="quick-links-widget">
						<h3 class="title">全部教程</h3>
						<ul id="menu-quick-links" class="menu clearfix">
							<?php foreach($type as $k=>$v){?>
							<li><a href="<?php echo $v['linkurl'];?>"><?php echo $v['typename'];?></a></li>
							<?php }?>
						</ul>
					</div>
				</section>

			</aside>
			<!-- end of sidebar -->

			<!-- start of page content -->
			<div class="span10 page-content">

				<div class="row home-category-list-area">
					<div id="html" class="span10">
						<h2>HTML / CSS</h2>
					</div>
				</div>

				<div class="row-fluid top-cats">

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/html.png')?>">
							<a target="_blank" href="http://www.runoob.com/html/html-tutorial.html">【学习 HTML】</a>
						</h4>
						<div class="category-description">
							<p>HTML，即超文本标记语言（Hyper Text Markup Language）</p>
						</div>
					</section>

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/html5.png')?>">
							<a target="_blank" href="http://www.runoob.com/html/html5-intro.html">【学习 HTML5】</a>
						</h4>
						<div class="category-description">
							<p>HTML5 是下一代 HTML 标准</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/css.png')?>">
							<a target="_blank" href="http://www.runoob.com/css/css-tutorial.html">【学习 CSS】</a>
						</h4>
						<div class="category-description">
							<p>层叠样式表（Cascading StyleSheet）</p>
						</div>
					</section>
				</div>
				<div class="row-fluid top-cats">

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/css3.png')?>">
							<a target="_blank" href="http://www.runoob.com/css3/css3-tutorial.html">【学习 CSS3】</a>
						</h4>
						<div class="category-description">
							<p>CSS3是CSS技术的升级版本</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/bootstrap.png')?>">
							<a target="_blank" href="http://www.runoob.com/bootstrap/bootstrap-tutorial.html">【学习 Bootstrap】</a>
						</h4>
						<div class="category-description">
							<p>Bootstrap，来自 Twitter，是目前最受欢迎的前端框架</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/foundation.png')?>">
							<a target="_blank" href="http://www.runoob.com/foundation/foundation-tutorial.html">【学习 Foundation】</a>
						</h4>
						<div class="category-description">
							<p>Foundation 用于开发响应式的 HTML, CSS and JavaScript 框架</p>
						</div>
					</section>
				</div>

				<div class="row home-category-list-area">
					<div id ="js" class="span10">
						<h2>JavaScript</h2>
					</div>
				</div>

				<div class="row-fluid top-cats">

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/js.png')?>">
							<a target="_blank" href="http://www.runoob.com/js/js-tutorial.html">【学习 JavaScript】</a>
						</h4>
						<div class="category-description">
							<p>JavaScript 是 Web 的编程语言</p>
						</div>
					</section>

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/htmldom.png')?>">
							<a target="_blank" href="http://www.runoob.com/htmldom/htmldom-tutorial.html">【学习 HTML DOM】</a>
						</h4>
						<div class="category-description">
							<p>HTML DOM 定义了访问和操作 HTML 文档的标准方法</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/jquery.png')?>">
							<a target="_blank" href="http://www.runoob.com/jquery/jquery-tutorial.html">【学习 jQuery】</a>
						</h4>
						<div class="category-description">
							<p>jQuery 是一个 JavaScript 库</p>
						</div>
					</section>
				</div>
				<div class="row-fluid top-cats">

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/angularjs.png')?>">
							<a target="_blank" href="http://www.runoob.com/angularjs/angularjs-tutorial.html">【学习 AngularJS】</a>
						</h4>
						<div class="category-description">
							<p>AngularJS 通过新的属性和表达式扩展了 HTML</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/angularjs2.png')?>">
							<a target="_blank" href="http://www.runoob.com/angularjs2/angularjs2-tutorial.html">【学习 AngularJS2】</a>
						</h4>
						<div class="category-description">
							<p>AngularJS2 是一款开源JavaScript库，由Google维护。</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/react.png')?>">
							<a target="_blank" href="http://www.runoob.com/react/react-tutorial.html">【学习 React】</a>
						</h4>
						<div class="category-description">
							<p>React 是一个用于构建用户界面的 JAVASCRIPT 库</p>
						</div>
					</section>
				</div>
				<div class="row-fluid top-cats">
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/jqueryui.png')?>">
							<a target="_blank" href="http://www.runoob.com/jqueryui/jqueryui-tutorial.html">【学习 jQuery UI】</a>
						</h4>
						<div class="category-description">
							<p>jQuery UI 是建立在 jQuery上的一组用户界面交互、特效、小部件及主题</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/jeasyui.png')?>">
							<a target="_blank" href="http://www.runoob.com/jeasyui/jqueryeasyui-tutorial.html">【学习 jQuery EasyUI 】</a>
						</h4>
						<div class="category-description">
							<p>jQuery EasyUI 是一个基于 jQuery 的框架，集成了各种用户界面插件</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/nodejs.png')?>">
							<a target="_blank" href="http://www.runoob.com/nodejs/nodejs-tutorial.html">【学习 Node.js】</a>
						</h4>
						<div class="category-description">
							<p>Node.js 是运行在服务端的 JavaScript</p>
						</div>
					</section>
				</div>

				<div class="row-fluid top-cats">
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/ajax.png')?>">
							<a target="_blank" href="http://www.runoob.com/ajax/ajax-tutorial.html">【学习 AJAX】</a>
						</h4>
						<div class="category-description">
							<p>AJAX = Asynchronous JavaScript and XML（异步的 JavaScript 和 XML）</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/json.png')?>">
							<a target="_blank" href="http://www.runoob.com/json/json-tutorial.html">【学习 JSON】</a>
						</h4>
						<div class="category-description">
							<p>JSON 是存储和交换文本信息的语法</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/highcharts.png')?>">
							<a target="_blank" href="http://www.runoob.com/highcharts/highcharts-tutorial.html">【学习 Highcharts】</a>
						</h4>
						<div class="category-description">
							<p>Highcharts 是一个用纯JavaScript编写的一个图表库</p>
						</div>
					</section>
				</div>
				<div class="row-fluid top-cats">
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/googleapi.png')?>">
							<a target="_blank" href="http://www.runoob.com/googleapi/google-maps-basic.html">【学习 Google 地图】</a>
						</h4>
						<div class="category-description">
							<p>Google 地图接口使用说明</p>
						</div>
					</section>
				</div>

				<div class="row home-category-list-area">
					<div id ="server" class="span10">
						<h2>服务端</h2>
					</div>
				</div>

				<div class="row-fluid top-cats">

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/pl.png')?>">
							<a target="_blank" href="http://www.runoob.com/php/php-tutorial.html">【学习 PHP】</a>
						</h4>
						<div class="category-description">
							<p>PHP 是一种通用开源脚本语言</p>
						</div>
					</section>

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/python.png')?>">
							<a target="_blank" href="http://www.runoob.com/python/python-tutorial.html">【学习 Python】</a>
						</h4>
						<div class="category-description">
							<p>Python 是一种面向对象、解释型计算机程序设计语言</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/python3.png')?>">
							<a target="_blank" href="http://www.runoob.com/python3/python3-tutorial.html">【学习 Python3】</a>
						</h4>
						<div class="category-description">
							<p>Python 升级版，变化较大</p>
						</div>
					</section>
				</div>

				<div class="row-fluid top-cats">

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/django.png')?>">
							<a target="_blank" href="http://www.runoob.com/django/django-tutorial.html">【学习 Django】</a>
						</h4>
						<div class="category-description">
							<p>Django是一个开放源代码的Web应用框架，由Python写成</p>
						</div>
					</section>

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/linux.png')?>">
							<a target="_blank" href="http://www.runoob.com/linux/linux-tutorial.html">【学习 Linux】</a>
						</h4>
						<div class="category-description">
							<p>Linux是一套免费使用和自由传播的类Unix操作系统</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/docker.png')?>">
							<a target="_blank" href="http://www.runoob.com/docker/docker-tutorial.html">【学习 Docker】</a>
						</h4>
						<div class="category-description">
							<p>Docker 是一个开源的应用容器引擎，基于 Go 语言</p>
						</div>
					</section>
				</div>

				<div class="row-fluid top-cats">

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/ruby.png')?>">
							<a target="_blank" href="http://www.runoob.com/ruby/ruby-tutorial.html">【学习 Ruby】</a>
						</h4>
						<div class="category-description">
							<p>一种为简单快捷的面向对象编程（面向对象程序设计）而创的脚本语言</p>
						</div>
					</section>

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/java.png')?>">
							<a target="_blank" href="http://www.runoob.com/java/java-tutorial.html">【学习 Java】</a>
						</h4>
						<div class="category-description">
							<p>一种可以撰写跨平台应用软件的面向对象的程序设计语言</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/c.png')?>">
							<a target="_blank" href="http://www.runoob.com/c/c-tutorial.html">【学习 C】</a>
						</h4>
						<div class="category-description">
							<p>一门通用计算机编程语言</p>
						</div>
					</section>
				</div>

				<div class="row-fluid top-cats">

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/cpp.png')?>">
							<a target="_blank" href="http://www.runoob.com/cplusplus/cpp-tutorial.html">【学习 C++】</a>
						</h4>
						<div class="category-description">
							<p>C++是在C语言的基础上开发的一种通用编程语言</p>
						</div>
					</section>

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/perl.png')?>">
							<a target="_blank" href="http://www.runoob.com/perl/perl-tutorial.html">【学习 Perl】</a>
						</h4>
						<div class="category-description">
							<p>Perl 是高级、通用、直译式、动态的程序语言</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/servlet.png')?>">
							<a target="_blank" href="http://www.runoob.com/servlet/servlet-tutorial.html">【学习 Servlet 】</a>
						</h4>
						<div class="category-description">
							<p>运行在 Web 服务器或应用服务器上的程序</p>
						</div>
					</section>
				</div>

				<div class="row-fluid top-cats">

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/jsp.png')?>">
							<a target="_blank" href="http://www.runoob.com/jsp/jsp-tutorial.html">【学习 JSP】</a>
						</h4>
						<div class="category-description">
							<p>JSP与PHP、ASP、ASP.NET等语言类似，运行在服务端的语言</p>
						</div>
					</section>

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/lua.png')?>">
							<a target="_blank" href="http://www.runoob.com/lua/lua-tutorial.html">【学习 Lua】</a>
						</h4>
						<div class="category-description">
							<p>Lua 是一种轻量小巧的脚本语言，用标准C语言编写并以源代码形式开放</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/scala.png')?>">
							<a target="_blank" href="http://www.runoob.com/scala/scala-tutorial.html">【学习 Scala】</a>
						</h4>
						<div class="category-description">
							<p>Scala 是一门多范式（multi-paradigm）的编程语言。</p>
						</div>
					</section>
				</div>

				<div class="row-fluid top-cats">

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/go.png')?>">
							<a target="_blank" href="http://www.runoob.com/go/go-tutorial.html">【学习 Go】</a>
						</h4>
						<div class="category-description">
							<p>Go语言是谷歌推出的一种全新的编程语言</p>
						</div>
					</section>

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/design-pattern.png')?>">
							<a target="_blank" href="http://www.runoob.com/design-pattern/design-pattern-tutorial.html">【设计模式】</a>
						</h4>
						<div class="category-description">
							<p>设计模式代表了最佳的实践，通常被有经验的面向对象的软件开发人员所采用</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/regexp.png')?>">
							<a target="_blank" href="http://www.runoob.com/regexp/regexp-tutorial.html">【正则表达式】</a>
						</h4>
						<div class="category-description">
							<p>正则表达式是对字符串操作的一种逻辑公式</p>
						</div>
					</section>
				</div>

				<div class="row-fluid top-cats">

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/asp.png')?>">
							<a target="_blank" href="http://www.runoob.com/asp/asp-tutorial.html">【学习 ASP】</a>
						</h4>
						<div class="category-description">
							<p>ASP（Active Server Pages 动态服务器页面）是一种生成动态交互性网页的强有力工具</p>
						</div>
					</section>

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/appml.png')?>">
							<a target="_blank" href="http://www.runoob.com/appml/appml-tutorial.html">【学习 AppML】</a>
						</h4>
						<div class="category-description">
							<p>AppML 是一个为web应用程序设计的HTML扩展框</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/vbscript.png')?>">
							<a target="_blank" href="http://www.runoob.com/vbscript/vbscript-tutorial.html">【学习 VBScript】</a>
						</h4>
						<div class="category-description">
							<p>一种微软环境下的轻量级的解释型语言</p>
						</div>
					</section>
				</div>

				<div class="row home-category-list-area">
					<div id ="database" class="span10">
						<h2>数据库</h2>
					</div>
				</div>

				<div class="row-fluid top-cats">

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/sql.png')?>">
							<a target="_blank" href="http://www.runoob.com/sql/sql-tutorial.html">【学习 SQL】</a>
						</h4>
						<div class="category-description">
							<p>结构化查询语言(Structured Query Language)</p>
						</div>
					</section>

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/mysql.png')?>">
							<a target="_blank" href="http://www.runoob.com/mysql/mysql-tutorial.html">【学习 Mysql】</a>
						</h4>
						<div class="category-description">
							<p>MySQL是一个关系型数据库管理系统</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/sqlite.png')?>">
							<a target="_blank" href="http://www.runoob.com/sqlite/sqlite-tutorial.html">【学习 SQLite】</a>
						</h4>
						<div class="category-description">
							<p>一款轻型的数据库</p>
						</div>
					</section>
				</div>

				<div class="row-fluid top-cats">

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/sql.png')?>">
							<a target="_blank" href="http://www.runoob.com/mongodb/mongodb-tutorial.html">【学习 MongoDB】</a>
						</h4>
						<div class="category-description">
							<p>Mongo DB 是目前在IT行业非常流行的一种非关系型数据库(NoSql)</p>
						</div>
					</section>

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/redis.png')?>">
							<a target="_blank" href="http://www.runoob.com/redis/redis-tutorial.html">【学习 Redis】</a>
						</h4>
						<div class="category-description">
							<p>一个高性能的key-value数据库</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/Memcached.png')?>">
							<a target="_blank" href="http://www.runoob.com/Memcached/Memcached-tutorial.html">【学习 Memcached】</a>
						</h4>
						<div class="category-description">
							<p>Memcached是一个自由开源的，高性能，分布式内存对象缓存系统。</p>
						</div>
					</section>
				</div>

				<div class="row home-category-list-area">
					<div id ="mobile" class="span10">
						<h2>移动端</h2>
					</div>
				</div>

				<div class="row-fluid top-cats">

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/android.png')?>">
							<a target="_blank" href="http://www.runoob.com/w3cnote/android-tutorial-intro.html">【学习 Android】</a>
						</h4>
						<div class="category-description">
							<p>Android 是一种基于Linux的自由及开放源代码的操作系统，主要使用于移动设备</p>
						</div>
					</section>

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/swift.png')?>">
							<a target="_blank" href="http://www.runoob.com/swift/swift-tutorial.html">【学习 Swift】</a>
						</h4>
						<div class="category-description">
							<p>Swift 是一种支持多编程范式和编译式的编程语言,用于开发 iOS，OS X 和 watchOS应用程序。</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/jquerymobile.png')?>">
							<a target="_blank" href="http://www.runoob.com/jquerymobile/jquerymobile-tutorial.html">【学习 jQuery Mobile】</a>
						</h4>
						<div class="category-description">
							<p>jQuery Mobile是jQuery 在手机上和平板设备上的版本</p>
						</div>
					</section>
				</div>

				<div class="row-fluid top-cats">

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/ionic.png')?>">
							<a target="_blank" href="http://www.runoob.com/ionic/ionic-tutorial.html">【学习 ionic】</a>
						</h4>
						<div class="category-description">
							<p>ionic 是一个强大的 HTML5 应用程序开发框架(HTML5 Hybrid Mobile App Framework )。</p>
						</div>
					</section>

				</div>

				<div class="row home-category-list-area">
					<div id ="xml" class="span10">
						<h2>XML 教程</h2>
					</div>
				</div>

				<div class="row-fluid top-cats">

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/xml.png')?>">
							<a target="_blank" href="http://www.runoob.com/xml/xml-tutorial.html">【学习 XML】</a>
						</h4>
						<div class="category-description">
							<p>XML 被设计用来传输和存储数据</p>
						</div>
					</section>

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/dtd.png')?>">
							<a target="_blank" href="http://www.runoob.com/dtd/dtd-tutorial.html">【学习 DTD】</a>
						</h4>
						<div class="category-description">
							<p>DTD（文档类型定义）的作用是定义 XML 文档的合法构建模块</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/xmldom.png')?>">
							<a target="_blank" href="http://www.runoob.com/dom/dom-tutorial.html">【学习 XML DOM】</a>
						</h4>
						<div class="category-description">
							<p>XML DOM 定义访问和操作XML文档的标准方法</p>
						</div>
					</section>
				</div>

				<div class="row-fluid top-cats">

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/xslt.png')?>">
							<a target="_blank" href="http://www.runoob.com/xsl/xsl-tutorial.html">【学习 XSLT】</a>
						</h4>
						<div class="category-description">
							<p>XSL 是一个 XML 文档的样式表语言，XSLT 指 XSL 转换</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/xpath.png')?>">
							<a target="_blank" href="http://www.runoob.com/xpath/xpath-tutorial.html">【学习 XPath】</a>
						</h4>
						<div class="category-description">
							<p>XPath 是一门在 XML 文档中查找信息的语言</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/xquery.png')?>">
							<a target="_blank" href="http://www.runoob.com/xquery/xquery-tutorial.html">【学习 XQuery】</a>
						</h4>
						<div class="category-description">
							<p>XQuery 被设计用来查询 XML 数据</p>
						</div>
					</section>

				</div>


				<div class="row-fluid top-cats">

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/xlink.png')?>">
							<a target="_blank" href="http://www.runoob.com/xlink/xlink-tutorial.html">【学习 XLink】</a>
						</h4>
						<div class="category-description">
							<p>XLink 定义在 XML 文档中创建超级链接的标准方法</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/xpointer.png')?>">
							<a target="_blank" href="http://www.runoob.com/xlink/xlink-tutorial.html">【学习 XPointer】</a>
						</h4>
						<div class="category-description">
							<p>XPointer是在可扩展标志语言（XML）文件中定位数据的一种语言</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/schema.png')?>">
							<a target="_blank" href="http://www.runoob.com/schema/schema-tutorial.html">【学习 XML Schema】</a>
						</h4>
						<div class="category-description">
							<p>XML Schema 描述了 XML文档的结构</p>
						</div>
					</section>

				</div>


				<div class="row-fluid top-cats">

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/xslfo.png')?>">
							<a target="_blank" href="http://www.runoob.com/xslfo/xslfo-tutorial.html">【学习 XSL-FO】</a>
						</h4>
						<div class="category-description">
							<p>XSL-FO 指可扩展样式表语言格式化对象</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/svg.png')?>">
							<a target="_blank" href="http://www.runoob.com/svg/svg-tutorial.html">【学习 SVG】</a>
						</h4>
						<div class="category-description">
							<p>SVG 使用 XML 格式定义图像</p>
						</div>
					</section>

				</div>

				<div class="row home-category-list-area">
					<div id ="asp" class="span10">
						<h2>ASP.NET</h2>
					</div>
				</div>

				<div class="row-fluid top-cats">

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/aspnet.png')?>">
							<a target="_blank" href="http://www.runoob.com/aspnet/aspnet-tutorial.html">【学习 ASP.NET】</a>
						</h4>
						<div class="category-description">
							<p>ASP.NET 是一个使用 HTML、CSS、JavaScript 和服务器脚本创建网页和网站的开发框架</p>
						</div>
					</section>

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/csharp.png')?>">
							<a target="_blank" href="http://www.runoob.com/csharp/csharp-tutorial.html">【学习 C#】</a>
						</h4>
						<div class="category-description">
							<p>C# 是一个简单的、现代的、通用的、面向对象的编程语言</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/webpages.png')?>">
							<a target="_blank" href="http://www.runoob.com/aspnet/webpages-intro.html">【学习 Web Pages】</a>
						</h4>
						<div class="category-description">
							<p>ASP.NET 是一个使用 HTML、CSS、JavaScript 和服务器脚本创建网页和网站的开发框架</p>
						</div>
					</section>
				</div>

				<div class="row-fluid top-cats">

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/razor.png')?>">
							<a target="_blank" href="http://www.runoob.com/aspnet/razor-intro.html">【学习 Razor】</a>
						</h4>
						<div class="category-description">
							<p>Razor 是一种标记语法，可以让您将基于服务器的代码（Visual Basic 和 C#）嵌入到网页中</p>
						</div>
					</section>

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/mvc.png')?>">
							<a target="_blank" href="http://www.runoob.com/aspnet/mvc-intro.html">【学习 MVC】</a>
						</h4>
						<div class="category-description">
							<p>MVC（Model View Controller 模型-视图-控制器）</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/webforms.png')?>">
							<a target="_blank" href="http://www.runoob.com/aspnet/aspnet-intro.html">【学习 Web Forms】</a>
						</h4>
						<div class="category-description">
							<p>Web Forms 是三种创建 ASP.NET 网站和 Web 应用程序的编程模式中的一种</p>
						</div>
					</section>
				</div>

				<div class="row home-category-list-area">
					<div id ="web" class="span10">
						<h2>Web Services</h2>
					</div>
				</div>

				<div class="row-fluid top-cats">

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/webservices.png')?>">
							<a target="_blank" href="http://www.runoob.com/webservices/webservices-tutorial.html">【学习 Web Services】</a>
						</h4>
						<div class="category-description">
							<p>Web Services 脚本平台需支持 XML + HTTP</p>
						</div>
					</section>

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/wsdl.png')?>">
							<a target="_blank" href="http://www.runoob.com/wsdl/wsdl-tutorial.html">【学习 WSDL】</a>
						</h4>
						<div class="category-description">
							<p>WSDL是一门基于 XML 的语言，用于描述 Web Services 以及如何对它们进行访问</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/soap.png')?>">
							<a target="_blank" href="http://www.runoob.com/soap/soap-tutorial.html">【学习 SOAP】</a>
						</h4>
						<div class="category-description">
							<p>SOAP 是一种简单的基于 XML 的协议，它使应用程序通过 HTTP 来交换信息</p>
						</div>
					</section>
				</div>

				<div class="row-fluid top-cats">

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/rss.png')?>">
							<a target="_blank" href="http://www.runoob.com/rss/rss-tutorial.html">【学习 RSS】</a>
						</h4>
						<div class="category-description">
							<p>RSS基于XML标准，在互联网上被广泛采用的内容包装和投递协议</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/rdf.png')?>">
							<a target="_blank" href="http://www.runoob.com/rdf/rdf-tutorial.html">【学习 RDF】</a>
						</h4>
						<div class="category-description">
							<p>RDF(资源描述框架)是描述网络资源的 W3C 标准</p>
						</div>
					</section>
				</div>


				<div class="row home-category-list-area">
					<div id ="tool" class="span10">
						<h2>开发工具</h2>
					</div>
				</div>

				<div class="row-fluid top-cats">

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/eclipse.png')?>">
							<a target="_blank" href="http://www.runoob.com/eclipse/eclipse-tutorial.html">【学习 Eclipse】</a>
						</h4>
						<div class="category-description">
							<p>Eclipse 是一个开放源代码的、基于 Java 的可扩展开发平台</p>
						</div>
					</section>

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/git.png')?>">
							<a target="_blank" href="http://www.runoob.com/git/git-tutorial.html">【学习 Git】</a>
						</h4>
						<div class="category-description">
							<p>Git是一个开源的分布式版本控制系统，用于敏捷高效地处理任何或小或大的项目</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/firebug.png')?>">
							<a target="_blank" href="http://www.runoob.com/firebug/firebug-tutorial.html">【学习 Firebug】</a>
						</h4>
						<div class="category-description">
							<p>Firebug 是一个开源的web开发工具</p>
						</div>
					</section>
				</div>

				<div class="row home-category-list-area">
					<div id ="http" class="span10">
						<h2>网站建设</h2>
					</div>
				</div>

				<div class="row-fluid top-cats">

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/http.png')?>">
							<a target="_blank" href="http://www.runoob.com/http/http-tutorial.html">【学习 HTTP】</a>
						</h4>
						<div class="category-description">
							<p>HTTP协议（HyperText Transfer Protocol，超文本传输协议）是因特网上应用最为广泛的一种网络传输协议</p>
						</div>
					</section>

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/webbuildingprimer.png')?>">
							<a target="_blank" href="http://www.runoob.com/web/web-buildingprimer.html">【网站建设指南】</a>
						</h4>
						<div class="category-description">
							<p>网站建设指导课程</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/browsers.png')?>">
							<a target="_blank" href="http://www.runoob.com/browsers/browser-information.html">【浏览器信息】</a>
						</h4>
						<div class="category-description">
							<p>对于网站开发人员来说，浏览器信息和统计数据都是非常重要的</p>
						</div>
					</section>
				</div>

				<div class="row-fluid top-cats">

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/hosting.png')?>">
							<a target="_blank" href="http://www.runoob.com/hosting/hosting-tutorial.html">【网站主机教程】</a>
						</h4>
						<div class="category-description">
							<p>如果您希望向全世界发布自己的网站，那么您的网站就需要被放置于一个 WEB 服务器</p>
						</div>
					</section>

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/tcpip.png')?>">
							<a target="_blank" href="http://www.runoob.com/tcpip/tcpip-tutorial.html">【学习 TCP/IP】</a>
						</h4>
						<div class="category-description">
							<p>TCP/IP 是因特网的通信协议</p>
						</div>
					</section>
					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/w3c.png')?>">
							<a target="_blank" href="http://www.runoob.com/w3c/w3c-tutorial.html">【学习 W3C】</a>
						</h4>
						<div class="category-description">
							<p>W3C 让每个人都能在互联网上分享资源</p>
						</div>
					</section>
				</div>

				<div class="row-fluid top-cats">

					<section class="span4 item-top">
						<h4 class="category">
							<img height="36" width="36" src="<?php echo base_url('/skin/images/icon/quality.png')?>">
							<a target="_blank" href="http://www.runoob.com/quality/quality-tutorial.html">【网站品质】</a>
						</h4>
						<div class="category-description">
							<p>学习如何创建高质量的web网站</p>
						</div>
					</section>
				</div>

			</div>
			<!-- end of page content -->

		</div>
	</div>
</div>
<!-- End of Page Container -->