@extends('layouts.home')

@section('wrapper')
    <main class="col-md-8 main-content">

        @foreach($data as $item)
            <article id="" class="post">

                <div class="post-head">
                    <h1 class="post-title"><a href="javascript:;">{{$item->art_title}}</a></h1>
                    <div class="post-meta">
                        <span class="author">作者：<a href="javascript:;">{{$item->art_editor}}</a></span> •
                        <time class="post-date" datetime="2017年1月25日星期三凌晨5点23分" title="2017年1月25日星期三凌晨5点23分">{{date('Y-m-d',$item->art_time)}}</time>
                    </div>
                </div>
                <div class="featured-media">
                    <a href="javascript:;"><img src="{{url($item->art_thumb)}}" ></a>
                </div>
                <div class="post-content">
                    <p>{{$item->art_description}}</p>
                </div>
                <div class="post-permalink">
                    <a href="{{url('a/'.$item->art_id)}}" class="btn btn-default">阅读全文</a>
                </div>

                <footer class="post-footer clearfix">
                    <div class="pull-left tag-list">
                        <i class="fa fa-folder-open-o"></i>

                    </div>
                    <div class="pull-right share">
                    </div>
                </footer>
            </article>
        @endforeach

        <nav class="pagination" role="navigation">
            @if($data->currentPage()>1)
                <a class="older-posts" href="/?page={{$data->currentPage()-1}}"><i class="fa fa-angle-left"></i></a>
            @endif
            <span class="page-number">第 {{$data->currentPage()}} 页 ⁄ 共 {{$data->lastPage()}} 页</span>
            <a class="older-posts" href="{{$data->nextPageUrl()}}"><i class="fa fa-angle-right"></i></a>
        </nav>


    </main>
@endsection
