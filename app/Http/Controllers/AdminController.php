<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Posts;
use App\Category;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
        $n=User::count();
        $posts=Posts::count();
        $Categories=Category::count();
        return view('control.index',compact('n','posts','Categories'));
    }
}
