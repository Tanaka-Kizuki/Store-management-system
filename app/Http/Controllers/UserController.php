<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request) {
        $user = Auth::user();
        // $sort = $request -> sort();
        // $item = Person::orderBy($sort,'asc')->simplePaginate(5);
        // $param = ['item' => $items , 'sort' => $sort,'user' => $user];
        return view('user.index',['user' => $user]);
    }

    public function getAuth(Request $request) {
        $param = ['message' => 'ログインしてください'];
        return view('user.auth',$param);
    }
    
    public function postAuth(Request $request) {
        $email = $request -> email;
        $password = $request -> password;
        if (Auth::attempt(['email' => $email,'password' => $password])) {
            $msg = 'ログインしました。('. Auth::user()->name .')';
        } else {
            $msg = 'ログインに失敗しました';
        }
        return view('user.auth',['message' => $msg]);
    }
}
