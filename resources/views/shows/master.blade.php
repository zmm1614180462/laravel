<!DOCTYPE html>
<html lang="en">
<head>
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
    <meta name="renderer" content="webkit">
    <title>@yield('title')</title>
    <meta name="keywords" content="安阳工学院 学生管理系统 zmm">
    <meta name="description" content="毕业设计">
    <link href="http://wenda.golaravel.com/static/css/default/ico/favicon.ico?v=20140930" rel="shortcut icon" type="image/x-icon">

    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/highlight.js/9.0.0/styles/vs.min.css">

    <link href="http://wenda.golaravel.com/static/css/default/common.css?v=20140930" rel="stylesheet" type="text/css">
    <link href="http://wenda.golaravel.com/static/css/default/link.css?v=20140930" rel="stylesheet" type="text/css">
    <link href="http://wenda.golaravel.com/static/js/plug_module/style.css?v=20140930" rel="stylesheet" type="text/css">
    <link href="http://wenda.golaravel.com/static/css/default/login.css?v=20140930" rel="stylesheet" type="text/css">


    <script type="text/javascript">
        var _8C65B03D6AD9A0612FE7C68E03FF1B4A='';
        var G_POST_HASH=_8C65B03D6AD9A0612FE7C68E03FF1B4A;
        var G_INDEX_SCRIPT = '';
        var G_SITE_NAME = 'Laravel中文网问答社区';
        var G_BASE_URL = 'http://wenda.golaravel.com';
        var G_STATIC_URL = 'http://wenda.golaravel.com/static';
        var G_UPLOAD_URL = 'http://wenda.golaravel.com/uploads';
        var G_USER_ID = '';
        var G_USER_NAME = '';
        var G_UPLOAD_ENABLE = 'N';
        var G_UNREAD_NOTIFICATION = 0;
        var G_NOTIFICATION_INTERVAL = 100000;
        var G_CAN_CREATE_TOPIC = '';

    </script>
    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="http://wenda.golaravel.com/static/js/jquery.form.js?v=20140930" type="text/javascript"></script>
    <script src="http://wenda.golaravel.com/static/js/plug_module/plug-in_module.js?v=20140930" type="text/javascript"></script>
    <script src="http://wenda.golaravel.com/static/js/aws.js?v=20140930" type="text/javascript"></script>
    <script src="http://wenda.golaravel.com/static/js/aw_template.js?v=20140930" type="text/javascript"></script>
    <script src="http://wenda.golaravel.com/static/js/app.js?v=20140930" type="text/javascript"></script>
    <script src="http://wenda.golaravel.com/static/js/md5.js?v=20140930" type="text/javascript"></script>
    <script type="text/javascript" src="http://wenda.golaravel.com/static/js/compatibility.js"></script>
    <!--[if lte IE 8]>
    <![endif]-->
    <style type="text/css">.fancybox-margin{margin-right:15px;}</style></head>

<body>

<div class="aw-top-menu-wrap">
    <div class="container">
        <!-- logo -->
        <div class="aw-logo hidden-xs">
            <a href="http://wenda.golaravel.com"></a>
        </div>
        <!-- end logo -->
        <!-- 搜索框 -->
        <div class="aw-search-box  hidden-xs hidden-sm">
            <form class="navbar-search" action="http://wenda.golaravel.com/search/" id="global_search_form" method="post">
                <input class="form-control search-query" type="text" placeholder="搜索问题、话题或人" autocomplete="off" name="q" id="aw-search-query">
                <span title="搜索" id="global_search_btns" onclick="$('#global_search_form').submit();"><i class="fa fa-search"></i></span>
                <div class="aw-dropdown">
                    <div class="mod-body">
                        <p class="title">输入关键字进行搜索</p>
                        <ul class="aw-dropdown-list hide"></ul>
                        <p class="search"><span>搜索:</span><a onclick="$('#global_search_form').submit();"></a></p>
                    </div>
                    <div class="mod-footer">
                        <a href="" onclick="$('#header_publish').click();" class="pull-right btn btn-mini btn-success publish">发起问题</a>
                    </div>
                </div>
            </form>
        </div>
        <!-- end 搜索框 -->
        <!-- 导航 -->
        <div class="aw-top-nav navbar">
            <div class="navbar-header">
                <button class="navbar-toggle pull-left">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <nav role="navigation" class="collapse navbar-collapse bs-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="" class=""><i class="fa fa-list-ul"></i> 发现</a></li>

                    <!-- <li><a href="http://wenda.golaravel.com/question/" class="">问题</a></li>

                    <li><a href="http://wenda.golaravel.com/article/" class="">文章</a></li> -->

                    <li><a href="http://wenda.golaravel.com/topic/"><i class="fa fa-comments"></i> 话题</a></li>

                </ul>
            </nav>
        </div>
        <!-- end 导航 -->
        <!-- 用户栏 -->
        <div class="aw-user-nav">
            <!-- 登陆&注册栏 -->
            <span>
						<a class="register btn btn-normal btn-success" href="/register/">注册</a>
						<a class="login btn btn-normal btn-primary" href="/login/">登录</a>
					</span>
            <!-- end 登陆&注册栏 -->
        </div>
        <!-- end 用户栏 -->
        <!-- 发起 -->
        <!-- end 发起 -->
    </div>
</div>

<div id="wrapper">
    @yield('wrapper')
</div>

<script type="text/javascript" src="http://wenda.golaravel.com/static/js/app/login.js"></script>

<div class="aw-footer-wrap">
    <div class="aw-footer">
        Copyright © 2017, All Rights Reserved

        <span class="hidden-xs">Powered By <a href="javaScript:;" target="blank">WeCenter 3.0 Beta 2</a></span>

    </div>
</div>



<a class="aw-back-top hidden-xs" href="javascript:;" onclick="$.scrollTo(1, 600, {queue:true});" style="display: none;"><i class="icon icon-up"></i></a>

<script type="text/javascript">
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fc8d13872a523d9c286aa7affbe0921f1' type='text/javascript'%3E%3C/script%3E"));
</script><script src=" http://hm.baidu.com/h.js?c8d13872a523d9c286aa7affbe0921f1" type="text/javascript"></script>
<!-- DO NOT REMOVE -->
<div id="aw-ajax-box" class="aw-ajax-box"></div>
<div style="display:none;" id="__crond"><img src="http://wenda.golaravel.com/crond/run/1485593526" width="1" height="1"></div>

<!-- Escape time: 0.013146877288818 --><!-- / DO NOT REMOVE -->


</body>
@yield('my-js')

</html>