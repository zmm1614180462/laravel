<?php

/**
 * Created by PhpStorm.
 * User: zmm
 * Date: 17-1-24
 * Time: 下午2:58
 */
namespace App\Http\Controllers\Service;
use App\Entity\Member;
use App\Entity\TempEmail;
use App\Tool\Validate\ValidateCode;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tool\SMS\SendTemplateSMS;

class ValidateController extends Controller
{
    public function create(Request $request)
    {
        $validateCode = new ValidateCode();
        //把验证码传入session
        $request->session()->put('validate_code',$validateCode->getCode());
        return $validateCode->doimg();
    }

    public function sendSMS($value='')
    {
        $sendTemplateSMS= new SendTemplateSMS();
        $charset = '1234567890';
        $_len = strlen($charset)-1;
        $code = '';
        for($i = 0;$i<6;++$i){
            $code.=$charset[mt_rand(0,$_len)];
        }
        $sendTemplateSMS->sendTemplateSMS('18317773926',array($code,60),1);
        return xx;
    }

    public function validateEmail(Request $request)
    {
        $member_id = $request->input('member_id', '');
        $code = $request->input('code', '');
        if($member_id == '' || $code == '') {
            //return '验证异常';
        }
       // return TempEmail::all();
         $tempEmail = TempEmail::where('member_id','=',$member_id)->get();
        if($tempEmail == null) {
          return '验证异常';
        }

        if($tempEmail[0]->code == $code) {
            if(time() > strtotime($tempEmail->deadline)) {
                return '该链接已失效';
            }

            $member = Member::find($member_id);
            $member->active = 1;
            $member->save();

            return redirect('/login');
        } else {
            return '该链接已失效';
        }
    }
}