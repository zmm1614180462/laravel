<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>学生管理系统</title>
    <meta name="description" content="安阳工学院 学生管理系统 zmm">
    <meta name="keywords" content="安阳工学院 学生管理系统 zmm 毕业设计">


    <meta name="HandheldFriendly" content="True">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="/assets/favicon.ico">

    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/highlight.js/9.0.0/styles/vs.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('resources/views/home/css/screen.css')}}">

    <script>
        var _hmt = _hmt || [];
    </script>

    <link rel="canonical" href="http://www.golaravel.com/">
    <meta name="referrer" content="origin">
    <link rel="next" href="http://www.golaravel.com/page/2/">

    <script type="text/javascript" src=" {{asset('resources/views/home/js/ghost-url.min.js')}}"></script>
    <script type="text/javascript">
        ghost.init({
            clientId: "ghost-frontend",
            clientSecret: "26b0e31d612d"
        });
    </script>
    <meta name="generator" content="Ghost 0.7">
    <link rel="alternate" type="application/rss+xml" title="Laravel-简洁、优雅的PHP开发框架(PHP Web Framework)。- Laravel中文网（Laravel中国社区）" href="http://www.golaravel.com/rss/">
    <style id="fit-vids-style">.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}</style>
</head>
<body class="home-template">

<!-- start header -->
<header class="main-header" style="background-image: url(http://image.golaravel.com/5/c9/44e1c4e50d55159c65da6a41bc07e.jpg)" >
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <h1><span class="hide">Laravel - </span>学生寝室管理系统</h1>
                <h2 class="hide">PHP THAT DOESN'T HURT. CODE HAPPY &amp; ENJOY THE FRESH AIR.</h2>

                <img src="http://image.golaravel.com/e/b0/4e4bd788405aab87f03d26edc4ab4.png" alt="Laravel" class="hide">
            </div>

            <div class="col-sm-12">
                <a href="/register" class="btn btn-default btn-doc" target="_blank">登录注册测试阶段</a>
                <a href="javascript:;" class="btn btn-default btn-doc" target="_blank">板块二</a>
                <a href="javascript:;" class="btn btn-default btn-doc" target="_blank">板块三</a>
                <a href="javascript:;" class="btn btn-default btn-doc" target="_blank">板块五</a>
                <!--<a href="http://www.golaravel.com/laravel/docs/4.0/" class="btn btn-default btn-doc" target="_blank">4.0 中文文档</a>-->
                <a href="javascript:;" class="btn btn-default btn-doc" target="_blank">板块六</a>
                <a href="javascript:;" class="btn btn-default btn-doc" target="_blank">板块七</a>
            </div>
        </div>
    </div>
</header>
<!-- end header -->

<!-- start navigation -->
<nav class="main-navigation">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="navbar-header">
                        <span class="nav-toggle-button collapsed" data-toggle="collapse" data-target="#main-menu">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars"></i>
                        </span>
                </div>
                <div class="collapse navbar-collapse" id="main-menu">
                    <ul class="menu">
                        @foreach($navs as $k=>$v)
                             @if($k==0)
                                <li class="nav-current" role="presentation"><a href="{{$v->nav_url}}">{{$v->nav_name}}</a></li>
                             @else
                               <li  role="presentation"><a href="{{$v->nav_url}}">{{$v->nav_name}}</a></li>
                             @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<!-- end navigation -->


<!-- start site's main content area -->
<section class="content-wrap">
    <div class="container">
        <div class="row">

            @yield('wrapper')

            <aside class="col-md-4 sidebar">
                <!-- start widget -->
                <!-- end widget -->

                <!-- start tag cloud widget -->
                <div class="widget">
                    <h4 class="title">社区</h4>
                    <div class="content community">
                        <p>QQ号：1614180462</p>
                        <p><a href="javascript:;" title="管理问答社区" target="_blank" onclick="_hmt.push(['_trackEvent', 'big-button', 'click', '问答社区'])"><i class="fa fa-comments"></i> 管理社区</a></p>
                    </div>
                </div>
                <!-- end tag cloud widget -->

                <!-- start widget -->
                <div class="widget">
                    <h4 class="title">下载</h4>
                    <div class="content download">
                        <a href="javascript:;" class="btn btn-default btn-block" onclick="_hmt.push(['_trackEvent', 'big-button', 'click', '下载 Laravel &amp; Lumen'])">资料下载</a>
                    </div>
                </div>
                <!-- end widget -->


                <!-- start tag cloud widget -->
                <div class="widget">
                    <h4 class="title">文献资料</h4>
                    <div class="content tag-cloud">
                        <a href="">ThinkPHP</a>
                        <a href="javascript:;">Jquery</a>
                        <a href="javascript:;">Bootstrap</a>
                        <a href="javascript:;">NodeJs</a>
                        <a href="javascript:;">JqueryUI</a>
                        <a href="javascript:;">Angular</a>
                        <a href="javascript:;">W3C</a>



                        <a href="/tag-cloud/">...</a>
                    </div>
                </div>
                <!-- end tag cloud widget -->

                <!-- start widget -->
                <!-- end widget -->

                <!-- start widget -->
                <!-- end widget -->                </aside>

        </div>
    </div>
</section>

<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="widget">
                    <h4 class="title">最新文章</h4>
                    <div class="content recent-post">
                        <div class="recent-single-post">
                            <a href="javascript:;" class="post-title">放假通知</a>
                            <div class="date">2017年1月25日</div>
                        </div>
                        <div class="recent-single-post">
                            <a href="javascript:;" class="post-title">放假通知</a>
                            <div class="date">2017年1月25日</div>
                        </div>
                        <div class="recent-single-post">
                            <a href="javascript:;" class="post-title">放假通知</a>
                            <div class="date">2017年1月25日</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="widget">
                    <h4 class="title">标签云</h4>
                    <div class="content tag-cloud">
                        <a href="javascript:;">PHP</a>
                        <a href="javascript:;">PHP</a>
                        <a href="javascript:;">PHP 5</a>
                        <a href="javascript:;">PHP</a>
                        <a href="javascript:;">PHP</a>
                        <a href="javascript:;">PHP</a>

                        <a href="javascript:;">...</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="widget">
                    <h4 class="title">资料网站</h4>
                    <div class="content tag-cloud friend-links">
                        <a href="http://www.bootcss.com" title="Bootstrap中文网" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'bootcsscom'])" target="_blank">Bootstrap中文网</a>
                        <a href="http://www.bootcdn.cn" title="开放CDN服务" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'bootcdncn'])" target="_blank">开放CDN服务</a>
                        <a href="http://www.gruntjs.net" title="Grunt中文网" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'gruntjsnet'])" target="_blank">Grunt中文网</a>
                        <a href="http://www.gulpjs.com.cn/" title="Gulp中文网" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'gulpjscomcn'])" target="_blank">Gulp中文网</a>
                        <hr>
                        <a href="http://lodashjs.com/" title="Lodash中文文档" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'lodashjscom'])" target="_blank">Lodash中文文档</a>
                        <a href="http://www.jquery123.com/" title="jQuery中文文档" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'jquery123com'])" target="_blank">jQuery中文文档</a>
                        <hr>
                        <a href="https://www.upyun.com/" title="又拍云" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'upyun'])" target="_blank">又拍云</a>
                        <a href="http://www.ucloud.cn/" title="UCloud" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'ucloud'])" target="_blank">UCloud</a>
                        <a href="http://www.lecloud.com/" title="乐视云" onclick="_hmt.push(['_trackEvent', 'link', 'click', 'lecloud'])" target="_blank">乐视云</a>
                    </div>
                </div></div>
        </div>
    </div>
</footer>

<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <span>Copyright © <a href="http://www.golaravel.com/">zmm 管理系统</a></span> |
                <span><a href="http://www.miibeian.gov.cn/" target="_blank">京ICP备11008151号</a></span> |
                <span>京公网安备11010802014853</span>
            </div>
        </div>
    </div>
</div>

<a href="#" id="back-to-top" style="display: none;"><i class="fa fa-angle-up"></i></a>

<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="http://cdn.bootcss.com/fitvids/1.1.0/jquery.fitvids.min.js"></script>
<script src="http://cdn.bootcss.com/highlight.js/9.0.0/highlight.min.js"></script>
<script src="{{asset('resources/views/home/js/main.js')}}"></script>



<script>
    $(document).ready(function(){
        var qqgroup = 'QQ群：462694081';
        $('.qq-group').text(qqgroup);
    });
</script>

<script type="text/javascript">
    var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fc8d13872a523d9c286aa7affbe0921f1' type='text/javascript'%3E%3C/script%3E"));
</script><script src=" http://hm.baidu.com/h.js?c8d13872a523d9c286aa7affbe0921f1" type="text/javascript"></script>



</body>
</html>