<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Userr;

class SessionsController extends Controller


{
    //跳转到登录视图
    public function create()
    {
        return view('sessions.create');
    }

    //登录验证
    public function store(Request $request)
    {
       $credentials = $this->validate($request, [
        'studentNumber' => 'required|max:11',  
        'studentName' => 'required|max:255',
       ]);

        $user = User::where("studentNumber",$credentials->studentNumber)->first();
        if($user->studentName == $credentials->studentName){
            session()->flash('success', '欢迎回来！');
            return redirect()->route('/');
        }else{
            session()->flash('danger', '很抱歉，您的邮箱和密码不匹配');
            return redirect()->back()->withInput();
        }
    }
}
