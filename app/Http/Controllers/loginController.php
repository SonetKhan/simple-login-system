<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserModel;

class loginController extends Controller
{
      function loginIndex(){

        return view('Login');
    }
     function onLogin(Request $request){

        $userName = $request->input('userName');

        $psw = $request->input('psw');

        $countValue = UserModel::where('username','=',$userName)->where('password','=',$psw)->count();

        if($countValue==1){
            $request->session()->put('username',$userName);
            return 1;
        }else{

            return 0;
        }

    }
    function onLogout(Request $request){

        $request->session()->flush();

        return redirect('/login');
    }
}
