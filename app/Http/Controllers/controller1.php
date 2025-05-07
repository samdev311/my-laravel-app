<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controller1 extends Controller
{
    public function login(Request $request){
        $incomingfield=$request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        if(auth()->attempt(['email'=>$incomingfield['email'],'password'=>$incomingfield['password']])){
            return redirect('/task');
        }else{
            return "incorrect name or password <a href='/'>go back</a>";
        }
    }
}
