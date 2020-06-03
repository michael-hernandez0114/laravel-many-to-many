<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\InfoUser;
use App\Category;
use App\Page;
use App\Tag;
use App\Photo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $users = User::find(1);
        // $categories = Category::all();
        //dd($users->info);
        //dd($users->categories);
       // dd($users->photos);
        //dd($users->tags);
        //dd($users->pages);
        return view('home');
    }
}
