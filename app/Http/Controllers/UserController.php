<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getAuth(Request $request) {
        $title = ['title' => ''];
        return view('user.auth',$title);
    }
    
    public function postAuth(Request $request) {
        $email = $request -> email;
        $password = $request -> password;
        if (Auth::attempt(['email' => $email,'password' => $password])) {
            return redirect('/');
        } else {
            $title = ['title' => 'Not found!'];
            return view('user.auth',$title);
        }
    }
}
