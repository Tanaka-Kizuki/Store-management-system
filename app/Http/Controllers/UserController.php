<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request) {
        if(Auth::check()) {
            $user = Auth::user();
            return view('app.home',['user' => $user]);
        }else {
            return redirect('/');
        };
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }

    public function getAuth(Request $request) {
        $title = ['title' => ''];
        return view('app.auth',$title);
    }
    
    public function postAuth(Request $request) {
        $email = $request -> email;
        $password = $request -> password;
        if (Auth::attempt(['email' => $email,'password' => $password])) {
            return redirect('/home');
        } else {
            $title = ['title' => 'Not found!'];
            return view('app.auth',$title);
        }
    }
}
