<!doctype html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en-US"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en-US"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en-US"> <!--<![endif]-->
<head>
    <!-- META TAGS -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>

    <meta name="keywords" content="<?php echo $keywords;?>">
    <meta name="description" content="<?php echo $description;?>">

    <link rel="shortcut icon" href="<?php echo base_url('/skin/images/favicon.png')?>" />

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
    <script src="<?php echo base_url('/skin/js/html5.js')?>"></script>
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
    <script type='text/javascript' src='<?php echo base_url('/skin/layer/layer.js')?>'></script>

</head>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
    (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-4326202333888021",
        enable_page_level_ads: true
    });
</script>

<body>

<!-- Start of Header -->
<div class="header-wrapper">
    <header>
        <div class="container">


            <div class="logo-container">
                <!-- Website Logo -->
                <a href="/"  title="Knowledge Base Theme">
                    <img src="<?php echo base_url('/skin/images/logo1.png')?>" alt="Knowledge Base Theme">
                </a>
                <span class="tag-line">查BUG,从这里开始!</span>
            </div>


            <!-- Start of Main Navigation -->
            <nav class="main-nav">
                <div class="menu-top-menu-container">
                    <ul id="menu-top-menu" class="clearfix">
                        <li class="current-menu-item"><a href="#html">编程入门教程</a></li>
                        <li><a target="_blank" href="http://fanyi.baidu.com/#en/zh/">翻译</a></li>
                        <li><a target="_blank" href="http://www.jetbrains.com/products.html?fromMenu">开发工具</a>
                        </li>
                        <li><a href="http://sou.zhaopin.com/jobs/searchresult.ashx?kw=php&sm=0&p=1">职位</a></li>
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