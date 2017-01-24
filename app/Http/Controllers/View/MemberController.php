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
}