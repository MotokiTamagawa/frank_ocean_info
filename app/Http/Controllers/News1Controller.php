<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReviewRequest;//追加
use Auth;
use App\Review;
use App\Song;
use App\User;
use App\Http\Controllers\StartController;
use App\Http\Controllers\NikesController;

class News1Controller extends Controller
{
    public function index()
    {

        return view('News.news1');
    }

}
