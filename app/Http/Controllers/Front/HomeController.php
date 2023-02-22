<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() //: View
    {
        // $recipes = Recipe::all();

        // return view('public/home', compact('recipes'));
        // return view('public/home', [
        //     'fist' => 'month'
        // ]);
    }
}
