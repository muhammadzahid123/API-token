<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if($request->isMethod('post'))
        {
            $user = $request->user();
            $token = Str::random(80);
            $user->tokens = $token;
            $user->save();

            return redirect('/post');
        }
        return view('home');

    }
}
