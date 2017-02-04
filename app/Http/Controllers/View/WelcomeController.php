<?php
/**
 * Created by PhpStorm.
 * User: zmm
 * Date: 17-1-28
 * Time: 下午12:58
 */

namespace App\Http\Controllers\View;

use App\Entity\Notice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class WelcomeController extends Controller
{
    public function index(Request $request)
    {
//        if(!isset($request->page)){
//            $request->page = 1;
//        }
        //按照创建时间排序
        $some = Notice::orderBy('created_at','DESC')->paginate(6);
        return view('welcome')->with(['data'=>$some,'url'=>$request->page]);
        //return view('welcome')->with('data',$some);
    }
}