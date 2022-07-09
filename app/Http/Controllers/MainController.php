<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    public function indexLogin(){
        return view('login');
    }

    public function authenticate(Request $request){

        $request->flush();

        $credentials = $request->only('email','password');

        //$remember_me = $request->has('remember_me') ? true : false;

        if(Auth::attempt($credentials)){
            return redirect()->intended(route('dashboard'));
        }else{
            return back()->with('error','hatalı kullanıcı');
        }

    }

    public function logout(){
        Auth::logout();
        return redirect(route('indexLogin'))->with('success','Güvenli çıkış yapıldı');
    }
}
