<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Student;


class UserController extends Controller
{
    public function showUserInfo($user1){
        $user = Student::find($user1);
        return view('users.show',compact('user'));
    }


    public function userLogout(Request $request){
        $request->session()->pull('user');
        session()->flash('success','您已成功退出!');
        return redirect()->route('root');
    }
}
