<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetsController extends Controller
{
    public function index(){
        return view('tweets.index', [
            'tweets' => current_user()->timeline()
        ]);
    }

    public function store(){
        $attribute = \request()->validate(['body'=>'required|max:255']);
        Tweet::create([
            'user_id'=>auth()->id(),
            'body'=>$attribute['body']
        ]);

        return redirect('/home');
    }
}
