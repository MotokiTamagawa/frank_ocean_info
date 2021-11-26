<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReviewRequest;//追加
use Auth;
use App\Review;
use App\Song;
use App\User;

class Good_GuyController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        
        //随時変更
        $startreviews = $reviews->where('song_id' ,25) ; 
        //随時変更
        return view('Blonde.good_guy',compact('startreviews'));
    }

    public function store(ReviewRequest $request)
    {
        if (Auth::check()) {
            // ログイン済みのときの処理
            $start = new Review;
            $start -> review = $request->review;
            $start -> song_id = $request->song_id;
            $start-> user_id = Auth::user()->id;
    
            $start -> save();
            // 随時変更
            return redirect() ->route('Good_Guy');
          } else {
          // ログインしていないときの処理
          return view('auth.login');
          }
    }
}
