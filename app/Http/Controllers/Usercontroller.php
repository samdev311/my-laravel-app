<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Usercontroller extends Controller
{
    public function logout(){
        auth()->logout();
        return redirect('/task');
    }
    public function register(Request $request)
    {
        $field = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'coming_from'=>'required',
            'email'=>'required',
            'password' => 'required'
        ]);

        // insert
        User::create($field);

        return redirect("/service");
    }
    public function login(Request $request){
        $incomingfield=$request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        if(auth()->attempt(['email'=>$incomingfield['email'],'password'=>$incomingfield['password']])){
            return redirect('/service');
        }else{
            return "incorrect name or password <a href='/'>go back</a>";
        }
    }
    
}
