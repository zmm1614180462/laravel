@extends('master')

@section('title','登录')



@section('wrapper');
    <div class="aw-login-box">
        <div class="mod-body clearfix">
            <div class="content pull-left">
                <h1 class="logo"><a href=""></a></h1>
                <h2>寝室管理系统</h2>
                <form id="login_form" method="post" onsubmit="return false" action="http://wenda.golaravel.com/account/ajax/login_process/">
                    <input type="hidden" name="return_url" value="http://wenda.golaravel.com/">
                    <ul>
                        <li>
                            <input type="text" id="aw-login-user-name" class="form-control" placeholder="邮箱 / 用户名" name="user_name">
                        </li>
                        <li>
                            <input type="password" id="aw-login-user-password" class="form-control" placeholder="密码" name="password">
                        </li>
                        <li class="alert alert-danger hide error_message">
                            <i class="icon icon-delete"></i> <em></em>
                        </li>
                        <li class="last">
                            <a href="javascript:;" onclick="AWS.ajax_post($('#login_form'), AWS.ajax_processer, 'error_message');" id="login_submit" class="pull-right btn btn-large btn-primary">登录</a>
                            <label>
                                <input type="checkbox" value="1" name="net_auto_login">
                                记住我							</label>
                            <a href="javascript:;">&nbsp;&nbsp;忘记密码</a>
                        </li>
                    </ul>
                </form>
            </div>
            <div class="side-bar pull-left">
                <h3>第三方账号登录</h3>
                <a href="javascript:;" class="btn btn-block btn-weibo"><i class="icon icon-weibo"></i> 新浪微博登录</a>
                <a href="javascript:;" class="btn btn-block btn-qq"> <i class="icon icon-qq"></i> QQ登录</a>
            </div>
        </div>
        <div class="mod-footer">
            <span>还没有账号?</span>&nbsp;&nbsp;
            <a href="/register">立即注册</a>&nbsp;&nbsp;•&nbsp;&nbsp;

        </div>
    </div>
@endsection
