<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoaiSP;
use App\Models\NewCategory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $newCategories = NewCategory::all();

        return view('home', ['newCategories' => $newCategories]);
    }

    public function admin()
    {
        return view('admin.home');
    }
}
