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
}
