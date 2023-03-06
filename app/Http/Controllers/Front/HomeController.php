<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Front\Recipe;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::where('is_active', '=', 1)->orderBy('id', 'DESC')->paginate(8);

        return view('front/home', compact('recipes'));
    }
}
