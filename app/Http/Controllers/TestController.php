<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;

class TestController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'account'=>'required',
            'data'=>'required',
            'appsecret' =>'required'
        ]);
        $alldata = Test::create([
            'account'=>request('account'),
            'data' =>request('data'),
            'appsecret' =>request('appsecret')
        ]);

        $sign = $request->appsecret;
        $sign.= $request->data;
        $sign.= $request->appsecret;
        $sign = strtoupper(md5($sign));

        return redirect('http://www.kuaidaoyun.com/posttest.aspx?'.'account='.$request->account.'&'.'data='.$request->data.'&'.'sign='.$sign);
    }
}
