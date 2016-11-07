<!doctype html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en-US"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en-US"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<head>
    <!-- META TAGS -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>学的不仅是技术，更是梦想！</title>

    <meta name="keywords" content="w3c,w3cschool,HTML,CSS,PHP,DOM,JavaScript,jQuery,XML,AJAX,ASP.NET,W3C,MySQL,SQL,jquery mobile,bootstrap,Python,jquery easyui,jquery ui,angularjs">
    <meta name="description" content="专业的编程入门学习及技术文档查询网站, 包括HTML、CSS、Javascript、Python，Java，Ruby，C，PHP , MySQL等各种编程语言的基础知识。 同时本站中也提供了大量的在线实例，通过实例，您可以更好的学习编程。">

    <link rel="shortcut icon" href="images/favicon.png" />

    <!-- Style Sheet-->
    <link rel="stylesheet" href="<?php echo base_url('/skin/css/style.css')?>"/>
    <link rel='stylesheet' id='bootstrap-css-css'  href='<?php echo base_url('/skin/css/bootstrap5152.css?ver=1.0')?>' type='text/css' media='all' />
    <link rel='stylesheet' id='responsive-css-css'  href='<?php echo base_url('/skin/css/responsive5152.css?ver=1.0')?>' type='text/css' media='all' />
    <link rel='stylesheet' id='pretty-photo-css-css'  href='<?php echo base_url('/skin/js/prettyphoto/prettyPhotoaeb9.css?ver=3.1.4')?>' type='text/css' media='all' />
    <link rel='stylesheet' id='main-css-css'  href='<?php echo base_url('/skin/css/main5152.css?ver=1.0')?>' type='text/css' media='all' />
    <link rel='stylesheet' id='red-skin-css'  href='<?php echo base_url('/skin/css/red-skin5152.css?ver=1.0')?>' type='text/css' media='all' />
    <link rel='stylesheet' id='custom-css-css'  href='<?php echo base_url('/skin/css/custom5152.html?ver=1.0')?>' type='text/css' media='all' />


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="js/html5.js"></script>
    <![endif]-->

    <!-- script -->
    <script type='text/javascript' src='<?php echo base_url('/skin/js/jquery-1.8.3.min.js')?>'></script>
    <script type='text/javascript' src='<?php echo base_url('/skin/js/jquery.easing.1.3.js')?>'></script>
    <script type='text/javascript' src='<?php echo base_url('/skin/js/prettyphoto/jquery.prettyPhoto.js')?>'></script>
    <script type='text/javascript' src='<?php echo base_url('/skin/js/jflickrfeed.js')?>'></script>
    <script type='text/javascript' src='<?php echo base_url('/skin/js/jquery.liveSearch.js')?>'></script>
    <script type='text/javascript' src='<?php echo base_url('/skin/js/jquery.form.js')?>'></script>
    <script type='text/javascript' src='<?php echo base_url('/skin/js/jquery.validate.min.js')?>'></script>
    <script type='text/javascript' src='<?php echo base_url('/skin/js/custom.js')?>'></script>

</head>

<body>

<!-- Start of Header -->
<div class="header-wrapper">
    <header>
        <div class="container">


            <div class="logo-container">
                <!-- Website Logo -->
                <a href="/"  title="Knowledge Base Theme">
                    <img src="<?php echo base_url('/skin/images/logo.png')?>" alt="Knowledge Base Theme">
                </a>
                <span class="tag-line">学技术查资料,从这里开始!</span>
            </div>


            <!-- Start of Main Navigation -->
            <nav class="main-nav">
                <div class="menu-top-menu-container">
                    <ul id="menu-top-menu" class="clearfix">
                        <li class="current-menu-item"><a href="index-2.html">编程入门教程</a></li>
                        <li><a href="home-categories-description.html">参考手册</a></li>
                        <li><a href="home-categories-articles.html">编程实例</a></li>
                        <li><a href="articles-list.html">问答</a></li>
                        <li><a href="faq.html">职位</a></li>
                        <li><a href="#">Skins</a>
                            <ul class="sub-menu">
                                <li><a href="blue-skin.html">Blue Skin</a></li>
                                <li><a href="green-skin.html">Green Skin</a></li>
                                <li><a href="red-skin.html">Red Skin</a></li>
                                <li><a href="index-2.html">Default Skin</a></li>
                            </ul>
                        </li>
                        <li><a href="#">More</a>
                            <ul class="sub-menu">
                                <li><a href="full-width.html">Full Width</a></li>
                                <li><a href="elements.html">Elements</a></li>
                                <li><a href="page.html">Sample Page</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </nav>
            <!-- End of Main Navigation -->

        </div>
    </header>
</div>
<!-- End of Header -->

<!-- Start of Search Wrapper -->
<div class="search-area-wrapper">
    <div class="search-area container">
        <h3 class="search-header">有一个问题吗?</h3>
        <p class="search-tag-line">如果你有任何问题，你可以问下面或进入你正在寻找的!</p>

        <form id="search-form" class="search-form clearfix" method="get" target="_blank" action="https://www.baidu.com/s?wd" autocomplete="off">
            <input class="search-term required" type="text" id="s" name="wd" placeholder="搜索您感兴趣的内容、教程或需要查阅的技术文档、参考手册..." title="* 请输入一个搜索项!" />
            <input class="search-btn" type="submit" value="搜索" />
            <div id="search-error-container"></div>
        </form>
    </div>
</div>
<!-- End of Search Wrapper -->