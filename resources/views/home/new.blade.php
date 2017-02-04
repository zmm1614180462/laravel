@extends('layouts.home')

@section('wrapper')
    <main class="col-md-8 main-content">
        <article id="72" class="post">

            <header class="post-head">
                <h1 class="post-title">{{$field->art_title}}</h1>
                <section class="post-meta">
                    <span class="author">作者：<a href="javascript:;">{{$field->art_editor}}</a></span> •
                    <time class="post-date" datetime="" title="">{{date('Y-m-d',$field->art_time)}}</time>
                </section>
            </header>

            <section class="featured-media">
                <img src="{{url($field->art_thumb)}}" alt="">
            </section>
            <section class="post-content">
                {!! $field->art_content !!}
                <div class="prev-next-wrap clearfix">
                    @if($article['pre'])
                        <a class="btn btn-default" href="{{url('a/'.$article['pre']->art_id)}}"><i style="color:#fff;font-style:normal" class="fa fa-angle-left fa-fw"></i> {{str_limit($article['pre']->art_title,20)}}</a>
                    @else
                        <span class="btn btn-default">没有上一篇了</span>
                    @endif

                    @if($article['next'])
                            <a class="btn btn-default" href="{{url('a/'.$article['next']->art_id)}}">{{str_limit($article['next']->art_title,20)}} <i style="color:#fff;font-style:normal" class="fa fa-angle-right fa-fw"></i></a>
                        @else
                            <span class="btn btn-default">没有下一篇了</span>
                        @endif
                </div>
            </section>

            <footer class="post-footer clearfix">
                <div class="pull-left tag-list">
                    <i class="fa fa-folder-open-o"></i>

                </div>

                <div class="pull-right share">
                    <div class="bdsharebuttonbox share-icons">
                        <a href="#" class="bds_more" data-cmd="more"></a>
                        <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                        <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                        <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                        <a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a>
                        <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                    </div>        </div>
            </footer>

        </article>
    </main>
@endsection