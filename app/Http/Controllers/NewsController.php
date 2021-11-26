<?php

namespace App\Http\Controllers;

use App\Http\Controllers\News1Controller;
use Illuminate\Http\Request;
use App\Song;
use Auth;
use App\User;

class NewsController extends Controller
{
    public function index(){
        return view('news');
    }
}
