<?php

/**
 * Created by PhpStorm.
 * User: zmm
 * Date: 17-1-24
 * Time: 下午2:58
 */
namespace App\Http\Controllers\View;
use App\Tool\Validate\ValidateCode;
use App\Http\Controllers\Controller;

use App\Http\Requests\Request;
use App\Tool\SMS\SendTemplateSMS;
use Mail;

class MemberController extends Controller
{
    public function toLogin($value='')
    {
        return view('login');
    }

    public function toRegister($value='')
    {
        return view('register');
    }

    public function mail()
    {

       $flag = Mail::send('email_register',['name'=>'zmm'],function ($message){
           $to = '1614180462@qq.com';
           $message->to($to)->subject('测试邮件');

       });
        if($flag){
            return '发送邮件成功，请查收！';
        }else{
            echo '发送邮件失败，请重试！';
        }


    }
}