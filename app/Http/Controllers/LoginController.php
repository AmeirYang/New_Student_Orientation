<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Student;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function forwardLoginView(){
        return view('logins.login');
    }

    public function checkLogin(Request $request){

        $credentials = $this->validate($request, [
            'studentNumber' => 'required|max:11',
            'studentName' => 'required'
        ]);
        
        $users = Student::where('studentNumber',$request->studentNumber)->get();
        if($users->isEmpty()){
            session()->flash('danger', '很抱歉，您的学号不正确！');
            return redirect()->back()->withInput();
        }else{
            foreach ($users as $user) {
                if($user->studentName != $request->studentName){
                    session()->flash('danger', '很抱歉，您的姓名和学号不匹配！');
                    return redirect()->back()->withInput();
                }
                $request->session()->put("user",$user);
                session()->flash('success', '欢迎继续闯关！');
                return redirect()->route('show', $user);
            }
        }
    }
}
